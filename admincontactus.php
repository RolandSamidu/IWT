<?php
include("dbconnection.php");
$sql="select * From contactus";
$contactusdata = array ();

    if ($result = $conn->query($sql)) {
        if ($result->num_rows > 0) {
            $contactusdata = $result ->fetch_array();
        
            // Free result set
            $result->free();
        } else {
            echo "No records matching your query were found.";
        }
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
      <li class=" active">
        <a href="#">
          <i class="fa fa-tachometer"></i> Dashboard
        </a>
      </li>
    </ul>
  </nav>

  <main role="main">

    <section class="panel important">
      <h2>Service</h2>
      <div class="row">
        <div class="col-12" style="text-align: right;">
          <a href="#" class="button button4">Add new</a>
        </div>
      </div>
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
        foreach ($contactusdata as $key => $value) {
            # code...
        
        ?>
          <tr>
            <td data-column="Id"><?php echo $value ?> </td>
            <td data-column="Service Image">
             <?php
                echo $value;
             ?>
            </td>
            <td data-column="Service Name"><?php echo $value ?></td>
            <td data-column="Action">
              <a href="#" class="button button1">Edit</a>
              <a href="#" class="button button3">Delete</a>
            </td>
          </tr>
          <?php
        }
          ?>
         
        </tbody>
      </table>
    </section>

  </main>

</body>

</html>