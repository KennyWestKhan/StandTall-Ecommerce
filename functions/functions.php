<?php
include("includes/db.php");
/*$con = mysqli_connect("localhost","root","","ecommerce");*/
//creating the shopping cart
// <div class='modal' id='modal-1'>
// 				<div class='modal-dialog'>
// 					<div class='modal-content'>
// 						<div class='modal-header'>
// 							<h3> ITEM IS ALREADY IN SHOPPING CART</h3>
// 							<H5><a href='checkout.php'>GO TO CART</a></H5>
// 						</div>
// 					</div>
// 				</div>
// 				</div>
function cart() {
	if (isset($_GET['add_cart'])) {
		global $con;
		$ip = $_SERVER['REMOTE_ADDR'];
 
	    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
	        $ip = $_SERVER['HTTP_CLIENT_IP'];
	    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
	        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	    }
 
		$ip = getIp();

		$pro_id = $_GET['add_cart'];

		$check_pro = "select * from cart where ip_add='$ip' AND p_id='$pro_id'";

		$run_check = mysqli_query($con, $check_pro);

		if (mysqli_num_rows($run_check)>0) {

			echo "
			<div class='container'
			<div class='row'>
			<div class='alert alert-warning alert-dismissible' role='alert'>
			  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
			  <strong>Hey there</strong> ITEM IS ALREADY IN SHOPPING CART.
			  <H4><a href='checkout.php' style='text-decoration: none;' class='alert-link'>GO TO CART</a></H4>
			</div>
			</div>
			</div>	
 			<button class='btn btn-default' onclick='goBack()' style= 'float:left;'>Go Back</button>
 			<script>
			function goBack() {
   			window.history.back();
			}
			</script>
			
			";
		}
		else{
			$insert_pro = "insert into cart (p_id,ip_add) values ('$pro_id','$ip')";

			$run_pro = mysqli_query($con, $insert_pro);

			echo "<script>window.location.replace('details.php?pro_id=$pro_id','_self')</script>";
			
		}
	}

}

//creating the total added items
function total_items() {
	global $con;
	if (isset($_GET['add_cart'])) {
		

		$ip = getIp();

		$get_items = "select * from cart where ip_add='$ip'";

		$run_items = mysqli_query($con, $get_items);

		$count_items = mysqli_num_rows($run_items);

	}
		else{

		$ip = getIp();

		$get_items = "select * from cart where ip_add='$ip'";

		$run_items = mysqli_query($con, $get_items);

		$count_items = mysqli_num_rows($run_items);
		}

		echo $count_items;
	
	}
//getting the total prices of the items in the cart
function total_price() {

	$total = 0;

	global $con;

	$ip = getIp();

	$sel_price = "select * from cart where ip_add='$ip'";

	$run_price = mysqli_query($con, $sel_price);

	while ($p_price=mysqli_fetch_array($run_price)) {
		$pro_id = $p_price['p_id'];

		$pro_price = "select * from products where product_id='$pro_id'";

		$run_pro_price = mysqli_query($con, $pro_price);

		while ($pp_price = mysqli_fetch_array($run_pro_price)) {
			$product_price = array($pp_price['product_price']);

			$values = array_sum($product_price);

			$total += $values;

		}

	}

	echo 'GHC '. $total;
}

//getting the categories
function getCats() {
	global $con;
	$get_cats = "select * from categories";
	$run_cats = mysqli_query($con, $get_cats);

	while ($row_cats=mysqli_fetch_array($run_cats)) {
	$cat_id = $row_cats['cat_id'];
	$cat_title = $row_cats['cat_title'];
	echo "<li>$cat_title</a></li>";
	 /*return $cat_title;
*/
}
}

function getBrands() {
	global $con;
	$get_brands = "select * from brands";
	$run_brands = mysqli_query($con, $get_brands);

	while ($row_brands=mysqli_fetch_array($run_brands)) {
	$brand_id = $row_brands['brand_id'];
	$brand_title = $row_brands['brand_title'];
	echo "<li><a href = 'products.php?brand=$brand_id'> $brand_title</a></li>";
	 /*return $cat_title;
*/
}
}

