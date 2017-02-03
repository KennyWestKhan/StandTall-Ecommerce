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
    <meta name="description" content="">
    <meta name="author" content="">


    <title>StandTallGh</title>
    <link rel="icon" href="images/favicon.png" type="image/png">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/carousel.css" rel="stylesheet">
    <link href="css/stylecard.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <script src="js/ie-emulation-modes-warning.js"></script>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<!--search jQuery-->
	<script src="js/main.js"></script>
	<!--search jQuery-->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
	 <script defer src="js/jquery.flexslider.js"></script>
	 <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	 <script src="js/imagezoom.js"></script>
	 <script>
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>

</head>
<body>
	<!--header-->
		<div class="header">
            <?php
            include("includes/header.php");
            ?>
  </div>
		<!--header-->
	<!--content-->
		<div class="content">
		<?php cart(); ?>
			<!--single-->
			<div class="single-wl3">
				<div class="container">
					<div class="single-grids">
						<div class="col-md-12 single-grid">
							<?php getProDetails(); ?>
						</div>
						<div class="clearfix"> </div>
					</div>

				</div>
			</div>
		</div>
		<!--content-->
		<footer>
       <p class="pull-right"><a href="#">Back to top</a></p>
                <?php
           include ("includes/footer.php");
           ?>
      </footer>
       
</body>
</html>
