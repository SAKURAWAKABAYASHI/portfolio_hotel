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
}elseif(isset($_POST["calculation"])){ 
    $rooms = $_POST["rooms"];
    $num_rooms = $_POST["num_rooms"];
    $check_in = $_POST["check_in"];
    $check_out = $_POST["check_out"];
   
    $resObj->setTotalprice($rooms,$num_rooms,$check_in,$check_out);
}elseif(isset($_POST["reserve"])){
    $num_people = $_POST["people"];
    $num_rooms = $_POST["num_rooms"];
    $rooms = $_POST["rooms"];
    $check_in = $_POST["check_in"];
    $check_out = $_POST["check_out"];
    $total_price = number_format($resObj->calculateTotalPrice($rooms,$num_rooms,$check_in,$check_out),2); 
    
    $resObj->reservation($num_people,$num_rooms,$rooms,$check_in,$check_out,$total_price);
}

?>