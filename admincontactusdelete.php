<?php
session_start();
include("dbconnection.php");
$idValue = $_GET['idvalue'];
$sql = "DELETE FROM contactus WHERE id=" . $idValue;

if (!is_numeric($idValue)) { // Checking data it is a number or not

  $_SESSION['danger'] = "Contact us message not found";
  header('location: admincontactus.php');
}

if ($conn->query($sql) === TRUE) {
    $_SESSION['success'] = "Contact us message deleted";
  
    header('location: admincontactus.php');
  } else {
    $_SESSION['danger'] = "Contact us message not found";
  
    header('location: admincontactus.php');
  }
