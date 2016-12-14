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
    <title>Home | E-Shopper</title>
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
								<li><a href="#"><i class="fa fa-phone"></i> 0984 12 34 56</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> nhom6@gmail.com</a></li>
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
						<div class="btn-group pull-right">
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
								<li><a href="index.php" class="active">Home</a></li>
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
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Company</h2>
									<p>The largest company </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img style="width: 400px" src="images/home/homePhone1.jpg" class="girl img-responsive" alt="" />
									<!-- <img src="images/home/pricing.png"  class="pricing" alt="" /> -->
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Diversity</h2>
									<p>Always update new phones </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img style="height: 280px" src="images/home/homePhone2.jpg" class="girl img-responsive" alt="" />
									<!-- <img src="images/home/pricing.png"  class="pricing" alt="" /> -->
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Free Ship</h2>
									<p>Free shipp all over the world</p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img style="height: 240px" src="images/home/homePhone3.jpg" class="girl img-responsive" alt="" />
									<!-- <img src="images/home/pricing.png"  class="pricing" alt="" /> -->
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->

	<?php 
		include("action/config.php");
		include("action/products-filter.php");

		$currentID = 0;
		$products = getItemsWithBrand($conn,$_GET['filter']);
		$countItems = getCountItem($conn);
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
									<?php foreach ($countItems as $item) {  ?>
									<li><a href="product-brand-filter.php?filter=<?php echo $item['brand'] ?>"> <span class="pull-right"><?php echo "(".$item["numOfItem"].")"?></span><?php echo $item["brand"]?></a></li>
									<?php } ?>
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="images/home/free-ship.png" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>
			
				<div class="col-sm-9 padding-right">
					<div class="features_items" id="sanpham"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
						<?php foreach ($products as $product) { $currentID = $product['id']; ?>
							<div class="col-sm-4">
								<div class="product-image-wrapper">
									<div class="single-products">
											<div class="productinfo text-center">
												<a href="product-details.php?id=<?php echo $product['id'] ?>">
													<img src="images/home/<?php echo $product['imagePath'] ?>" alt="" />
												</a>
												<h2><?php echo $product['price'] ?> $</h2>
												<p id="productName<?php echo $product['id'] ?>"><?php echo $product['name'] ?></p>
												<?php 
													if(isset($_SESSION["id"])) {
												?>
												<a id="addToCart<?php echo $product['id'] ?>" onclick="checkExistInCart(<?php echo $_SESSION['id'] ?>, <?php echo $currentID ?>)" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												<?php } ?>
												
											</div>
											<?php if ($product['status'] == 1) { ?>
												<img src="images/product-details/new.jpg" class="newarrival" alt="" />
											<?php } else if ($product['status'] == 2) { ?>
												<img src="images/product-details/sale.png" class="newarrival" alt="" />
											<?php } ?>
									</div>
								</div>
							</div>
						<?php } ?>

					</div><!--features_items-->
					<ul class="pagination">
							<button onclick="loadMore(this.id, '<?php echo $_GET['filter'] ?>');" id="<?php echo $currentID; ?>" class="btn btn-primary showMoreButton">Show more</button>
					</ul>
					
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
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Team 6</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	
	
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-notify.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
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

		function loadMore(id, brand) {
			$.ajax({
				type: 'POST',
				url: 'action/ajax_brand_more.php',
				data: 'id='+ id + '&brand='+ brand,
				success: function(html) {
					$('.showMoreButton').remove();
					$('#sanpham').append(html);
				}
			});
		}
		
		function checkExistInCart(userID, itemID, numOfItem = 1) {
			$.ajax({
				type: 'POST',
				url: 'action/checkCart.php',
				data: 'userID='+ userID + '&itemID='+ itemID,
				success: function(result) {
					result = JSON.parse(result);
					console.log(result);
					if(result[0] == "true"){
						$.notify({
							// options
							message: $('#productName'+itemID).text()+" already exist in cart"
						},{
							// settings
							type: 'danger',
							delay: 100
						});
					}
					else {
						outOfStock(userID, itemID, numOfItem);
					}
				}
			});
		}
		
		function outOfStock(userID, itemID, numOfItem = 1) {
			$.ajax({
				type: 'POST',
				url: 'action/outOfStock.php',
				data: 'itemID='+ itemID,
				success: function(result) {
					result = JSON.parse(result);
					console.log(result);
					if(result[0] == "true"){
						$.notify({
							// options
							message: result[1]
						},{
							// settings
							type: 'danger',
							delay: 100
						});
					}
					else {
						addCart(userID, itemID, numOfItem);
					}
				}
			});
		}
		
		function addCart(userID, itemID, numOfItem = 1) {
			$.ajax({
				type: 'POST',
				url: 'action/addItemToCart.php',
				data: 'userID='+ userID + '&itemID='+ itemID + '&numOfItem='+ numOfItem,
				success: function(html) {
					$.notify({
						// options
						message: "Added item "+$('#productName'+itemID).text()
					},{
						// settings
						type: 'success',
						delay: 2000,
						timer: 100
					});
				}
			});
		}
		
	</script>  
	<script type="text/javascript">
		$("#searchProduct").keyup(function (e) {
			if (e.which == 13) {
				var value = $("#searchProduct").val();
				window.location = "product-name-filter.php?filter="+value;
			}
		});
	
		$("a:visible[id*='addToCart']").each(function (i, el) {
			<?php 
				if(!isset($_SESSION["id"])) {
			?>
			el.style.visibility = 'hidden';
			<?php } ?>
		});
	</script>
</body>
</html>