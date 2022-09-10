<?php

$con = new mysqli("localhost","root","");
    if($con->connect_errno > 0){
			die('Unable to connect to database [' . $con->connect_error . ']');  } 
     
            $con->query("CREATE DATABASE IF NOT EXISTS moonlight");
            
            mysqli_select_db($con,"moonlight");
            
            $balmiki="CREATE TABLE IF NOT EXISTS msg (
            id int(11) NOT NULL auto_increment,
             name varchar(300)NOT NULL,
             email varchar(300)NOT NULL,
             msg varchar(255)NOT NULL,
             PRIMARY KEY(id) )";
           $con->query($balmiki);

           
           if(isset($_POST['submit'])){
               $name = $_POST['name'];
               $email = $_POST['email'];
               $comment = $_POST['msg'];
            }
?>