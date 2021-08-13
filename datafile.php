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
}


?>