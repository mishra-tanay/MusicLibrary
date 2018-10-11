   <?php
   include 'dbinfo.php';
   $username;
   $password;
   $date;
   $name;
   $add;
   $gen;
   $emails;
   ?>
   <html>
   <head>
    
    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="/js/fv.js"></script>
    <title>Register</title>
</head>
    <body>
    <div class="container" style="background-color: white;">

    <form class="well form-horizontal" action="signup.php"  style="background-color: white;" method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>Registration Form</b></h2></center></legend><br>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="first_name" placeholder="First Name" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

 
<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Username</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="user_name" placeholder="Username" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Password</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="user_password" placeholder="Password" class="form-control"  type="password">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Confirm Password</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="confirm_password" placeholder="Confirm Password" class="form-control"  type="password">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
    </div>
  </div>
</div>
    <div class="form-group">
  <label class="col-md-4 control-label">DOB</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
  <input name="dob" placeholder="Date Of Birth" class="form-control"  type="text">
    </div>
  </div>
</div>

  <div class="form-group">
  <label class="col-md-4 control-label">Address</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
  <input name="address" placeholder="Address" class="form-control"  type="text">
    </div>

  </div>
</div>
   <div class="form-group">
  <label class="col-md-4 control-label">Gender</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
  <input name="gender" placeholder="Gender" class="form-control"  type="text">
      
    </div>
  </div>
</div>
<!-- Text input-->
       

<!-- Select Basic -->

<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-warning" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
  </div>
</div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->
    <?php
    $link = mysqli_connect($host,$user,$pass) or die( "Unable to connect");
mysqli_select_db($link, $database) or die( "Unable to select database");
if($_SERVER['REQUEST_METHOD']==='POST'){
if(isset($_POST['user_name']) and isset($_POST['user_password']) and isset($_POST['dob']) and isset($_POST['first_name']) and isset($_POST['address']) and isset($_POST['gender']) and isset($_POST['email']) )
{
    $username = $_POST['user_name']; // text field for username 
    $password = $_POST['user_password'];
    $date=$_POST['dob'];
    $names=$_POST['first_name'];
    $add=$_POST['address'];
    $gen=$_POST['gender'];
    $emails=$_POST['email'];
}
    

           $sql_query = "INSERT INTO user (username, name, dob, email,  Gender, Address, isSubscribed, Fine, password) VALUES ('$username', '$names', '$date', '$emails',  '$gen', '$add', '0', '0', '$password')";
           $result = mysqli_query ($link, $sql_query)  or die(mysqli_error($link));  
           }
           if(result)
            {header ('Location : login.php');
    }
           ?>
</body>

</html>