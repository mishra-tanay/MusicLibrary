<?php
include 'dbinfo.php'; 
?>  

<html>
<head>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet">
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <style>
button
{
     font-family: Lato;
     width:260;
     margin-left:550; 
}
 form
 {
    margin-top:300px;
     font-family: Lato;
     width:260;
     margin-left:550; 

 }
 #submit
 {
    width:260;
    margin-top: 10;
    padding-top: 10;
 }
</style>
<!-- Latest compiled and minified CSS -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>
<body>
    <bgcolor="white">

<?php
//always start the session before anything else!!!!!! 
session_start(); 

if(isset($_POST['username']) and isset($_POST['password']))  { //check null
    $username = $_POST['username']; // text field for username 
    $password = $_POST['password']; // text field for password
    
// store session data

//connect to the db 

$link = mysqli_connect($host,$user,$pass) or die( "Unable to connect");
mysqli_select_db($link, $database) or die( "Unable to select database");

         //Our SQL Query
          
         //Run our sql query
         
            
           $sql_query = "Select Username From user Where Username = '$username' AND Password = '$password'";  

            //Run our sql query
           $result = mysqli_query ($link, $sql_query)  or die(mysqli_error($link));  
            if($result == false)
                {
                echo 'The query failed.';
                exit();
            }

            //this is where the actual verification happens 
            if(mysqli_num_rows($result) == 1){ 
            //the username and password matches the database 
            //move them to the page to which they need to go 
                header('Location: homepage1.php');
               
            }else{ 
            $err = 'Incorrect username or password' ; 
            } 
            //then just above your login form or where ever you want the error to be displayed you just put in 
            echo "$err";
    } 
    
?>  

 

<form action="" method="post">
    <h2> Music Library</h2>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="username" type="text" class="form-control" name="username" placeholder="username">
  </div>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input id="password" type="password" class="form-control" name="password" placeholder="Password">
  </div>
 <input type="submit" class="btn btn-danger" id="submit" name="login">

</form>
 <a href = "signup.php"><button type="button" class="btn btn-warning" name="register" value="Register">Register</button></a>


<!--<form action="NewUserRegistration.php" method="post">
<input type="Submit" value="Create Account"/>-->

</form>
</body>

</html>