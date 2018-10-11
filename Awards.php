<?php
include 'dbinfo.php';
include 'navbar.php';
//session_start();
?>
<?php

$link = mysqli_connect($host,$user,$pass) or die( "Unable to connect");
mysqli_select_db($link, $database) or die( "Unable to select database");


$query = "SELECT A.award_name , Ar.artist_name , Ar.release_count FROM award A , artist Ar where A.artist_id = Ar.artist_id";
$result = mysqli_query($link,$query) or die(mysql_error());
?>
<html>
<head>
    <style>
   
       #table1
       {
       
        
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
  <h2>Albums</h2>
  <p></p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Award Name</th>
        <th>Artist Name</th>
        <th>Songs Released</th>
      </tr>
    </thead>

</div>



<?php 

    while($row = mysqli_fetch_array($result))
{   
$award = $row['award_name'];
$name = $row['artist_name'];
$count=$row['release_count'];

    echo '<td class="spe">' . $award. '</td>';
    echo '<td>'. '    '. $name .'</td>';
    echo '<td>' . $count .'</td>';
    echo '<tr>';


}
echo '</table>'
?>

      
      
  </table>
</div>
</body>
</head>
</html>
