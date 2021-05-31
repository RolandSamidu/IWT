<!-- ******************
IT20615970
Gunapala K. M. H. M. M 
Group MLB_01.02.04
****************** -->


<?php
session_start();
include("dbconnection.php");
$idValue = $_GET['idvalue'];
$sql = "select * From contactus where id=" . $idValue;
if (!is_numeric($idValue)) { // Checking data it is a number or not

  $_SESSION['danger'] = "contact us message not found";
  header('location: admincontactus.php');
}
$contactusdata = $conn->query($sql);
$hasValue = false;
foreach ($contactusdata as $key => $value) {
  $hasValue = true;
}
if (!$hasValue) {
  $_SESSION['danger'] = "Contact us message not found";

  header('location: admincontactus.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../src/style/adminArea/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <header role="banner">
    <h1>Warrior's Admin</h1>
    <ul class="utilities">
      <br>
      <li class="users"><a href="#">My Account</a></li>
      <li class="logout warn"><a href="">Log Out</a></li>
    </ul>
  </header>

  <nav role='navigation'>
    <ul class="main">
      <li>
        <a href="adminindex.php">
          <i class="fa fa-tachometer"></i> Dashboard
        </a>
      </li>
      <li>
        <a href="admincontactus.php">
          <i class="	fa fa-address-book"></i> Contact Us
        </a>
      </li>
      <li>
        <a href="adminservice.php">
          <i class="fa fa-bars" aria-hidden="true"></i> Service
        </a>
      </li>
    </ul>
  </nav>

  <main role="main">

    <section class="panel important">
      <h2>Contact Us</h2>
      <?php

      if (!empty($contactusdata)) {
      };
      ?>
    </section>

    <section class="panel important">
      <div class="row">
        <div class="col-1 ">
        </div>
        <div class="col-10">
          <div class=" bg-card">

            <?php
            foreach ($contactusdata as $key => $value) {
              # code...
            ?>
              <h5>
                <small>Name: </small> <?php echo $value['first_name'] . ' ' . $value['last_name'];
                                      ?>
              </h5>
              <h5>
                <small>Email: </small> <?php echo $value['email']; ?>
              </h5>
              <h5>
                <small>Phone: </small> <?php echo $value['phone']; ?>
              </h5>
              <h5 style="margin-bottom: 0.1px;">
                <small>Comment:
              </h5>
              <p><?php echo  $value['comments'] ?></p>
            <?php
            }
            ?>
          </div>
        </div>
      </div>
    </section>

  </main>

</body>

</html>