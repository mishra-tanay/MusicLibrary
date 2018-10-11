<?php
include 'dbinfo.php'; 
include 'navbar.php';
$email;
$Address;
$name;
?>
<?php
$username =$_SESSION['username'];

$link = mysqli_connect($host,$user,$pass) or die( "Unable to connect");
mysqli_select_db($link, $database) or die( "Unable to select database");
$query = "SELECT * FROM user  where username='$username'";
$result = mysqli_query($link,$query) or die(mysql_error());
 while($row = mysqli_fetch_array($result))
 	{$name= $row['name'];
	$email=$row['email'];
	$Address=$row['Address'];}
?>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

<h2 style="text-align:center">User Profile Card</h2>

<div class="card">
  <img src="images/profile.jpg" alt="John" style="width:100%">
  <h1> <?php echo 'Username:'.'  '. $username;?> </h1>
  <p class="title"> <?php  echo 'Name:'.'  ' . strtoupper($name) ?> </p>
  <p><?php echo 'Address:' .'  '. strtoupper($Address); ?></p>
  <p><?php echo 'Email:' .'  '.$email; ?> </p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div>
 <p><button>Contact</button></p>
</div>
</body>
</html>

