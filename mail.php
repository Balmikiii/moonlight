<?php
include 'include/connection.php';
	
            
            $mydb = "insert into msg (name,email,msg)
            value('$name','$email','$comment')";
            $query = mysqli_query ($con,$mydb);
            echo "success your data send to balmiki";
            //header('location:success.html');
?>
 