<?php

 $name = $_POST['name'];
 $age = $_POST['age'];
 $course = $_POST['course'];

 $connection = new mysqli('localhost','root','','Trainer_manage');
 if($connection -> connect_error){
     die('Connection Failed...!'.$connection -> connect_error);
 }else{
     $stmt = $connection -> prepare("insert into trainerdb(name,age,course)
     value(?,?,?)");
     $stmt -> bind_param("sis",$name,$age,$course);
     $stmt -> execute();
     echo "Added Successfully...!";
     $stmt ->close();
     $connection ->close();
 }





?>

<?php


$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'Trainer_manage');

if(isset($_POST['delete'])){
    $id = $_POST['id'];
    $query = "DELETE FROM 'trainerdb' WHERE id='$id'";
    $query_run = mysqli_query($connection,$query);
    
    if( $query_run){
        echo '<script type = "text/javascript"> alert("Data Deleted") </script>';
    }else{
        echo '<script type = "text/javascript"> alert("Data Not Deleted") </script>';
    }
}
?>

<?php

$dbase = mysqli_select_db($connection,'Trainer_manage');

if(isset($_POST['update'])){
    $id = $_POST['id'];

    $query = "UPDATE 'trainerdb' SET name='$_POST[name]',age='$_POST[age]',course='$_POST[course]' WHERE id = '$_POST[id]'";
    $query_run = mysqli_query($connection,$query);

    if($query_run){
        echo '<script type="text/javascript"> alert("Data Updated")</script>';
    }else{
        echo '<script type="text/javascript"> alert("Data Not Updated")</script>';
    }
}
?>


<!DOCTYPE html>
<html>
<head>
   
    <title> Trainer Details </title>
</head>
<body>

<?php  

$query = "select * from trainerdb";
$result = mysqli_query($connection,$query);


?>
    <table align = "center" border = "1px" style = "width:600px; line-height:40px;">
     <tr>
        <th colspan = "4"><h2> Trainer Record </h2></th>
     </tr>
     <t>
        <th> ID </th>
        <th> Name </th>
        <th> Age </th>
        <th> Course </th>
     </t>
        <?php   
           while($rows = mysqli_fetch_assoc($result)){
        ?>       
               <tr>
                  <td><?php echo $rows['id']; ?></td>
                  <td><?php echo $rows['name']; ?></td>
                  <td><?php echo $rows['age']; ?></td>
                  <td><?php echo $rows['course']; ?></td>
                </tr>  
          <?php      
           }
        
        ?>
    </table>    
</body>
</html>