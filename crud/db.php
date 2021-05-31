<?php

function createdb(){
    $severname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "TrainerManage";

    //connection
    $connection = mysqli_connect($severname,$username,$password);

    //check connection
    if(!$connection){
        die("connection Failed:" .mysqli_connect_error());
    }

    //create database
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

    if(mysqli_query($connection,$sql)){
        $connection = mysqli_connect($severname,$username,$password,$dbname);

        $sql = "
              CREATE TABLE IF NOT EXISTS trainers(
                  id INT(11)NOT NULL AUTO_INCREMENT PRIMARY KEY,
                  name VARCHAR(25)NOT NULL,
                  age INT(50),
                  course VARCHAR(20)
              );        
        ";

        if(mysqli_query($connection,$sql)){
            return $connection;
        }else{
            echo "Cannot Create Table...!";
        }

    }else{
        echo "Error while creating database".mysqli_error($connection);
    }
}

?>