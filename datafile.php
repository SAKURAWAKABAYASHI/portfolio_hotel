<?php
include 'classes/Res.php';
$resObj = new Res;

if(isset($_POST["register"])){
    $first_name = $_POST["fname"];
    $last_name = $_POST["lname"];
    $address = $_POST["address"];
    $contact_number = $_POST["contact_number"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $con_password = $_POST["con_password"];

    if($password === $con_password){
        $validate_register = $resObj->register($first_name,$last_name,$address,$contact_number,$email,$username,$password);
    }else{
        die('confirm password is not same with password');
    }
}elseif(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $resObj->login($username,$password);

}elseif(isset($_POST["reserve"])){
    $user_id = $_POST["user_id"];
    $total_price = $_POST["total_price"];
    $num_people = $_POST["people"];
    $num_rooms = $_POST["num_rooms"];
    $room_type = $_POST["room_type"];
    $check_in = $_POST["check_in"];
    $check_out = $_POST["check_out"];
    
    $resObj->reservation($user_id,$total_price,$num_people,$num_rooms,$room_type,$check_in,$check_out);
    $resObj->roomStock($user_id,$room_stock,$num_rooms);

}elseif(isset($_POST["update_userinfo"])){
    $account_id = $_POST["account_id"];
    $user_id = $_POST["user_id"];
    $new_first_name = $_POST["new_fname"];
    $new_last_name = $_POST["new_lname"];
    $new_address = $_POST["new_address"];
    $new_contact_number = $_POST["new_contact_number"];
    $new_email = $_POST["new_email"];
    $new_username = $_POST["new_username"];
    $new_password = $_POST["new_password"];
    $new_con_password = $_POST["new_con_password"];

    if($new_password === $new_con_password){
        $validate_userinfo = $resObj->updateUserInfo($account_id,$user_id,$new_first_name,$new_last_name,$new_address,$new_contact_number,$new_email,$new_username,$new_password);
    }else{
        die('confirm password is not same with password');
    }
}elseif(isset($_POST["delete_res"])){
    $reservation_id = $_POST["reservation_id"];

    $resObj->cancelReservation($reservation_id);
}elseif(isset($_POST["logout"])){
    $user_id = $_POST["user_id"];
}elseif(isset($_POST["room1"])){
    $room_1 = $_POST["room_1"];
    
}
error_reporting(E_ALL);
    ini_set('display_errors',1);

    if(isset($_POST["upload"])){
        $pic = $_FILES["photo"]["name"];
        $pic_id = $_POST["pic_id"];
        $name = $_POST["photo_name"];

        $target_dir = "upload/"; //folder in your computer where you will place the picture
        $target_file = $target_dir . basename($_FILES["photo"]["name"]);

        $ans = $resObj->updateToTable($name, $pic,$pic_id);

        if($ans == 1){
            // Upload file
            move_uploaded_file($_FILES["photo"]["tmp_name"],$target_file);
            //move_uploaded_file ~~~ transfers the picture from one location
            // to another location
            header("Location: admin_dashboard.php");
        }else{
            echo "Error";
        }
        
    }

?>