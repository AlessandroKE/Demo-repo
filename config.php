<?php
$db_host = 'Localhost';
$db_name = 'cms';
$db_user = 'root';
$dp_pass = '';

$conn = mysqli_connect($db_host, $db_name, $db_user, $db_pass);

//To check whether the connection has succedded use mysql_connect_error()
if (mysqli_connect_error()){
    echo mysqli_connect_error();
    exit;
}

echo "Connected sucessfully";
?>