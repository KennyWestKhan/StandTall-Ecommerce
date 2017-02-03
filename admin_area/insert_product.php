<!DOCTYPE>
<?php
include("../includes/db.php");
?>
<html>
	<head>
		<title>Inserting Product</title>
		<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
	</head>
<body bgcolor="skyblue">
	<form action="insert_product.php" method="post" enctype="multipart/form-data">
		<table align="center" width="600" border="2" bgcolor="orange">
			<tr align="center">
				<td colspan="8" ><h2>Insert new product here</h2></td>
			</tr>
			<tr>
				<td align="right"><b>Product name</b></td>
				<td><input type="text" name="product_title" size="30" required></td>
			</tr>
			<tr>
				<td align="right"><b>Product category</b></td>
				<td>
				<select name="product_cat" required>
					<option>Select category</option>
					<?php
					$get_cats = "select * from categories";
					$run_cats = mysqli_query($con, $get_cats);

					while ($row_cats=mysqli_fetch_array($run_cats)) {
					$cat_id = $row_cats['cat_id'];
					$cat_title = $row_cats['cat_title'];
					echo "<option value='$cat_title'>$cat_title</option>";
					}
					?>
				</select>
				</td>
			</tr>
			<tr>
				<td align="right"><b>Product brand</b></td>
				<td><select name="product_brand" required>
				<option>Select brand</option>
				<?php
				$get_brands = "select * from brands";
				$run_brands = mysqli_query($con, $get_brands);

				while ($row_brands=mysqli_fetch_array($run_brands)) {
				$brand_id = $row_brands['brand_id'];
				$brand_title = $row_brands['brand_title'];
				echo "<option value='$brand_id'>$brand_title</option>";
				}
				?>
				</select>
				</td>
			</tr>
			<tr>
				<td align="right"><b>Product image</b></td>
				<td><input type="file" name="product_image" required></td>
			</tr>
			<tr>
				<td align="right"><b>Another image</b></td>
				<td><input type="file" name="other_images"></td>
			</tr>
			<tr>
				<td align="right"><b>More images</b></td>
				<td><input type="file" name="more_images"></td>
			</tr>
			<tr>
				<td align="right"><b>Product price</b></td>
				<td><input type="text" name="product_price" required></td>
			</tr>
			<tr>
				<td align="right"><b>Product description</b></td>
				<td><textarea name="product_desc" cols="30" rows="10"></textarea></td>
			</tr>
			<tr>
				<td align="right"><b>Product keywords</b></td>
				<td><input type="text" name="product_keywords" size="40" required></td>
			</tr>
			<tr align="center">
				<td colspan="7"><input type="submit" name="insert_post" value="Insert product"></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php
	if (isset($_POST['insert_post'])) {
		//getting the text data from fields
		$product_title = $_POST['product_title'];
		$product_cat = $_POST['product_cat'];
		$product_brand = $_POST['product_brand'];
		$product_price = $_POST['product_price'];
		$product_desc = $_POST['product_desc'];
		$product_keywords = $_POST['product_keywords'];

		//getting the image from field
		$product_image = $_FILES['product_image']['name'];
		$product_image_tmp = $_FILES['product_image']['tmp_name'];
		move_uploaded_file($product_image_tmp, "product_images/$product_image");

		$other_image = $_FILES['other_images']['name'];
		$other_image_tmp = $_FILES['other_images']['tmp_name'];
		move_uploaded_file($other_image_tmp, "product_images/$other_image");

		$more_images = $_FILES['more_images']['name'];
		$more_images_tmp = $_FILES['more_images']['tmp_name'];
		move_uploaded_file($more_images_tmp, "product_images/$more_images");

	 	$insert_product = "insert into products
		(product_cat,product_brand,product_title,product_price,product_desc,product_image,other_images,more_images,product_keywords) values ('$product_cat',
			'$product_brand','$product_title','$product_price','$product_desc','$product_image','$other_image','$more_images','$product_keywords') ";

		$insert_pro = mysqli_query($con, $insert_product);

		if ($insert_pro) {
            echo "<script>alert('Product has been inserted')</script>";
            echo "<script>window.open('insert_product.php','_self')</script>";
		}
	}
?>
