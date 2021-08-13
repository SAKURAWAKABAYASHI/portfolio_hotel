<?php
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
            $_SESSION["account_id"] = $row["user_id"];
            $_SESSION["firsr_name"] = $row["fname"];
            $_SESSION["last_name"] = $row["lname"];
            if($row["status"] == "U"){
                header('location:user_dashboard.php');
            }else{
                header('location:admin_dashboard.php');
            }
                
            
        }
    }
}
?>