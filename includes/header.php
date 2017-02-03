<?php
include("functions/ipfunction.php");
?>
<div class="keNn" style="background: #333;color: white;padding: 5px;min-height: 50px;padding-top: 10px;max-height: 20px;">
            <a href="#" style="padding-left: 130px;color: white;"><i class="glyphicon glyphicon-phone" aria-hidden="true"></i>CALL  +233-54-095-9838</a>
           <!--  <div style="float: right;padding-right: 120px;"><a href="checkout.php">Checkout</a></div> -->
<span style="MARGIN-LEFT: 25em;">IP ADDRESS<?php echo $ip =getIp(); ?></span> 
</div>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display  -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="true">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img alt="StandTall_Logo" src="images/favicon.png" style="margin-top: -40px;"></a>
            </div>
            <div class="navbar-header" id="navheadernumber2" style="/* float: right; *//* margin-top: -56px; for mobile*/">
                <a class="navbar-brand" href="index.php"><img alt="StandTall_Logo" src="images/favicon2.jpg" style="margin-top: -10px;"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="navbar-collapse collapse in" id="bs-example-navbar-collapse-1" aria-expanded="true">
                <ul class="nav navbar-nav navbar-right" style="text-transform: UPPERCASE;">

                   <!-- <li class="active"><a href="index.php" class="act">Home</a></li>  -->
                   <li><a href="ecommerce.php">Home</a></li>
                  <!-- <li><?php //getCats(); ?></li> -->
                  <li><a href="products.php">All Products</a></li>
                  <li><a href="mail.php">Contact Us</a></li>
                  <li><a href="WhyUs.php">Why Us</a></li>
                  <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-search"></span> Search</a></li>
                </ul>

            </div>

            <!-- /.navbar-collapse -->

            <div class="header-right2">
              <div class="cart box_1">
                <a href="checkout.php">
                  <h3> <div class="total">
                  Total: <?php echo total_items(); ?> item(s) selected || Cost: <?php total_price();?> 
                    <!-- <span class="simpleCart_total">GHC0.00</span> (<span id="simpleCart_quantity" class="simpleCart_quantity">0</span> items) -->
                    </div>
                    <img src="images/bag.png" alt="">
                  </h3>
                </a>
                <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
                <div class="clearfix"> </div>
              </div>
            </div>

            <div class="clearfix"> </div>
        </div>
        <!-- /.container -->
    </nav>
    <div class="container">
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4 class="modal-title">Search Phone</h4>
        </div>
        <div class="modal-body">





 <section class="search-box1">
  <div class="container">
    <form method="GET" action="results.php" enctype="multipart/form-data" class="form-inline" role="form">
      <div class="col-sm-8 col-xs-8 form-group top_search" style="padding-right:0px;">
        <div class="row">
          <label class="sr-only" for="search">Search here...</label>
          <span class="serach-footer"><i class="fa fa-search"></i></span>
          <input type="text" name="user_query" class="form-control search-wrap" id="search" placeholder="Search a product">
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4 col-xs-4 form-group top_search" style="padding-left:0px;">
          <button type="submit" name="search" class="btn btn-default search-btn">SEARCH</button>
        </div>
      </div>
    </form>
  </div>
</section>



        </div>
        
        </div>
      </div>
      
    </div>
  </div>
