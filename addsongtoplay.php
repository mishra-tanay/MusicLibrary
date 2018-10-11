<?php
include 'dbinfo.php';
include 'navbar.php';
?>
<?php 
$play=$_SESSION['playli'];

$link = mysqli_connect($host,$user,$pass) or die( "Unable to connect");
mysqli_select_db($link, $database) or die( "Unable to select database");
