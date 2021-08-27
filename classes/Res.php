<?php
session_start();
include 'classes/config.php';

class Res extends Config{
    //registration
    public function register($first_name,$last_name,$address,$contact_number,$email,$username,$password){
        $sql_accounts = "INSERT INTO accounts(username,password) VALUES ('$username','$password')";
        $result_accounts = $this->conn->query($sql_accounts);

        if($result_accounts == TRUE){
            $account_id = $this->conn->insert_id;

            $sql_users = "INSERT INTO users(first_name,last_name,address,contact_number,email, account_id) 
                            VALUES ('$first_name','$last_name','$address','$contact_number','$email', '$account_id')";
           
          

            if( $this->conn->query($sql_users)){
                header('Location: login.php');
            }else{
                die('Users table Error:'.$this->conn->error);
            }
        }else{
            die('Accounts table Error:'.$this->conn->error);
        }
    }

    public function login($username,$password){
        $sql = "SELECT * FROM users INNER JOIN accounts ON users.account_id = accounts.account_id
                 WHERE accounts.username = '$username' AND accounts.password = '$password'";
        $result = $this->conn->query($sql);

        if($result->num_rows == 1){
            $row = $result->fetch_assoc();
            $_SESSION["user_id"] = $row["user_id"];
            $_SESSION["first_name"] = $row["fname"];
            $_SESSION["last_name"] = $row["lname"];
            if($row["status"] == "U"){
                header('location:user_dashboard.php');
                
            }else{
                header('location:admin_dashboard.php');
            }
                
            
        }
    }
    private $rooms_type;
    private $check_in;
    private $check_out;
    public function setTotalprice($rooms,$check_in,$check_out){
        $this->rooms_type = $rooms;
        $this->check_in = $check_in;
        $this->check_out = $check_out;
    }

    public function roomPrice($room_id)
    {
        $sql = "SELECT room_price FROM rooms where room_id = '$room_id'";
        $result = $this->conn->query($sql);
        return $result->fetch_assoc();
    }

    public function roomType(){
        if($this->rooms_type == 'room_1'){
            return 100;
        }elseif($this->rooms_type == 'room_2'){
            return 150;
        }else{
            return 200;
        }
    }
    public function allRoomType(){
        $sql = "SELECT * FROM rooms";
        $result = $this->conn->query($sql);
        while($row = $result->fetch_assoc())
        {   
            echo "<option value='".$row["room_id"]."' price='".$row["room_price"]."' capacity='".$row["room_capacity"]."'>".$row["room_name"]."</option>";
        }

       
    }

    public function allRoomCapacity($room_id){
        $sql = "SELECT room_capacity,room_name FROM rooms WHERE room_id = '$room_id'";
        $result = $this->conn->query($sql);
        $rows=$result->fetch_assoc();
        $counter = 1;
            while($counter<=$rows["room_capacity"]){
                echo "<option value=".$rows["room_id"].">".$counter."</option>";
                $counter ++;
            }
        }
    

    public function roomInfo(){
        $sql = "SELECT * FROM rooms";
        $result = $this->conn->query($sql);

        $rows = array();

        if($result->num_rows >= 1){
            while($room_details = $result->fetch_assoc()){
                $rows[] = $room_details;
            }      
                return $rows;
            
            }else{
                 return false;
            }
        }

    public function roomStock($room_id,$room_stock,$num_rooms){
           
            $sql = "UPDATE rooms SET room_stock = '$room_stock'-'$num_rooms' WHERE room_id = '$room_id'";
            
            if($this->conn->query($sql)){
                
            }else{
                die('ERROR: '.$this->conn->error); 
            }

    }

    public function getRoomsInfo($room_id){
            $sql = "SELECT * FROM rooms WHERE room_id = '$room_id'";
            $result = $this->conn->query($sql);

           return $result->fetch_assoc();
    }

    public function getNumberoccupiedRooms($room_id){
           $sql = "SELECT sum(number_rooms) as occupied_rooms FROM reservation WHERE `reservation_status`='active' AND room_id='$room_id' group by room_id";
           $result = $this->conn->query($sql);

          return $result->fetch_assoc();
    }

    public function reservation($user_id,$total_price,$num_people,$num_rooms,$room_type,$check_in,$check_out){
        $check_in_date = new DateTime($check_in);
        $check_out_date = new DateTime($check_out);
        $datediff = date_diff($check_in_date,$check_out_date);

        if($check_in !== $check_out){
            // $room_stock = "SELECT room_stock FROM rooms WHERE room_id = '$room_type'";
            // $result_room_stock = $this->conn->query($room_stock);

            // if($result_room_stock->fetch_assoc()){
                $sql = "INSERT INTO reservation(user_id,total_price,number_people,number_rooms,room_id,check_in,check_out,nights) 
                    VALUES('$user_id','$total_price','$num_people','$num_rooms','$room_type','$check_in','$check_out',' $datediff->days')";
                $result = $this->conn->query($sql);
                $reservation_id = $this->conn->insert_id;
            
                    if($result ==TRUE){
                        header("location:check_reservation.php?reservation_id=".$reservation_id);
                    }else{
                        die("error:".$this->conn->error);
                    }
            // }
            
        }else{
            die('Check-in and check-out cannot be on the same day'.$this->conn->error);
        }
        
    }
    
