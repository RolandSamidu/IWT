



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
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
      <li class=" active">
        <a href="#">
          <i class="fa fa-tachometer"></i> Dashboard
        </a>
      </li>
    </ul>
  </nav>
  <main role="main">

    <section class="panel important">
      <h2>Trainer Manage</h2>
    </section>

    <section class="panel important">
      <form action="inc/connection.php" method="post">
        <div class="row">
          <div class="col-6">
            <label for=""> ID:</label>
            <input type="text" name="id" />
          </div>
          <div class="col-6">
            <label for=""> Name:</label>
            <input type="text" name="name" />

          

          <div class="col-6">
            <label for=""> Age:</label>
            <input type="text" name="age" />
            <br>
          </div>
          <div class="col-6">
            <label for=""> Course:</label>
            <input type="text" name="course" />
          </div>
         
          
          <div class="col-12" style="text-align: center;">
            <p>
              <input type="submit" name="submit" value="Add" />
              <input type="submit" name="delete" value="Delete" />
              <input type="submit" name="update" value="Update" />
            </p>
          </div>
        </div>
        </div>
      </form>
    </section>

  </main>
 
</body>

</html>

