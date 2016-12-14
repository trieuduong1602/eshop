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
    <title>Page Admin | E-Shopper</title>
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
									<li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
									<li><a href="#" onclick="logOut()"><i class="fa fa-lock"></i> Log out</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	</header><!--/header-->
	
	<section>
		<div class="container">
			<div class="row">
				<ul class="nav nav-pills">
						<li class="active"><a data-toggle="pill" href="#update">Cập nhật thông tin sản phẩm</a></li>
						<li><a data-toggle="pill" href="#billInfo">Cập nhật thông tin các đơn hàng</a></li>
						
				</ul>	 
				<div class="tab-content">
					<div id="update" class="tab-pane fade in active">
					<br>
					<br>
						<div class="col-sm-8">
							<h3> Danh sách Các Sản Phẩm của E-Shop </h3>
						</div>
						<div class="col-sm-4">
							<button type="button" class="btn btn-success" data-toggle="modal" data-target="#addProduct">Thêm Sản Phẩm Mới</button>
						</div>
					<br> <br> <br> <br> <br> <br>
					
						<table class="table table-hover" >
							<thead>
							  <tr>
								<th width="15%">Mã Sản Phẩm</th>
								<th width="20%">Tên Sản Phẩm</th>
								<th width="20%">Mô tả</th>
								<th width="20%">Giá Bán (VNĐ)</th>
								<th width="25%" class="center"> Thao tác</th>
							  </tr>
							</thead>
							<tbody>
							  <tr>
								<td>SS01</td>
								<td>SamSung Note 7</td>
								<td>Cấu hình....bla bla</td>
								<td>13000000</td>
								<td >
									<div class="col-sm-1" ></div>
									<div class="col-sm-3">
									<button type="button" class="btn btn-danger">Xóa</button>
									</div
									<div class="col-sm-3">
									<button type="button" class="btn btn-success" >Chỉnh Sửa</button>
									</div>
								</td>
							  </tr>
							  <tr>
								<td>IP01</td>
								<td>Iphone 7 Plus</td>
								<td>Cấu hình ...bla</td>
								<td>19000000</td>
								<td >
									<div class="col-sm-1" ></div>
									<div class="col-sm-3">
									<button type="button" class="btn btn-danger">Xóa</button>
									</div
									<div class="col-sm-3">
									<button type="button" class="btn btn-success" >Chỉnh Sửa</button>
									</div>
								</td>
							  </tr>
							   <tr>
								<td>IP02</td>
								<td>Iphone 6 Plus</td>
								<td>Cấu hình ...bla</td>
								<td>16000000</td>
								<td >
									<div class="col-sm-1" ></div>
									<div class="col-sm-3">
									<button type="button" class="btn btn-danger">Xóa</button>
									</div
									<div class="col-sm-3">
									<button type="button" class="btn btn-success" >Chỉnh Sửa</button>
									</div>
								</td>
							  </tr>
							   <tr>
								<td>IP03</td>
								<td>Iphone 5s</td>
								<td>Cấu hình ...bla</td>
								<td>10000000</td>
								<td >
									<div class="col-sm-1" ></div>
									<div class="col-sm-3">
									<button type="button" class="btn btn-danger">Xóa</button>
									</div
									<div class="col-sm-3">
									<button type="button" class="btn btn-success" >Chỉnh Sửa</button>
									</div>
								</td>
							  </tr>
							</tbody>
						 </table>
						  <ul class="pagination pagination " style="padding-top:100px ; padding-left:400px">
							<li><a href="#"><</a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">></a></li>
						  </ul>

					</div>
					<div id="billInfo" class="tab-pane fade">
					<br>
					<br>
						<div class="col-sm-8">
							<h3> Danh sách Các Đơn Hàng Chưa Duyệt </h3>
						</div>
					<br> <br> <br> <br> <br> <br>
					
						<table class="table table-hover" >
							<thead>
							  <tr>
								<th width="15%">Mã Đơn Hàng</th>
								<th width="20%">Tên Sản Phẩm</th>
								<th width="20%">Ngày Đặt Hàng </th>
								<th width="30%">Thông tin</th>
								<th width="15%" class="center"> Thao tác</th>
							  </tr>
							</thead>
							<tbody>
							  <tr>
								<td>SS01</td>
								<td>SamSung Note 7</td>
								<td>4/12/2016</td>
								<td>bla bla</td>
								<td >
									<div class="col-sm-1" ></div>
									<div class="col-sm-3">
									<button type="button" class="btn btn-success">Duyệt</button>
									</div
								</td>
							  </tr>
							  <tr>
								<td>SS01</td>
								<td>SamSung Note 7</td>
								<td>4/12/2016</td>
								<td>bla bla</td>
								<td >
									<div class="col-sm-1" ></div>
									<div class="col-sm-3">
									<button type="button" class="btn btn-success">Duyệt</button>
									</div
								</td>
							  </tr>
							  <tr>
								<td>SS01</td>
								<td>SamSung Note 7</td>
								<td>4/12/2016</td>
								<td>bla bla</td>
								<td >
									<div class="col-sm-1" ></div>
									<div class="col-sm-3">
									<button type="button" class="btn btn-success">Duyệt</button>
									</div
								</td>
							  </tr>
							 
							</tbody>
						 </table>
						  <ul class="pagination pagination " style="padding-top:100px ; padding-left:400px">
							<li><a href="#"><</a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">></a></li>
						  </ul>

					</div>
				</div>  
			</div>
			
			 <!-- Modal -->
		  <div class="modal fade" id="addProduct" role="dialog">
			<div class="modal-dialog">
			  <!-- Modal content-->
			  <div class="modal-content">
				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal">&times;</button>				  
				  <h3 class="modal-title text-center">Cập nhật sản phẩm mới</h3>				  
				</div>
				<div class="modal-body">
				  
					<label for="nameProduct">Tên Sản Phẩm</label>
					<input type="text" class="form-control" id="nameProduct">
					<br>
					<label for="trade">Thương Hiệu:</label>
						<select class="form-control" id="trade">
							<option>None</option>
							<option>Iphone</option>
							<option>SamSung</option>
							<option>HTC</option>
							<option>Nokia</option>
						</select>
					<br>
					<label for="sale">Giá Bán</label>
					<input type="text" class="form-control" id="sale">
					<br>
					<label for="info">Mô tả</label>
					<textarea class="form-control" rows="5" id="info"></textarea>
					<br>
					<label for="input-image">Upload hình</label>
					<input id="input-image" name="input-image" type="file" class="file-loading" accept="image/*">
				  
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success" >Thêm</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
				</div>
			  </div>
			  
			</div>
		  </div>
		</div>
	</section
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

	<script type="text/javascript">
		function logOut() {
			$.ajax({
				url: 'action/logout.php',
				type: 'get'
			}).done(function() {
				window.location.href = 'index.php';
			});
		}
	</script>  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>