<?php include 'dbinfo.php';
include 'navbar.php';
?>

<html>
<head>
	<title> Playlists</title>
</head>
<body>
	<div style="margin-left: 140;">
	<h1 >
	Playlists </h1></div>
<?php

$link = mysqli_connect($host,$user,$pass) or die( "Unable to connect");
mysqli_select_db($link, $database) or die( "Unable to select database");
$user=$_SESSION['username'];

$query = "SELECT P.playlist_name,A.artist_name,S.song_name FROM playlist P , artist A , song S where P.song_id=S.song_id and S.artist_id=A.artist_id and P.username='$user' order by(song_name)";
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
  <h2 id="heading">Albums</h2>
  <p></p>            
  <table class="table table-striped">
    <thead>
      <tr>
      	<th>Playlist </th>
        <th>Song Name</th>
        <th> Artist</th>
        
      </tr>
    </thead>
</div>



<?php 


    while($row = mysqli_fetch_array($result))
{   
	$name1=$row['song_name'];
$pname = $row['playlist_name'];
$name = $row['artist_name'];

        echo '<td>' . $pname . '</td>';
        echo '<td>'.  $name1.'</td>';
        echo '<td>' . $name .'</td>';
    echo '<tr>';


}

?>
</table>
</body>
</html>
