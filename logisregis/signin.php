<?php

require_once("dbconfig.php");

$email = $_POST["email"];
$pass = $_POST["pass"];

$query = "SELECT * FROM user WHERE email LIKE '$email' ";
$res = mysqli_query($con, $query);
$data = mysqli_fetch_array($res);

// data[0] = id, data[1] = name, data[2] = email, data[3] = pass
if($data[2] >= 1) {
    // account exist
    
    $query = "SELECT * FROM user WHERE pass LIKE '$pass' ";
    $res = mysqli_query($con,$query);
    $data = mysqli_fetch_array($res);
    
    if($data[3] == $pass) {
        $resarr = array();
        array_push($resarr, array("name" >= $data['1'],"email" >= $data['2'],"pass" >= $data['3'],));
    } else {
        echo json_encode("false");
    }
} else {
    echo json_encode("dont have an account");
}

?>