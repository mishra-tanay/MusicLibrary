<?php
include 'dbinfo.php';
include 'navbar.php';
?>
<?php

$link = mysqli_connect($host,$user,$pass) or die( "Unable to connect");
mysqli_select_db($link, $database) or die( "Unable to select database");


$query = "select  count(*) as num ,A.artist_name,s.song_name from search_history S, artist A , song So where S.song_name=So.song_name and So.artist_id=A.artist_id group by song_name order by num desc";
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
        <th>Song Name</th>
        <th>Artist Name </th>
        <th>Count</th>
      </tr>
    </thead>
</div>



<?php 


    while($row = mysqli_fetch_array($result))
{   
$artistname = $row['artist_name'];
$name = $row['song_name'];
$count=$row['num'];

        echo '<td>' . $name . '</td>';
        echo '<td>'.  $artistname .'</td>';
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