function getPro() {


		if (!isset($_GET['brand'])) {
	global $con;

	$get_pro = "select * from products order by RAND() LIMIT 0,6";

	$run_pro = mysqli_query($con, $get_pro);

	while ($row_pro=mysqli_fetch_array($run_pro)) {
		$pro_id = $row_pro['product_id'];
		$pro_cat = $row_pro['product_cat'];
		$pro_brand = $row_pro['product_brand'];
		$pro_title = $row_pro['product_title'];
		$pro_price = $row_pro['product_price'];
		$pro_image = $row_pro['product_image'];
		$pro_desc =  $row_pro['product_desc'];

		echo "

		<div class='col-lg-3 col-md-3 col-sm-6 col-xs-12'>
                        <div class='card'>
                            <a class='img-card' href='details.php?pro_id=$pro_id'>
                    		<img src='admin_area/product_images/$pro_image'/></a>
                <br/>
                <div class='ribben2'><p>GHC $pro_price</p></div>
                <div class='card-content' style='text-transform: UPPERCASE;'>
                    <h4 class='card-title'>
                        <a href='details.php?pro_id=$pro_id'>$pro_title</a>
                    </h4>

                </div>
                <div class='card-read-more'>
                    <a class='btn btn-link btn-block' href='details.php?pro_id=$pro_id'>Details</a>
                </div>
                </div>
        </div>


		";
	}

}
}
function getAllProducts(){
	global $con;

	$get_pro = "select * from products order by RAND() LIMIT 0,9";

	$run_pro = mysqli_query($con, $get_pro);

	while ($row_pro=mysqli_fetch_array($run_pro)) {
		$pro_id = $row_pro['product_id'];
		$pro_cat = $row_pro['product_cat'];
		$pro_brand = $row_pro['product_brand'];
		$pro_title = $row_pro['product_title'];
		$pro_price = $row_pro['product_price'];
		$pro_image = $row_pro['product_image'];
		$pro_desc =  $row_pro['product_desc'];

		echo "
		<div class='col-lg-3 col-md-3 col-sm-6 col-xs-12 product-tab-grid simpleCart_shelfItem'>
	 												 <div class='grid-arr' style='margin-bottom: 2em;'>
	 													 <div class='grid-arrival'>
	 														 <figure>
	 															 <a href='#' class='new-gri' data-toggle='modal' data-target='#myModal1'>

	 																 <div class='grid-img'>
	 																	 <a href='details.php?pro_id=$pro_id><img src='images/phones/$pro_image' class='img-responsive' alt='$pro_title'></a>
	 																 </div>
																	 <div class='grid-img'>
	 																	 <img src='images/phones/$pro_image' class='img-responsive' alt=''>
	 																 </div>
	 															 </a>
	 														 </figure>
	 													 </div>
	 													 <div class='block'>
	 														 <div class='starbox small ghosting'> </div>
	 													 </div>
	 													 <div class='women'>
	 														 
	 														 <h6><span class='size'><a href='details.php?pro_id=$pro_id'>$pro_title</a></span></h6>
	 														 <p><em class='item_price'>GHC $pro_price</em></p>
	 														 <a href='details.php?add_cart=$pro_id' data-text='Add To Cart' class='my-cart-b item_add'>Add To Cart</a>
	 													 </div>
	 												 </div>
	 											 </div>
		";
}
}

