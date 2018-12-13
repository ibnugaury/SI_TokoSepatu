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
								<li class="cart has-dropdown"><a href="<?php echo base_url()."index.php/crud/lihatCart"; ?>"><i class="icon-shopping-cart"></i> Cart</a>
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
						<p class="bread"><span><a href="<?php echo base_url()."index.php/crud/lihatHome"; ?>">Home</a></span> / <span>Product Details</span></p>
					</div>
				</div>
			</div>
		</div>

		<form action="<?php echo base_url('index.php/crud/update'); ?>" method="POST">
		<?php foreach ($query->result() as $produk) { ?>
		<div class="colorlib-product">
			<div class="container">
				<div class="row row-pb-lg product-detail-wrap">
					<div class="col-sm-8">
							<div class="item">
								<div class="product-entry border">
									<a href="#" class="prod-img">
										<img src="<?php echo base_url('assets/images/item-'.$produk->id.'.jpg'); ?>" class="img-fluid" alt="">
									</a>
								</div>
							</div>
					</div>
					<input type="hidden" name="no" value="<?php echo $produk->no; ?>">
                    <input type="hidden" name="id" value="<?php echo $produk->id; ?>">
					<input type="hidden" name="nama" value="<?php echo $produk->nama; ?>">
					<input type="hidden" name="harga" value="<?php echo $produk->harga; ?>">
					<input type="hidden" name="jenis" value="<?php echo $produk->jenis; ?>">
					<div class="col-sm-4">
						<div class="product-desc">
							<h3><?php echo $produk->nama; ?></h3>
							<p class="price">
								<span>Rp <?php echo $produk->harga; ?></span> 
								<span class="rate">
									<i class="icon-star-full"></i>
									<i class="icon-star-full"></i>
									<i class="icon-star-full"></i>
									<i class="icon-star-full"></i>
									<i class="icon-star-half"></i>
									(74 Rating)
								</span>
							</p>
							<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                     <div class="input-group mb-4">
                     	<span class="input-group-btn">
                        	<button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
                           <i class="icon-minus2"></i>
                        	</button>
                    		</span>
                     	<input type="text" id="quantity" name="jumlah" class="form-control input-number" value="<?php echo $produk->jumlah; ?>" min="1" max="100">
                     	<span class="input-group-btn ml-1">
                        	<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                             <i class="icon-plus2"></i>
                         </button>
                     	</span>
                  	</div>
                  	<div class="row">
	                  	<div class="col-sm-12 text-center">
									<p class="addtocart">
										<input type="submit" value="Save Changes" class="btn btn-primary btn-addtocart" >
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php } ?>
		</form>

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

	<script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>


	</body>
</html>