    public function checkReservation($reservation_id){
        $sql = "SELECT reservation_id,users.user_id,rooms.room_id,first_name,last_name,room_name,room_price,room_capacity,number_rooms,check_in,check_out,number_people,total_price FROM reservation 
                INNER JOIN users ON reservation.user_id = users.user_id 
                INNER JOIN rooms ON reservation.room_id = rooms.room_id WHERE reservation.reservation_id = '$reservation_id'";
        
        $result = $this->conn->query($sql);
        
        if($result->num_rows >= 1){
                return  $result->fetch_assoc();
                
        }else{
            return false;
        }
    }

    public function reservationHistory($user_id){
        $sql = "SELECT * FROM reservation 
                INNER JOIN rooms ON reservation.room_id = rooms.room_id
                WHERE reservation.user_id = '$user_id'";
        $result = $this->conn->query($sql);

        if($result->num_rows >= 1){
            $row = [];
            while($res_history = $result->fetch_assoc()){
                array_push($row,$res_history);
            } 
            return $row;
            // if($check_out > $time = new DateTime()){

            // }
        }else{
            return false;
        }
    }

    public function cancelReservation($reservation_id){
        $sql = "UPDATE reservation SET reservation_status = 'cancel' WHERE reservation_id = '$reservation_id'";
        
        if($this->conn->query($sql)){
            header("location:user_account.php");
        }else{
            die("Failed to delete your reservation");
        }
    }
    

    public function userInformation($user_id){
        $sql = "SELECT * FROM accounts INNER JOIN users ON accounts.account_id = users.account_id WHERE user_id = '$user_id'";
        $result = $this->conn->query($sql);
        if($result->num_rows == 1){
           return  $result->fetch_assoc();
        }else{
            return false;
        }
    }

    public function reserveAgain($room_id){
        $sql = "SELECT * FROM rooms WHERE room_id = '$room_id'";
        $result = $this->conn->query($sql);

        if($result->num_rows == 1){
            return $result->fetch_assoc();
        }else{
            return false;
        }
    }

    public function updateUserInfo($account_id,$user_id,$new_first_name,$new_last_name,$new_address,$new_contact_number,$new_email,$new_username,$new_password){
        $sql = "UPDATE accounts 
                SET username = '$new_username',
                    password = '$new_password'
                WHERE account_id = '$account_id'";
        $result = $this->conn->query($sql);

        if($result == TRUE){
            $sql_users = "UPDATE users
                        SET first_name = '$new_first_name',
                            last_name = '$new_last_name',
                            address = '$new_address',
                            contact_number = '$new_contact_number',
                            email = '$new_email'
                        WHERE user_id = '$user_id'";
            
            if($this->conn->query($sql_users)){
                header('location:user_account.php');
            }else{
                die('Failed to update users table'.$this->conn->error); 
            }
        }else{
            die('Failed to update accounts table'.$this->conn->error);
        }
    }

    public function Logout($user_id){
        $sql = "DELETE FROM users INNER JOIN accounts ON users.account_id=accounts.account_id
                 WHERE user_id = '$user_id'";
        
        if($this->conn->query($sql)){
            header('location:toppage.php');
        }else{
            die('You cannot logout your account.');
        }
    }

    // public function Status(){
    //     $sql = "SELECT * FROM rooms ";
    //     $result = $this->conn->query($sql);
        
    //     if($result->num_rows >= 1){
    //         $row = [];
    //         while($room_status = $result->fetch_assoc()){
    //             array_push($row,$room_status);
    //         } 
    //         return $row;
    //     }else{
    //         return false;
    //     }
    // }

    public function userStatus(){
        $sql = "SELECT * FROM users INNER JOIN accounts ON users.account_id = accounts.account_id ";
        $result = $this->conn->query($sql);

        if($result->num_rows >= 1){
            $row = [];
            while($user_status = $result->fetch_assoc()){
                array_push($row,$user_status);
            } 
            return $row;
        }else{
            return false;
        }
    }
// public function adminRoomStatus(){
//    $sql = "SELECT * FROM rooms INNER JOIN reservaiton ON rooms.room_id = reservaiton.room_id" ;
//    $result = $this->conn->query($sql);

//    return $result;
// }

// public function adminRoomInfo($room_id){
//     $sql = "SELECT * FROM rooms INNER JOIN reservation ON rooms.room_id = reservation.room_id 
//             WHERE rooms.room_id = '$room_id'";
//     $result = $this->conn->query($sql);

//     return $result;        
// }

public function adminRoomInfo($room_id){
    $sql = "SELECT * FROM reservation 
            INNER JOIN users ON reservation.user_id = users.user_id
            INNER JOIN rooms ON reservation.room_id = rooms.room_id
            WHERE reservation.room_id = '$room_id'";
    $result= $this->conn->query($sql);

    if($result->num_rows >= 1){
        $row = [];
        while($user_status = $result->fetch_assoc()){
            array_push($row,$user_status);
    }
    return $row; 
}else{
    return false;
}


}

public function insertToTable($name, $pic){
    $sql= "INSERT INTO picture(pic_name, pic_image) VALUES('$name', '$pic')";

    if($this->conn->query($sql)){
        //successful in inserting the picture
        return 1;
    }else{
        echo "Not saved " .$this->conn->error;
        return 0;
    }
}

public function showAllImages(){
    $sql = "SELECT * FROM picture";

    $rows = array();
    $result = $this->conn->query($sql);
    if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $rows[] = $row;
        }

        return $rows;
    }
}

public function searchSpecificImage($pic_id){
    $sql = "SELECT * FROM  picture WHERE pic_id = '$pic_id'";
    $result = $this->conn->query($sql);
    $row = $result->fetch_assoc();

    return $row;
}

}


?>