function getProDetails(){
	global $con;
	if (isset($_GET['pro_id'])) {
	$product_id = $_GET['pro_id'];

	$get_pro = "select * from products where product_id='$product_id'";

	$run_pro = mysqli_query($con, $get_pro);

	while ($row_pro=mysqli_fetch_array($run_pro)) {
		$pro_id = $row_pro['product_id'];
		$pro_cat = $row_pro['product_cat'];
		$pro_brand = $row_pro['product_brand'];
		$pro_title = $row_pro['product_title'];
		$pro_price = $row_pro['product_price'];
		$pro_image = $row_pro['product_image'];
		$other_images = $row_pro['other_images'];
		$more_images = $row_pro['more_images'];
		$pro_desc =  $row_pro['product_desc'];

		echo "
		<div clas='single-top'>
			<div class='single-left'>
				<div class='flexslider'>
					<ul class='slides'>
						<li data-thumb='images/phones/$pro_image'>
							<div class='thumb-image'> <img src='images/phones/$pro_image' data-imagezoom='true' class='img-responsive'> </div>
						</li>
						<li data-thumb='images/phones/$other_images'>
							<div class='thumb-image'> <img src='images/phones/$other_images' data-imagezoom='true' class='img-responsive'> </div>
						</li>
						<li data-thumb='images/phones/$more_images' alt='$pro_title'>
							<div class='thumb-image'> <img src='images/phones/$more_images' alt='$pro_title' data-imagezoom='true' class='img-responsive'> </div>
						</li>
					 </ul>
				</div>
			</div>
			<div class='single-right simpleCart_shelfItem'>
				<h4>$pro_title</h4>
				
				<div class='block'>
					<div class='starbox small ghosting'> </div>
				</div>
				<p class='price item_price'>GHC $pro_price</p>
				<div class='description'>
					<p><span>Quick Overview : </span> $pro_desc. </p>
				</div>
				
				<button type='button' class='btn btn-default' data-toggle='modal' data-target='#modal-1' title='Tooltip on right'>
					<a style='text-decoration:none;' href='details.php?add_cart=$pro_id' data-text='Add To Cart'>Add To Cart</a>
				</button>
			</div>
			<div class='clearfix'> </div>
		</div>
		";
}
}
}

function getSearchResults(){
	global $con;
	if (isset($_GET['search'])) {
	$search_query = $_GET['user_query'];
	
	if (!empty($search_query)) {
		if (strlen($search_query)>=3) {
		$get_pro = "select * from products where product_title LIKE '%".mysql_real_escape_string($search_query)."%'";
		$run_pro = mysqli_query($con, $get_pro);
		$query_num_rows = mysqli_num_rows($run_pro);

		if ($query_num_rows >=1) {
			echo "
			<div class='col-md-12' style='padding-bottom: 20px; margin-top: -40px;'>
			<h2>$query_num_rows RESULT(S) FOUND</h2>
			</div>
			";
		while ($row_pro=mysqli_fetch_array($run_pro)) {
		$pro_id = $row_pro['product_id'];
		$pro_cat = $row_pro['product_cat'];
		$pro_brand = $row_pro['product_brand'];
		$pro_title = $row_pro['product_title'];
		$pro_price = $row_pro['product_price'];
		$pro_image = $row_pro['product_image'];
		$pro_desc =  $row_pro['product_desc'];

		echo "
		<div class='col-lg-3 col-md-3 col-sm-6 col-xs-12 product-tab-grid simpleCart_shelfItem'>
	 												 <div class='grid-arr' style='margin-bottom: 2em;'>
	 													 <div class='grid-arrival'>
	 														 <figure>
	 															 <a href='#' class='new-gri' data-toggle='modal' data-target='#myModal1'>

	 																 <div class='grid-img'>
	 																	 <a href='details.php?pro_id=$pro_id><img src='images/phones/$pro_image' class='img-responsive' alt='$pro_title'></a>
	 																 </div>
																	 <div class='grid-img'>
	 																	 <img src='images/phones/$pro_image' class='img-responsive' alt=''>
	 																 </div>
	 															 </a>
	 														 </figure>
	 													 </div>
	 													 <div class='block'>
	 														 <div class='starbox small ghosting'> </div>
	 													 </div>
	 													 <div class='women'>
	 														 <h6><a href='details.php?pro_id=$pro_id>$pro_title</a></h6>
	 														 <span class='size'>$pro_title</span>
	 														 <p><em class='item_price'>$pro_price</em></p>
	 														 <a href='details.php?add_cart=$pro_id' data-text='Add To Cart' class='my-cart-b item_add'>Add To Cart</a>
	 													 </div>
	 												 </div>
	 											 </div>
		";
}
	}
	else {
		echo '<h2>SORRY, NO RESULTS FOUND</H2> <br>
		<p> <h3><a href="products.php"> BROWSE MORE PRODUCTS </a></h3>
		';
	}
	} else{
		echo "<H3>YOUR KEYWORD MUST BE 3 CHARACTERS OR MORE</H3>";
	}
}
	else {
		echo '<H3>PLEASE ENTER SOME TEXTS!</H3>';
	}
	
}
}


?>
