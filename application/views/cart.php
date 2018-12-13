<!DOCTYPE HTML>
<html>
	<head>
	<title>Footwear</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/icomoon.css">
	<!-- Ion Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/ionicons.min.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/bootstrap.min.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/style.css">

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-sm-7 col-md-9">
							<div id="colorlib-logo"><a href="<?php echo base_url()."index.php/crud/lihatHome"; ?>">Footwear</a></div>
						</div>
						<div class="col-sm-5 col-md-3">
			            <form action="#" class="search-wrap">
			               <div class="form-group">
			                  <input type="search" class="form-control search" placeholder="Search">
			                  <button class="btn btn-primary submit-search text-center" type="submit"><i class="icon-search"></i></button>
			               </div>
			            </form>
			         </div>
		         </div>
					<div class="row">
						<div class="col-sm-12 text-left menu-1">
							<ul>
								<li><a href="<?php echo base_url()."index.php/crud/lihatHome"; ?>">Home</a></li>
								<li><a href="<?php echo base_url()."index.php/crud/lihatAll"; ?>">All Products</a></li>
								<li><a href="<?php echo base_url()."index.php/crud/lihatMen"; ?>">Men</a></li>
								<li><a href="<?php echo base_url()."index.php/crud/lihatWomen"; ?>">Women</a></li>
								<li><a href="<?php echo base_url()."index.php/crud/lihatAbout"; ?>">About</a></li>
								<li class="cart has-dropdown"><a href="#"><i class="icon-shopping-cart"></i> Cart</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="sale">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 offset-sm-2 text-center">
							<div class="row">
								<div class="owl-carousel2">
									<div class="item">
										<div class="col">
											<h3><a href="#">25% off (Almost) Everything! Use Code: Summer Sale</a></h3>
										</div>
									</div>
									<div class="item">
										<div class="col">
											<h3><a href="#">Our biggest sale yet 50% off all summer shoes</a></h3>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>

		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="bread"><span><a href="<?php echo base_url()."index.php/crud/lihatHome"; ?>">Home</a></span> / <span>Shopping Cart</span></p>
					</div>
				</div>
			</div>
		</div>


		<div class="colorlib-product">
			<div class="container">
				<div class="row row-pb-lg">
					<div class="col-md-10 offset-md-1">
						<div class="process-wrap">
							<div class="process text-center active">
								<p><span>01</span></p>
								<h3>Shopping Cart</h3>
							</div>
							<div class="process text-center">
								<p><span>02</span></p>
								<h3>Checkout</h3>
							</div>
							<div class="process text-center">
								<p><span>03</span></p>
								<h3>Order Complete</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row row-pb-lg">
					<div class="col-md-12">
						<div class="product-name d-flex">
							<div class="one-forth text-left px-4">
								<span>Product Details</span>
							</div>
							<div class="one-eight text-center">
								<span>Price</span>
							</div>
							<div class="one-eight text-center">
								<span>Quantity</span>
							</div>
							<div class="one-eight text-center">
								<span>Total</span>
							</div>
							<div class="one-eight text-center px-4">
								<span>Edit</span>
							</div>
						</div>
						<?php 
						$total = 0;
						foreach ($query->result() as $produk) { ?>
						<div class="product-cart d-flex">
							<div class="one-forth">
								<div class="product-img" style="background-image: url(<?php echo base_url('assets/images/item-'.$produk->id.'.jpg'); ?>">
								</div>
								<div class="display-tc">
									<h3><?php echo $produk->nama; ?></h3>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<span class="price">Rp <?php echo $produk->harga; ?></span>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<span class="price"><?php echo $produk->jumlah; ?></span>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<span class="price">Rp <?php echo $produk->jumlah*$produk->harga; ?></span>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<a href="<?php echo base_url('index.php/crud/edit/').$produk->no; ?>" class="price">Edit</a>
								</div>
								<div class="display-tc">
									<a href="<?php echo base_url('index.php/crud/delete/').$produk->no; ?>" class="price">Delete</a>
								</div>
							</div>
						</div>
						<?php $total = $produk->jumlah*$produk->harga + $total;} ?>
					</div>
				</div>
				<div class="row row-pb-lg">
					<div class="col-md-12">
						<div class="total-wrap">
							<div class="row">
								<div class="col-sm-8">
									<form action="#">
										<div class="row form-group">
											<div class="col-sm-9">
												<input type="text" name="quantity" class="form-control input-number" placeholder="Your Coupon Number...">
											</div>
											<div class="col-sm-3">
												<input type="submit" value="Apply Coupon" class="btn btn-primary">
											</div>
										</div>
									</form>
								</div>
								<div class="col-sm-4 text-center">
									<div class="total">
										<div class="sub">
											<p><span>Subtotal:</span> <span>Rp <?php echo $total; ?></span></p>
											<p><span>Delivery:</span> <span>Rp 55000</span></p>
											<p><span>Discount:</span> <span>Rp 20000</span></p>
										</div>
										<div class="grand-total">
											<p><span><strong>Total:</strong></span> <span>Rp <?php echo $total+35000;?></span></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col footer-col"  style="margin-right: -450px">
						<h4>About Us</h4>
						<ul class="colorlib-footer-links">
							<li><span><i class="icon-location"></i></span> Makassar, Sulawesi Selatan</li>
							<li><span><i class="icon-phone3"></i></span> +62 812 3456 7890</li>
							<li><span><i class="icon-paperplane"></i></span> info@website.com</li>
						</ul>
					</div>
					<div class="col footer-col colorlib-widget">
						<h4>About Footwear</h4>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="https://twitter.com/" target="_blank"><i class="icon-twitter"></i></a></li>
								<li><a href="https://www.facebook.com/" target="_blank"><i class="icon-facebook"></i></a></li>
							</ul>
						</p>
					</div>
				</div>
			</div>
			<div class="copy">
				<div class="row">
					<div class="col-sm-12 text-center">
						<p>
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
						</p>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
	</div>
	
		<!-- jQuery -->
	<script src="<?php echo base_url()."assets/"; ?>js/jquery.min.js"></script>
   <!-- popper -->
   <script src="<?php echo base_url()."assets/"; ?>js/popper.min.js"></script>
   <!-- bootstrap 4.1 -->
   <script src="<?php echo base_url()."assets/"; ?>js/bootstrap.min.js"></script>
   <!-- jQuery easing -->
   <script src="<?php echo base_url()."assets/"; ?>js/jquery.easing.1.3.js"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url()."assets/"; ?>js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="<?php echo base_url()."assets/"; ?>js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="<?php echo base_url()."assets/"; ?>js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="<?php echo base_url()."assets/"; ?>js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo base_url()."assets/"; ?>js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="<?php echo base_url()."assets/"; ?>js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="<?php echo base_url()."assets/"; ?>js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="<?php echo base_url()."assets/"; ?>js/main.js"></script>

	</body>
</html>