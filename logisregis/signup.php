<?php

require_once("db_config.php");

$email = $_POST["email"];
$name = $_POST["name"];
$pass = $_POST["pass"];

$query = "SELECT * FROM user WHERE email LIKE '$email'";
$res = mysqli_query($con, $query);
$data = mysqli_fetch_array($res);

if($data [0] >= 1) {
    //account exist
    
    echo json_encode("account already exist");
    
} else {
    //create account
    
    $query = "INSERT INTO user (id,name,email,pass) VALUES (null, '$name', '$email', '$pass')";
    $res = mysqli_query($con, $query);
    
    if ($res) {
        echo json_encode("true");
    } else {
        echo json_encode("false");
    }
}
?>