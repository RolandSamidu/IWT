<?php
session_start();
include("dbconnection.php");
$idValue = $_GET['idvalue'];
$sql = "select * From services where id=" . $idValue;
if (!is_numeric($idValue)) { // Checking data it is a number or not

  $_SESSION['danger'] = "Service message not found";
  header('location: adminservice.php');
}
$servicedata = $conn->query($sql);
$hasValue = false;
foreach ($servicedata as $key => $value) {
  $hasValue = true;
  $title = $value['title'];
  $category = $value['category'];
  $price = $value['price'];
  $intro = $value['intro'];
  $description = $value['description'];
  $image = $value['image'];
}
if (!$hasValue) {
  $_SESSION['danger'] = "Service message not found";

  header('location: adminservice.php');
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
    <h1>Admin Panel</h1>
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
    </section>

    <section class="panel important">
      <form action="adminserviceeditdb.php" method="post">
        <div class="row">
          <div class="col-6">
            <label for=""> Service title:</label>
            <input type="text" name="title" value="<?php echo  $title ?> "/>
          </div>
          <div class="col-6">
            <label for=""> Service category:</label>
            <select name="category" id="inp_category" required>
              <option value="">Select category</option>
              <option value="volvo" <?php echo $category=='volvo'?'selected':'' ?>>Volvo</option>
              <option value="saab" <?php echo $category=='saab'?'selected':'' ?>>Saab</option>
              <option value="mercedes" <?php echo $category=='mercedes'?'selected':'' ?>>Mercedes</option>
              <option value="audi"<?php echo $category=='audi'?'selected':'' ?>>Audi</option>
            </select>
          </div>

          <div class="col-6"  style="margin-right: 50px;">
            <label for=""> Service Price:</label>
            <input type="text" name="price"  value="<?php echo  $price ?> "/>
            <br>
          </div>
          <div class="col-6" >
            <label for=""> Service Intro:</label>
            <textarea name="intro" rows="8" cols="67"><?php echo  $intro ?></textarea>
          </div>
          <div class="col-6">
            <label for=""> Service Description:</label>
            <textarea name="description" rows="15" cols="67"><?php echo  $description ?></textarea>
          </div>
          <div class="col-6 ">
            <label> Image </label>
            <div class="image_container">
              <img id="inp_image_pre" src="<?php echo  $image ?>" style="width:100%" alt="your image" />
            </div>
          </div>
          <div class="col-12" style="text-align: center;">
            <p>
              <input type="hidden" name="idValue"  value="<?php echo  $idValue ?> ">
              <input type="submit" name="submit" value="Update" />
            </p>
          </div>
        </div>
        </div>
      </form>
    </section>

  </main>

</body>

</html>