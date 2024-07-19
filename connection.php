<?php 
$host="localhost";
$username="root";
$password=" ";
$db_name="my_database";

$con=mysqli($host, $username, $password, $db_name);
if(mysqli_connect_errno()){
    die("Failed to connect with MySQL: " .mysqli_connect_error());
}
?>
