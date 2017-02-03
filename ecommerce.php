
<!DOCTYPE html>
<?php
include("functions/functions.php");
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="izuxe,best cell phone deals, cell phones, tablet,tablet computers,smartphone">
    <meta name="author" content="">
    <!-- <link rel="icon" href="../../favicon.ico"> -->

    <title>StandTallGh</title>
    <!-- <base href="http://standtallghana.com/" /> -->
    <link rel="icon" href="images/favicon.png" type="image/png">

    <!-- Bootstrap core CSS -->
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/demo2.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/stylecard.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

 </head>
<!-- NAVBAR
================================================== -->
<body>
  <div class="header">
            <?php
            include("includes/header.php");
            ?>
  </div>
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel" >
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="images/carousel_images/Slide-2-home-page.jpg" class="img-responsive">
          <div class="container">
            <div class="carousel-caption" id="onlyElegance2">
              <h1>First smartphone</h1> <br>
              <p class="fontstylecaro">Ultra lightweight</p>
              <p class="fontstylecaro" id="onlyElegance" style="margin-top: -150px;">With a 13 Megapixel front camera</p>
              
            </div>
             <div class="carousel-caption"<p><a class="btn btn-lg btn-success" href="details.php?pro_id=1" role="button">Shop now</a></p> </div>
          </div>
        </div>
        <div class="item">
          <img src="images/carousel_images/slide-temp-home.jpg" class="img-responsive" >
          <div class="container">
            <div class="carousel-caption" id="onlyElegance">
              <h1>IZUXE PLATINIUM</h1>
              <p class="fontstylecaro">Processor: Quad-core MTK6582-1.3G MHz high-speed
                                      Screen: 5.5 "HD IPS 1280 * 720 <br>
                                      RAM: 1GB, ROM: 16GB up to 64GB <br>
                                      Camera : Back 13MP Sony back camera - Front : 5MP  <br>
                                      Battery 3200 mAh Lithium Ion <br>
                                      Network: H +, 3G, GSM, Dual SIM <br>
                                      Dimensions: 155 * 78 * 7.6mm <br>
                                      Weight: 170g <br>
                                      Color: Black, White, Gold <br>
              </p>
              <p><a class="btn btn-lg btn-primary" href="products.php" role="button">Shop now</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="images/carousel_images/pad-izuxe.jpg" class="img-responsive">
          <div class="container">
            <div class="carousel-caption">
              <!-- <h1>Thin</h1> -->
              <!-- <p class="fontstylecaro">Check out our tablets</p> -->
              <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p> -->
            </div>
          </div>
        </div>
        <div class="item">
          <img src="images/carousel_images/smartphone-platinium-s-izuxe-1.jpg" class="img-responsive">
          <div class="container">
            <div class="carousel-caption">
              <!-- <h1>Thin</h1> -->
             <!--  <p class="fontstylecaro">So thin, supermodels are jealous</p> -->
              <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p> -->
            </div>
          </div>
        </div>

      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div>
            <!--banner-bottom-->
            <?php
           include ("includes/content.php");
           ?>
            <!--new-arrivals-->
    </div>

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
       <p class="pull-right"><a href="#">Back to top</a></p>
                <?php
           include ("includes/footer.php");
           ?>
      </footer>

<!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
<!--     </div> -->
</div>
  </body>
</html>
