<!DOCTYPE html>
<?php
   session_start();
   if(!isset($_SESSION["id"]) && empty($_SESSION["id"])) {
	   ?>
	   <script>
			window.location = "login.php";
	   </script>
	   <?php
   }
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | E-Shopper</title>
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
								<li><a href="checkout.php"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="cart.php" class="active"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href=""><i class="fa fa-user"></i> Account</a></li>
								<li><a href="#" onclick="logOut()"><i class="fa fa-lock"></i> Log out</a></li>
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
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	<?php
		include("action/config.php");
		include("action/getCart.php");

		$currentID = 0;
		$totalPrice=0;
		$products = getItemsInCart($conn, $_SESSION['id']);
	?>
	
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="index.php">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($products as $product) { $currentID = $product['id']; $totalPrice += $product['total']; ?>
							<tr id="wrapper<?php echo $product['id'] ?>">
								<td class="cart_product">
									<a href="product-details.php?id=<?php echo $product['id'] ?>">
										<img style="width: 110px; height:110px" src="images/home/<?php echo $product['imagePath'] ?>" alt="">
									</a>
								</td>
								<td class="cart_description">
									<h4>
										<a href="product-details.php?id=<?php echo $product['id'] ?>">
											<?php echo $product['name'] ?>
										</a>
									</h4>
									<p>ID: <?php echo $product['id'] ?></p>
								</td>
								<td class="cart_price">
									<p id="price<?php echo $product['id'] ?>">$<?php echo $product['price'] ?></p>
								</td>
								<td class="cart_quantity">
									<div class="cart_quantity_button">
										<a style="cursor: pointer" class="cart_quantity_up" onclick="prepareUpdateOneItem(<?php echo $_SESSION['id'] ?>,<?php echo $product['id'] ?>,1)"> + </a>
										<input id="quantity<?php echo $product['id'] ?>" onkeypress="return isNumber(event)" class="cart_quantity_input" type="text" name="quantity" value="<?php echo $product['numOfItem'] ?>" autocomplete="off" size="2">
										<a style="cursor: pointer" class="cart_quantity_down" onclick="prepareUpdateOneItem(<?php echo $_SESSION['id'] ?>,<?php echo $product['id'] ?>,-1)"> - </a>
									</div>
								</td>
								<td class="cart_total">
									<p id="totalPrice<?php echo $product['id'] ?>" class="cart_total_price">$<?php echo $product['total'] ?></p>
								</td>
								<td class="cart_delete">
									<a style="cursor: pointer" onclick="prepareDeleteItem(<?php echo $_SESSION['id'] ?>,<?php echo $product['id'] ?>)" id="delete<?php echo $product['id'] ?>" class="cart_quantity_delete" ><i class="fa fa-times"></i></a>
								</td>
							</tr>
						<?php } ?>
					
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-6">
				</div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span id="subTotal">$<?php echo $totalPrice ?></span></li>
							<li>Eco Tax <span>$2</span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span id="total">$<?php echo $totalPrice +2 ?></span></li>
						</ul>
							<!--<a class="btn btn-default update" href="">Update</a>-->
							<a id="checkOutCart" href="checkout.php" class="btn btn-default check_out" >Check Out</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

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
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-notify.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
	
	<script type="text/javascript">
		var oldValueTextBox=-1;
		
		function logOut() {
			$.ajax({
				url: 'action/logout.php',
				type: 'get'
			}).done(function() {
				window.location.href = 'index.php';
			});
		}
		
		function prepareUpdateOneItem(userID, itemID, num){
			if(parseInt(document.getElementById("quantity"+itemID).value) > 1 || num == 1){
				updateOneItem(userID, itemID, num);
			}
		}
		
		function updateOneItem(userID, itemID, num){
			$.ajax({
				type: 'POST',
				url: 'action/updateOneItemInCart.php',
				data: 'userID='+ userID + '&itemID='+ itemID + '&num='+ num,
				success: function(result) {
					result = JSON.parse(result);
					console.log(result);
					if(result[0] == "false"){
						$.notify({
							// options
							message: "This item is out of stock"
						},{
							// settings
							type: 'danger',
							delay: 100
						});
					}
					else {
						//alert("Hello! I am an alert box!");
						oneItem = $('#price'+itemID).html().split('$')[1];

						document.getElementById("quantity"+itemID).value = parseInt(document.getElementById("quantity"+itemID).value) + num;
						newPrice = oneItem * document.getElementById("quantity"+itemID).value;
						$('#totalPrice'+itemID).text('$' + newPrice);
						
						subTotal = parseInt($('#subTotal').html().split('$')[1]) + parseInt($('#price'+itemID).html().split('$')[1])*num;

						$('#subTotal').text('$' + subTotal);
						$('#total').text('$' + parseInt(subTotal + 2));
						//$('#totalPrice'+itemID).replaceWith( '<p id="totalPrice'+ itemID +'" class="cart_total_price">'  '</p>' );
					}
					
				}
			});
		}
		
		function updateOneItemWithMultiple(userID, itemID, value){
			$.ajax({
				type: 'POST',
				url: 'action/updateOneItemWithMultiple.php',
				data: 'userID='+ userID + '&itemID='+ itemID + '&value='+ value,
				success: function(result) {
					console.log(result);
					updateCart(itemID, value);
				}
			});
		}
		
		function prepareDeleteItem(userID, itemID){
			var numOfItem = document.getElementById("quantity"+itemID).value;
			deleteItem(userID,itemID,numOfItem);
		}
		
		function deleteItem(userID, itemID, numOfItem){
			$.ajax({
				type: 'POST',
				url: 'action/deleteItem.php',
				data: 'userID='+ userID + '&itemID='+ itemID + '&numOfItem='+ numOfItem,
				success: function(result) {
					console.log(result);
					$("#wrapper"+itemID).remove();
					
					for(var i = arrayTotalPriceElements.length - 1; i >= 0; i--) {
						if(arrayTotalPriceElements[i] === ("#totalPrice"+itemID)) {
							console.log("arrayTotalPriceElements[i]")
							arrayTotalPriceElements.splice(i, 1);
							arrayInputElements.splice(i,1);
						}
					}
					
					var subTotal = 0;
					
					for(i=0; i< arrayInputElements.length;i++){
						subTotal += parseInt($(arrayTotalPriceElements[i]).text().split('$')[1]);
					}
				
					$('#subTotal').text('$' + subTotal);
					$('#total').text('$' + parseInt(subTotal + 2));
					
					if(arrayTotalPriceElements.length == 0){
						document.getElementById("checkOutCart").style.visibility = 'hidden';
					}
					else{
						document.getElementById("checkOutCart").style.visibility = 'visible';
					}
				}
			});
		}
		
		function isNumber(evt) {
			evt = (evt) ? evt : window.event;
			oldValueTextBox = event.target.value;
			var charCode = (evt.which) ? evt.which : evt.keyCode;
			if (charCode > 31 && (charCode < 48 || charCode > 57)) {
				return false;
			}
			else {
				return true;
			}
		}
		
	</script>
	
	<script type="text/javascript">
	
		var arrayInputElements = [];
		$("input:visible[id*='quantity']").each(function (i, el) {
			arrayInputElements.push("#"+el.id);
		});
		
		var arrayTotalPriceElements = [];
		$("p:visible[id*='totalPrice']").each(function (i, el) {
			arrayTotalPriceElements.push("#"+el.id);
		});
		
		if(arrayTotalPriceElements.length == 0){
			document.getElementById("checkOutCart").style.visibility = 'hidden';
		}
		
		for(i=0; i< arrayInputElements.length;i++){
			
			$(arrayInputElements[i]).on('input',function(e){
				console.log(e.currentTarget.value);
				var element= document.getElementById(e.currentTarget.id);
				
				var itemID = e.currentTarget.id.split("quantity")[1];
				var value = parseInt(document.getElementById("quantity"+itemID).value);
				if(element.value=="" || element.value=="0"){
					element.value ="1";
					updateCart(itemID, element.value);
				}
				else{
					var userID = <?php echo $_SESSION['id']; ?>;
					
					
					
					upgradeMultipleItem(userID, itemID, value);

					
				}
			});
		}
		
		function upgradeMultipleItem(userID, itemID, value){
			$.ajax({
				type: 'GET',
				data: 'itemID='+ itemID,
				url: 'action/getRemainProduct.php',
				success: function(result) {
					//console.log(result);
					if( (value > oldValueTextBox) && ((value - oldValueTextBox) > result)){
						$.notify({
							// options
							message: "Storage just have "+ (result) + " item left for this kind of item"
						},{
							// settings
							type: 'danger',
							delay: 100
						});
						
						document.getElementById("quantity"+itemID).value = oldValueTextBox;
					}
					else {
						updateOneItemWithMultiple(userID, itemID, value);
					}
				}
			});
		}
		
		function updateCart(itemID, value){
								
			oneItem = $('#price'+itemID).html().split('$')[1];
			newPrice = oneItem * value;
			$('#totalPrice'+itemID).text('$' + newPrice);
					
			var subTotal = 0;
					
			for(i=0; i< arrayInputElements.length;i++){
				subTotal += parseInt($(arrayTotalPriceElements[i]).text().split('$')[1]);
			}
			
			$('#subTotal').text('$' + subTotal);
			$('#total').text('$' + parseInt(subTotal + 2));
		}
		
	</script>

</body>
</html>