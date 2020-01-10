<?php
session_start();
$mysqli=mysqli_connect("localhost","root","","project");
session_destroy();
header("location:LOGIN.php");

?>

