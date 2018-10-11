
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

if(isset($_POST['award']))
{
	$awardss=$_POST['award'];
}

$query = "select artist.artist_name , award.award_name from artist, award where award.award_name LIKE '$awardss%' and artist.artist_id = award.artist_id";
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
        <th>Artist Name</th>
        <th>Album Name</th>
        
      </tr>
    </thead>
</div>



<?php 


    while($row = mysqli_fetch_array($result))
{   
$id = $row['artist_name'];
$name = $row['award_name'];

        echo '<td>' . $id . '</td>';
        echo '<td>'.  $name .'</td>';
  
    echo '<tr>';


}
echo '</table>'
?>

      
      
  </table>
</div>
</body>
</head>
</html>

