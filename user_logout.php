<?php
include ('db.php');
session_start();
$name=$_SESSION['email'];
$result=mysqli_query($con,"update usertable set online=0 where href = '$name'");
session_destroy();

header('location: user_home.php');

?>