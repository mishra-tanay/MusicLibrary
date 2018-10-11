<?php 
include 'dbinfo.php';
include 'navbar.php';
?>
<html>
<head></head>
	<body>
<form style="margin-left:350px; margin-top: 400px; margin-bottom: 100px;" action="searchbyaward.php" method="post">
    Award Name : 
    <input type="text" name="award">
    <input type="submit" class="btn btn-default" name="submit" value="Search">
    </form>
    <form  style="margin-left:350px;" action="searchbyalbum.php" method="post">
    	Album Name :
    	<input type="text" name="album">
    	<input type="submit" class="btn btn-default" name="submit" value="Search">
    </form>

</body>
</html>