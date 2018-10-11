 <?php
 include 'dbinfo.php';
 include 'navbar.php';
 ?>
 <?php 
 $string=$_POST['item'];
 $link = mysqli_connect($host,$user,$pass) or die( "Unable to connect");
mysqli_select_db($link, $database) or die( "Unable to select database");

 $query = "SELECT *
FROM album
WHERE album_name LIKE '%$string%';";
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
   </style>
</head>
    <body>
        <div class="container">
  <h2>Albums</h2>
  <p></p>            
  <table style="text-align:center;" class="table table-striped">
    <thead>
      <tr>
        <th>Album Name</th>
        <th> Release Date</th>
       	
      </tr>
    </thead>

</div>



<?php 
    while($row = mysqli_fetch_array($result))
{   
$name= $row['album_name'];
$date= $row['release_date'];
        echo '<td>' .$name. '</td>';
        echo '<td>'. $date .'</td>';
    echo '<tr>';


}

?>

</table>
</div>
<?php



$query = "SELECT *
FROM artist
WHERE artist_name LIKE '%$string%';";
$result = mysqli_query($link,$query) or die(mysql_error());
?>
<div class="container">
  <h2>Artist</h2>
  <p></p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Artist Name</th>
        <th>Release Count</th>
        
      </tr>
    </thead>

</div>

<?php 
    while($row = mysqli_fetch_array($result))
{   
$name= $row['artist_name'];
$date= $row['release_count'];
        echo '<td>' .$name. '</td>';
        echo '<td>'. $date .'</td>';
    echo '<tr>';


}

?>
</table>
</div>
<?php



$query = "SELECT *
FROM song
WHERE song_name LIKE '%$string%';";
$result = mysqli_query($link,$query) or die(mysql_error());
?>
<div class="container">
  <h2>Songs</h2>
  <p></p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Song Name</th>
        <th>Duration</th>
        
      </tr>
    </thead>

</div>



<?php 

$name;
    while($ar = mysqli_fetch_array($result))
{   

$name = $ar['song_name'];
$Count=$ar['song_length'];

        echo '<td>'. $name .'</td>';
        echo '<td>' . $Count .'</td>';
      
    echo '<tr>';


}
echo '</table>'
?>


</body>
</html>
