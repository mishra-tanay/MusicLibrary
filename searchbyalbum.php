
<?php
include 'dbinfo.php';
include 'navbar.php';
$user;
?>
<?php

$link = mysqli_connect($host,$user,$pass) or die( "Unable to connect");
mysqli_select_db($link, $database) or die( "Unable to select database");
if($_SERVER['REQUEST_METHOD']==='POST')
{

if(isset($_POST['album']))
{
	$alb=$_POST['album'];
}

$query = "select song_name from song s, album a where a.album_name='$alb%' and a.album_id=s.album_id";
$result = mysqli_query($link,$query) or die(mysql_error());
}

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
  <h2>Awards</h2>
  <p></p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Songs</th>
        
        
      </tr>
    </thead>
</div>



<?php 


    while($row = mysqli_fetch_array($result))
{   
$id = $row['song_name'];


        echo '<td>' . $id . '</td>';
   
  
    echo '<tr>';


}
echo '</table>'
?>

      
      
  </table>
</div>
</body>
</head>
</html>

