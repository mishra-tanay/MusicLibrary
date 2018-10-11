<?php
include 'dbinfo.php';

?>
<?php
session_start();
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
    <meta charset="UTF-8">
    <title>Music Library</title>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" style="margin-bottom:20px;">
    <div class="container-fluid">
        <ul class="nav navbar-nav">
            <li class="active"><a href="homepage1.php">Music Library</a></li>
            <li><a href="albums.php">Albums</a></li>
            
                <li><a  href="Awards.php">Awards</a>
            </li>
            <li><a href="artists.php">Artists</a></li>
            <li><a href="Playlists.php">My Playlists</a></li>
            <li><a href="trending.php">Trending</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $username; ?> <i class="fa fa-user" aria-hidden="true"></i>
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="Account.php">My Profile</a></li>
                    <li><a href="searchhistory.php">Search History </a></li>
                    <li><a href="login.php">Logout</a></li>

                </ul>
            </li>
        </ul>
    </div>
</nav>
<div id="myCarousel" class="carousel slide" style="margin-top:4%;" data-ride="carousel">

    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>

    </ol>
</div>
