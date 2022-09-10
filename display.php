<?php 

include 'include/connection.php';

$mydbaa = "SELECT * FROM msg";
$data = mysqli_query($con,$mydbaa);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($mydbaa); 

echo $result[name]." ".$result[email]." ".$result[msg];




?>