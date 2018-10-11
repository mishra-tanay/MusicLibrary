<?php
include 'dbinfo.php';
include 'navbar.php';
?>
<?php 
$play=$_SESSION['playli'];
 echo '<h3>'.'PlayList Name :'.strtoupper($play).'</h3>';

$link = mysqli_connect($host,$user,$pass) or die( "Unable to connect");
mysqli_select_db($link, $database) or die( "Unable to select database");

$query = "SELECT song_name,song_length
FROM song;";
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
        <th>Add to Playlist</th>
      </tr>
    </thead>

</div>
<?php 


    while($ar = mysqli_fetch_array($result))
{   

$name = $ar['song_name'];
$Count=$ar['song_length'];


        echo '<td>'. $name .'</td>';
        echo '<td>' . $Count .'</td>';
      	echo '<td>' . "<a href='addsongtoplay.php'> + </a>";
        
    echo '<tr>';


}
echo '</table>'
?>

