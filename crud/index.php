<?php


include_once("content1.php");

include_once("op.php");
createData();






?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Admin</title>
</head>
<body>

<main>
    <div class="container">
      <center> <h1 class="py-1">Trainer Manage </h1> </center>

      <div class="flex">
       
      <form action="" method="post" clas="w-50">
      <div class="form1">
      <center>
           <?php inputElement("Trainer_ID","ID",""); ?>
           <?php inputElement("Trainer_Name","Name",""); ?>
           <?php inputElement("Trainer_Age","age",""); ?>
           <?php inputElement("Course","course",""); ?>
        </center> 
           </div>
      </form>  
      </div>
      <center><div class="button">
         <?php buttonElement("btn-create","Insert","create",""); ?>
         <?php buttonElement("btn-read","Refresh","Read",""); ?>
         <?php buttonElement("btn-update","Update","update",""); ?>
         <?php buttonElement("btn-delete","Delete","delete",""); ?>
      </div></center>

     <center> <div class="dtable">
          <table width="50%">
              <thead>
                  <tr>
                      <th> ID </th>
                      <th> Name </th>
                      <th> Age </th>
                      <th> Course </th>
                      <th> Edit </th>
                  </tr>
              </thead>
              <tbody id="tbody">
                  <tr>
                      <td> 1 </td>
                      <td> Andrew </td>
                      <td> 32 </td>
                      <td> Beginner course </td>
                      <td> <button> "" </button> </td>
                  </tr>
              </tbody>
          </table>
     </div></center>
    </div>
</main>

    
</body>
</html>