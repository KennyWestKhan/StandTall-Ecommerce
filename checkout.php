<!DOCTYPE HTML>
<?php
include("functions/functions.php");
?>
<html>
<head>
<title>StandTall Phones</title>
<!--css-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet">
<!--css-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="StandTall, ghana phones, 
Smartphone, izuxe, Samsung, LG, SonyEricsson, Motorola" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<!-- <link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'> -->
<!--search jQuery-->
	<script src="js/main.js"></script>
<!--search jQuery-->
<script src="js/responsiveslides.min.js"></script>
 <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
 </script>
 <!--mycart-->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
 <!-- cart -->
<!-- <script src="js/simpleCart.min.js"></script> -->
<!-- cart -->
  <!--start-rate-->
<script src="js/jstarbox.js"></script>
	<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					} 
				})
			});
		});
		</script>
<!--//End-rate-->
</head>
<body>
	<!--header-->
		<div class="header">
			<?php
			include("includes/header.php");
			?>
		</div>
		<div class="content">
			<div class="cart-items">
				<div class="container">
<?php 
$product_title = 'NO ITEMS IN THE CART';
$total = 0;

	global $con;

	$ip = getIp();

	$sel_price = "select * from cart where ip_add='$ip'";

	$run_price = mysqli_query($con, $sel_price);
?>
 <h2>My shopping Cart: <?php echo total_items(); ?> item(s) <br>Total Cost: <?php echo total_price();?></h2>

 <?php 
	while ($p_price=mysqli_fetch_array($run_price)) {

		$pro_id = $p_price['p_id'];

		$pro_price = "select * from products where product_id='$pro_id'";

		$run_pro_price = mysqli_query($con, $pro_price);

		while ($pp_price = mysqli_fetch_array($run_pro_price)) {
			$product_price = array($pp_price['product_price']);
			$product_title = $pp_price['product_title'];
			$product_image = $pp_price['product_image'];
			$single_price = $pp_price['product_price'];
			$product_desc = $pp_price['product_desc'];
			$values = array_sum($product_price);

			$total += $values;
?>
					
					 <div class="cart-header">
					 <input type="checkbox" name="remove[]" value="<?php echo $pro_id;?>">
						 <div class="close1">
						 </div>

						 <div class="cart-sec simpleCart_shelfItem">
								<div class="cart-item cyc">
									 <img src="admin_area/product_images/<?php echo $product_image;?>" class="img-responsive" alt="">
								</div>
					<div class='color-quality'>
										<h6>Quantity :</h6>
											<div class='quantity'>
												<div class='quantity-select'>
													<!-- <div class='entry value-minus1'>&nbsp;</div> -->
													<div class='entry value1'><span><input type="text" size="2" style="text-align:center"/></span></div>
													<!-- <div class='entry value-plus1 active'>&nbsp;</div> -->
												</div>
											</div>							
					</div>

							   <div class="cart-item-info">
								<h3><a href="details.php?pro_id=<?php echo $pro_id?>"><?php echo $product_title;?> </a> <!-- <span>Pickup time:</span> --></h3>  <br>
								<ul class="qty">
									<li><p><?php echo $product_desc ?></p></li>
									<li><p>FREE delivery</p></li>
								</ul>
									 <div class="delivery">
									 <p>ITEM PRICE : <?php echo 'GHC '.$single_price?></p>
									 <span>Delivered within 48 hours after order</span>
									 <div class="clearfix"></div>
								</div>	
							   </div>

							   <div class="clearfix"></div>
													
						  </div>
					 </div>
						<?php }

	}?>				<a class="btn btn-default" href="products.php" role="button">Continue shopping</a>
					<input type="submit" name="update_cart" value="Update Cart" class="btn btn-default" style="float:right;">
				</div>
			</div>
	<!-- checkout -->	
		</div>
<?php 

$ip = getIp();
if (isset($_POST['update_cart'])) {
	foreach ($_POST['remove'] as $remove_id) {
	$delete_product = "delete from cart where p_id='$remove_id' AND ip_add='$ip'";

	$run_delete = mysqli_query($con, $delete_product);

	if ($run_delete) {
				
		echo "<script>window.location.replace('checkout.php','_self')</script>";		
			}		
	}
}
?>

		<div class="header">
			<?php
			include("includes/footer.php");
			?>
		</div>
		
</body>
</html>