<?php
include 'dbinfo.php';
include 'navbar.php';
?>
<?php

$link = mysqli_connect($host,$user,$pass) or die( "Unable to connect");
mysqli_select_db($link, $database) or die( "Unable to select database");
$user =$_SESSION['username'];

$query = "select song_name from search_history where username='$user'";
$result = mysqli_query($link,$query) or die(mysql_error());
?>
<html>
<head>
    <style>
   
       #table1
       {
       
        margin-left: 200px;
        text-align:center;
        width:1100px;

       }
        #table1 th{
        margin-left: 20px;
       }
       
   </style>
</head>
    <body>
        <div class="container">
  <h2>Search History</h2>
  <p></p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Song Name</th>
        
      </tr>
    </thead>
</div>



<?php 


    while($row = mysqli_fetch_array($result))
{   

$name = $row['song_name'];


        echo '<td>' . $name . '</td>';
        echo '<tr>';


}
echo '</table>'
?>

      
      
  </table>
</div>
</body>
</head>
</html>