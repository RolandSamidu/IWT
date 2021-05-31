<?php

include_once("db.php");
include_once("content1.php");


$connection = createdb();

//create button click
if(isset($_POST['create'])){
    createData();
}


function createData(){
    $trainername="";
    if( isset($_GET["Name"]) or isset($_GET["age"]) or isset($_GET["course"])){
    $trainername = textboxValue("Name");
    $trainerage = textboxValue("age");
    $trainercourse = textboxValue("course");
    }
    if($trainername && $trainerage && $trainercourse){
        
        $sql="INSERT INTO trainers(Name ,age ,course)
                VALUES('$trainername','$trainerage','$trainercourse')";

       if(mysqli_query($GLOBALS['con'],$sql)){
           echo "Record Successfully Inserted...!";
       }else{
           echo "Error";
       }         

    }else{
        echo "Provide Data in the Textbox";

    }
}

function textboxValue($value){
    $textbox = mysqli_real_escape_string($GLOBALS['con'],trim($_POST[$value]));

    if(empty($textbox)){
        return false;
    }else{
        return $textbox;
    }
}


?>