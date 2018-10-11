<?php
include 'dbinfo.php';
include 'navbar.php';
?>
<?php
$link = mysqli_connect($host,$user,$pass) or die( "Unable to connect");
mysqli_select_db($link, $database) or die( "Unable to select database");


$query = "SELECT * FROM artist ";
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
  <h2>Artists</h2>
  <p></p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Artist  ID</th>
        <th>Artist Name</th>
        <th>Release Count</th>
        <th>Birth Date </th>
      </tr>
    </thead>

</div>



<?php 


    while($row = mysqli_fetch_array($result))
{   
$id = $row['artist_id'];
$name = $row['artist_name'];
$Count=$row['release_count'];
$dob=$row['birth_date'];

        echo '<td>' . $id . '</td>';
        echo '<td>'. $name .'</td>';
        echo '<td>' . $Count .'</td>';
        echo '<td>' . $dob . '</td>';
    echo '<tr>';


}
echo '</table>'
?>

      
      
  </table>
</div>
</body>
</head>
</html>
