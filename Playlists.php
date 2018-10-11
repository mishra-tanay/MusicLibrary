<?php
include 'dbinfo.php';
include 'navbar.php';
$playlistn;
?>
<?php
$link = mysqli_connect($host,$user,$pass) or die( "Unable to connect");
mysqli_select_db($link, $database) or die( "Unable to select database");
$user= $_SESSION['username'];


if($_SERVER['REQUEST_METHOD']==='POST'){
	if(isset($_POST['playlist']))
{
$playlistn=$_POST['playlist'];
}

$sql_query = "insert into playlist values(0,'$user','$playlistn',0)";
$result = mysqli_query ($link, $sql_query)  or die(mysqli_error($link));
$_SESSION['playli']=$playlistn;
 header('Location: addtoplaylist.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<style>
	#playlist{
		margin-left: 450px;
		margin-top: 280px;

	}
</style>
    <meta charset="UTF-8">
    <title>Playlist</title>
</head>
<body>
<form id="playlist" action="playlists.php" method="post">
	Create PlayList:

	<input type="text" name="playlist">
	<input type="submit" class="btn btn-primary" value="Create">

</form>
</body>
</html>