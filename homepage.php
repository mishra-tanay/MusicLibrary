<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/homepage.css">
    <meta charset="UTF-8">
    <title>Music Library</title>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">

        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Music Library</a></li>
            <li><a href="albums.html">Albums</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Charts
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="70%60s.html">70`s</a></li>
                    <li><a href="80%60s.html">80`s</a></li>
                    <li><a href="90%60s.html">90`s</a></li>
                </ul>
            </li>
            <li><a href="artists.html">Artists</a></li>
        <li><a href="Playlists.html">My Playlists</a></li>
            <li><a href="#">Favorites</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="Signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="Login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
    </div>
</nav>
<div id="myCarousel" class="carousel slide" style="margin-top:4%;" data-ride="carousel">

    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>

    </ol>


    <div class="carousel-inner">

        <div class="item active">
            <img src="images/2.jpg" style="width:500px; height:500px; margin:auto;" alt="Something Just Like This">
        </div>

        <div class="item">
            <img src="images/3.jpg" style="width:500px; height:500px; margin:auto;"alt="Divide">
        </div>
    </div>


    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br>
</body>
</html>