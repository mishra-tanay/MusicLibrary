<?php
include 'dbinfo.php';
include 'navbar.php';
?>
<?php

$link = mysqli_connect($host,$user,$pass) or die( "Unable to connect");
mysqli_select_db($link, $database) or die( "Unable to select database");


$query = "SELECT * FROM album";
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
  <h2>Albums</h2>
  <p></p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Album ID</th>
        <th>Album Name</th>
        <th>Release Year</th>
      </tr>
    </thead>
</div>



<?php 


    while($row = mysqli_fetch_array($result))
{   
$id = $row['album_id'];
$name = $row['album_name'];
$date=$row['release_date'];

        echo '<td>' . $id . '</td>';
        echo '<td>'.  $name .'</td>';
        echo '<td>' . $date .'</td>';
    echo '<tr>';


}
echo '</table>'
?>

      
      
  </table>
</div>
</body>
</head>
</html>
