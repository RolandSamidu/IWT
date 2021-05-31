<!-- ******************
IT20615970
Gunapala K. M. H. M. M 
Group MLB_01.02.04
****************** -->


<?php
session_start();
include("dbconnection.php");
$sql = "select * From services";
$servicesdata = $conn->query($sql);

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
      <h2>Service</h2>
      <div class="row">
        <div class="col-12" style="text-align: right;">
          <a href="adminserviceadd.php" class="button button4">Add new</a>
        </div>
      </div>

      <?php
      if (isset($_SESSION['success'])) {  ?>
        <h6 class="success-message">
          <?php
          echo $_SESSION['success'];
          unset($_SESSION['success']);

          ?></h6>
      <?php } ?>
      <?php
      if (isset($_SESSION['danger'])) {
      ?>
        <h6 class="danger-message">
          <?php

          echo $_SESSION['danger'];
          unset($_SESSION['danger']);

          ?>
        </h6>
      <?php } ?>
    </section>

    <section class="panel important">
      <table>
        <thead>
          <tr>
            <th>Id</th>
            <th>Service Image</th>
            <th>Service Name</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($servicesdata as $key => $value) {
            # code...

          ?>
            <tr>
              <td data-column="Id"><?php echo ++$key ?> </td>
              <td data-column=" ">
                <?php echo $value['category'];  ?>
              </td>
              <td data-column=" ">
                <?php echo $value['title'];  ?>
              </td>
              <td data-column="Action">
                <a href="adminserviceedit.php?idvalue=<?php echo  $value['id'] ?>" class="button button2">Edit</a>
                <a href="javascript:void()" class="button button3" onclick="ConfirmDelete(<?php echo  $value['id'] ?>)">Delete</a>
              </td>
            </tr>
          <?php
          }
          ?>

        </tbody>
      </table>
    </section>

  </main>

  <script type="text/javascript">
      function ConfirmDelete(id)
      {
            if (confirm("Do you want to delete that service?"))
                 location.href='adminservicedelete.php?idvalue='+id;
      }
  </script>
</body>

</html>