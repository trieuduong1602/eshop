<!DOCTYPE html>
<?php
   session_start();
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Product Details | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href=""><i class="fa fa-phone"></i> 0984 12 34 56</a></li>
								<li><a href=""><i class="fa fa-envelope"></i> nhom6@gmail.com</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.php"><img src="images/home/logo.png" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<?php
								    if (!isset($_SESSION['name'])) {
								?>
									<li><a href="login.php"><i class="fa fa-lock"></i> Login</a></li>
								<?php 
									} else { 
								?>				
									<li><a href="checkout.php"><i class="fa fa-crosshairs"></i> Checkout</a></li>
									<li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
									<li><a href="#"><i class="fa fa-user"></i> Account</a></li>
									<li><a href="#" onclick="logOut()"><i class="fa fa-lock"></i> Log out</a></li>
								<?php } ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php">Home</a></li>
								<li><a href="contact-us.php">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input id="searchProduct" type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb" style="margin-bottom: 10px;">
				  <li><a href="index.php">Home</a></li>
				  <li class="active">Product Detail</li>
				</ol>
			</div><!--/breadcrums-->
	</div>
	
	<?php 
		include("action/config.php");
		include("action/product-detail.php");

		$productId = $_GET["id"];
		$product = getItemWithId($conn, $productId);
	?>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#"> <span class="pull-right">(4)</span>SamSung</a></li>
									<li><a href="#"> <span class="pull-right">(2)</span>Iphone</a></li>
									<li><a href="#"> <span class="pull-right">(1)</span>Oppo</a></li>
									<li><a href="#"> <span class="pull-right">(3)</span>Xiaomi</a></li>
									<li><a href="#"> <span class="pull-right">(3)</span>Asus</a></li>
									<li><a href="#"> <span class="pull-right">(2)</span>Blackberry</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="images/home/free-ship.png" alt="" />
						</div><!--/shipping-->
						
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<?php foreach($product as $p) { ?>
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="images/home/<?php echo $p['imagePath'] ?>" alt="" />
							</div>
						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<?php if ($p['status'] == 1) { ?>
									<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<?php } else if ($p['status'] == 2) { ?>
									<img src="images/product-details/sale.png" class="newarrival" alt="" />
								<?php } ?>
								<h2 id="productName<?php echo $p['id'] ?>"><?php echo $p['name'] ?></h2>
								<p>ID: <?php echo $p['id'] ?></p>
								<span>
									<span>$<?php echo $p['price'] ?></span>
									<label>Quantity:</label>
									<input onkeypress="return isNumber(event)" id="numOfItem" type="text" value="1" />
									<?php 
										if(isset($_SESSION["id"])) {
									?>
										<button id="addToCart<?php echo $p['id'] ?>" onclick="getNumberOfItem(<?php echo $_SESSION['id'] ?>,<?php echo $p['id'] ?>)" type="button" class="btn btn-fefault cart">
											<i class="fa fa-shopping-cart"></i>
											Add to cart
										</button>
									<?php } ?>

								</span>
								<p><b>Brand:</b> <?php echo $p['brand'] ?></p>
								<p><b>Monitor:</b> <?php echo $p['monitor'] ?></p>
								<p><b>CPU:</b> <?php echo $p['CPU'] ?></p>
								<p><b>RAM:</b> <?php echo $p['RAM'] ?></p>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					<?php } ?>
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>e</span>-shopper</h2>
							<p>This is a web that only sells phone</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe1.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe2.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe3.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe4.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="images/home/map.png" alt="" />
							<p>297, Ly Thuong Kiet, Ward 7, District 10</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2016 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Modified by <span><a target="_blank" href="http://www.themeum.com">Team 6</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	
	<script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-notify.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
	
	<script type="text/javascript">
		function logOut() {
			$.ajax({
				url: 'action/logout.php',
				type: 'get'
			}).done(function() {
				window.location.href = 'index.php';
			});
		}
		
		function addCart(userID, itemID, numOfItem = 1) {
			$.ajax({
				type: 'POST',
				url: 'action/addItemToCart.php',
				data: 'userID='+ userID + '&itemID='+ itemID + '&numOfItem='+ numOfItem,
				success: function(result) {
					result = JSON.parse(result);
					console.log(result);
					if(result[0] == "false"){
						$.notify({
							// options
							message: "Storage just have "+ result[1] + " item left for this kind of item"
						},{
							// settings
							type: 'danger'
						});
					}
					else {
						$.notify({
							// options
							message: result[1] + $('#productName'+itemID).text()+" into cart"
						},{
							// settings
							type: 'success'
						});
					}
				}
			});
		}
		
		function getNumberOfItem(userID, itemID){
			addCart(userID, itemID, document.getElementById('numOfItem').value);
		}
		
		function isNumber(evt) {
			evt = (evt) ? evt : window.event;
			var charCode = (evt.which) ? evt.which : evt.keyCode;
			if (charCode > 31 && (charCode < 48 || charCode > 57)) {
				return false;
			}
			return true;
		}
	</script>
	
	<script type="text/javascript">
		$("#numOfItem").on('input',function(element){
			console.log(element.target.value == "");
			if(element.target.value == "" || element.target.value=="0"){
				element.target.value="1";
			}
		});
	</script>
	
	<script type="text/javascript">
		$("#searchProduct").keyup(function (e) {
			if (e.which == 13) {
				var value = $("#searchProduct").val();
				window.location = "product-name-filter.php?filter="+value;
			}
		});
	
		$("button:visible[id*='addToCart']").each(function (i, el) {
			<?php 
				if(!isset($_SESSION["id"])) {
			?>
			el.style.visibility = 'hidden';
			<?php } ?>
		});
	</script>
</body>
</html>