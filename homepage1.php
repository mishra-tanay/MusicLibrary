 <?php
 include 'dbinfo.php';
 include 'navbar.php';
 ?>
 <html>
 <div class="container">
    <div class="row">
        <div class="col-md-6" style="margin-left:300px; margin-top: 30px;">
            <h2>Music Search </h2>
            <div id="custom-search-input">
                <div class="input-group col-md-12">
                    <form action="searchresult.php" method="post">
                    <input type="text" name="item" class="form-control input-lg" placeholder="Song,Albums,Artists..." />
    <br>
                        <input type="submit" style=" margin-left:200px;" class="btn btn-info btn-lg" type="button">
                            
                   </form>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

 <div style="margin-top:10px;" class="carousel-inner">

        <div class="item active">
            <img src="images/2.jpg" style="width:500px; height:500px; margin:auto;" alt="Something Just Like This">
        </div>

        <div class="item">
            <img src="images/3.jpg" style="width:500px; height:500px; margin:auto;" alt="Divide">
        </div>

        <div class="item">
            <img src="images/4.jpg" style="width:500px; height:500px; margin:auto;" alt="Divide">
        </div>

        <div class="item">
            <img src="images/5.jpg" style="width:500px; height:500px; margin:auto;" alt="Divide">
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


<br>
<br>
<br>
<br>
<a href="options.php"> <button class="btn btn-primary" > Option</button></a>


</html>