<!-- ******************
IT20615970
Gunapala K. M. H. M. M 
Group MLB_01.02.04
****************** -->

<?php
include("dbconnection.php");
$sql = "insert into contactus (first_name,last_name,email,phone,comments)
values ('".$_POST['first_name']."','".$_POST['last_name']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['comments']."')";
if($conn -> query($sql)==true){
    session_start(); //also can be done before it

$_SESSION['success'] = "contactus message crated successful";

header('location: contactus.php');

}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn ->close();
?>