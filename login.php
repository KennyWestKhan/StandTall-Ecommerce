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
<!--css-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="New Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script src="js/jquery.min.js"></script>

</head>
<body>
	<!--header-->
		<div class="header">
			<?php
			include("includes/header.php");
			?>
		</div>
		<div class="content">
				<!--login-->
			<div class="login">
				<div class="main-agileits">
					<div class="form-w3agile">
						<h3>Login </h3>
						<form action="#" method="post">
							<div class="key">
								<i class="fa fa-envelope" aria-hidden="true"></i>
								<input type="text" value="Email" name="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
								<div class="clearfix"></div>
							</div>
							<div class="key">
								<i class="fa fa-lock" aria-hidden="true"></i>
								<input type="password" value="Password" name="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
								<div class="clearfix"></div>
							</div>
							<input type="submit" value="Login">
						</form>
					</div>
					<div class="forg">
						<a href="#" class="forg-left">Forgot Password</a>
						<a href="registered.php" class="forg-right">Register</a>
					<div class="clearfix"></div>
					</div>
				</div>
			</div>
				<!--login-->
		</div>
		<div class="header">
			<?php
			include("includes/footer.php");
			?>
		</div>
		
</body>
</html>