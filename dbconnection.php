<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "warriorzone";

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname );

if($conn -> connect_error){
die("connection faild :" .$conn -> connect_error);
}


?>