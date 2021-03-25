<?php

$db_name = "user_data";
$db_user = "root";
$db_pass = "";
$db_host = "localhost";

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(!$con) {
    echo "connection error";
} else {
    echo "connection success";
}

?>