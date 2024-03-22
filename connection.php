<?php
$servername="localhost";
$username ="root";
$password ="7224";
$db_name ="login";
$conn = new mysqli($servername,$username,$password,$db_name,3306);
if($conn->connect_error){
    die("connection failed.$conn->connect_error");
}
echo"";
?>