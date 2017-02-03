<!DOCTYPE HTML>
<?php
include("functions/functions.php");
?>
<html>
<head>
<title>StandTall Phones</title>
<link rel="icon" href="images/favicon.png" type="image/png">
<!--css-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link href="css/stylecard.css" rel="stylesheet">
<!--css-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smartphones, Samsung, Android, iPhones, ios devices,
Affordable phones, Quality phones, Samsung, LG, SonyEricsson" />

<!-- <script src="js/jquery.min.js"></script> -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
 <!-- cart -->
<!-- <script src="js/simpleCart.min.js"></script> -->

</head>
<body>
	<!--header-->
		<div class="header">
			<?php
			include("includes/header.php");
			?>
		</div>
<div class="products-agileinfo" style="padding-top: 30px;">
	<h2 class="tittle">Search results</h2>
	<div>
		<div class="container">
	<div class="container">
						<div class="product-agileinfo-grids w3l">
							<div class="col-md-12 product-agileinfon-grid1 w3l">
											<div class="row">
												<?php getSearchResults(); ?>
											</div>
											<div class="clearfix"></div>

								</div>
								<!--<div class="col-md-4 product-agileinfo-grid">
								 <div class="categories">
									<h3>Categories</h3>
									<ul class="tree-list-pad">
										<li><span></span></li>
										<li><?php getCats(); ?></li>

										<ul>
									</ul>
								</ul></div> 
								<div class="brand-w3l" style="margin-top: -0.1em;">
									<h3>Brands</h3>
									<ul class="tree-list-pad">
										<li><span></span></li>
										<li>Izuxe</li>
										<ul>
									</ul>
								</ul>
								</div>
							</div>-->
							</div>
							<div class="clearfix"> </div>
						</div>
						</div>
	</div>
	</div>

		<?php
		include("includes/footer.php");
		?>
		<div class="clearfix"></div>
		    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
