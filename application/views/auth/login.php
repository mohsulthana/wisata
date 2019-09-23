<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title><?= $title;?></title>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="<?= asset_url();?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?= asset_url();?>css/style.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="<?= asset_url();?>css/animate.min.css" rel="stylesheet" type="text/css" media="all" /><!-- animation -->
<link href="<?= asset_url();?>css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style -->   
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="<?= asset_url();?>css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="<?= asset_url();?>js/jquery-2.2.3.min.js"></script> 
<script src="<?= asset_url();?>js/jquery-scrolltofixed-min.js" type="text/javascript"></script><!-- fixed nav js -->
<script>
    $(document).ready(function() {

        // Dock the header to the top of the window when scrolled past the banner. This is the default behaviour.

        $('.header-two').scrollToFixed();  
        // previous summary up the page.

        var summaries = $('.summary');
        summaries.each(function(i) {
            var summary = $(summaries[i]);
            var next = summaries[i + 1];

            summary.scrollToFixed({
                marginTop: $('.header-two').outerHeight(true) + 10, 
                zIndex: 999
            });
        });
    });
</script>
<!-- //js --> 
<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'> 
<!-- web-fonts -->  
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="<?= asset_url();?>js/move-top.js"></script>
<script type="text/javascript" src="<?= asset_url();?>js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
		
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->
</head>
<body>
	<!-- header -->
	<div class="header">
		<div class="w3ls-header"><!--header-one--> 
			<div class="w3ls-header-left">
				<p><a href="#">Dinas Kebudayaan dan Pariwisata Provinsi Sumatera Selatan </a></p>
			</div>
			<div class="w3ls-header-right">
				<ul>
					<li class="dropdown head-dpdn">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i> My Account<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="login.html">Login </a></li> 
							<li><a href="signup.html">Sign Up</a></li> 
						</ul> 
					</li> 
					
					
					<li class="dropdown head-dpdn">
						<a href="contact.html" class="dropdown-toggle"><i class="fa fa-map-marker" aria-hidden="true"></i>Find Me</a>
					</li> 
					
				</ul>
			</div>
			<div class="clearfix"> </div> 
		</div>
		<div class="header-two"><!-- header-two -->
			<div class="container">
				<div class="header-logo">
					<h1><a href="<?= base_url();?>"><span>K</span>ota <i>Palembang</i></a></h1>
					<h6>Web Dinas Pariwisata</h6> 
				</div>	
				<div class="header-search">
					<form action="#" method="post">
						<input type="search" name="Search" placeholder="Search for a Location" required="">
						<button type="submit" class="btn btn-default" aria-label="Left Align">
							<i class="fa fa-search" aria-hidden="true"> </i>
						</button>
					</form>
				</div>
				<div class="header-cart"> 
					<div class="my-account">
						<a href="contact.html"><i class="fa fa-map-marker" aria-hidden="true"></i> CONTACT US</a>						
					</div>
					<div class="cart"> 
						<form action="#" method="post" class="last"> 
							<input type="hidden" name="cmd" value="_cart" />
							<input type="hidden" name="display" value="1" />
							<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
						</form>  
					</div>
					<div class="clearfix"> </div> 
				</div> 
				<div class="clearfix"> </div>
			</div>		
		</div><!-- //header-two -->
		<div class="header-three"><!-- header-three -->
			<div class="container">
				<div class="menu">
					<div class="cd-dropdown-wrapper">
						<a class="cd-dropdown-trigger" href="#0">Daftar Kebutuhan</a>
						<nav class="cd-dropdown"> 
							<a href="#0" class="cd-close">Close</a>
							<ul class="cd-dropdown-content"> 
								<li><a href="offers.html">Hotel</a></li>
								<li class="has-children">
									<a href="#">Objek Wisata</a> 
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										<li class="has-children">
											<a href="#">Taman Alam</a>  
											<a href="#">Event</a> 	
											<a href="#">Wisata Buatan</a>
											<a href="#">Sejarah</a>
											<a href="#">Museum</a>
											<a href="#">Art Gallery</a> 
											<a href="#">Taman Budaya</a>
											<a href="#">Kerajinan</a>
											<a href="#">Taman Nasional</a>
											<a href="#">Hutan Raya</a> 
											<a href="#">Taman Buru</a> 
											<a href="#">Mangrove</a> 
										</li>
									</ul> <!-- .cd-secondary-dropdown --> 
								</li> <!-- .has-children -->
								    <a href="products1.html">Restoran</a> </li><li>
									<a href="products2.html">Sanggar Seni</a> </li><li>
									<a href="products3.html">SPA</a></li><li>
									<a href='products4.html'>Cinderamata</a></li><li>
									<a href="products5.html">Usaha Perjalanan</a></li><li>
									<a href="products6.html">Rekreasi</a></li><li>
									<a href="products7.html">Data Pengunjung</a></li>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
				<div class="move-text">
					<div class="marquee"><a href="offers.html"> Dinas Kebudayaan dan Pariwisata Provinsi Sumatera Selatan <span> Mari Berlibur ke Sumatera Selatan </span> <span> Selamat Menikmati Liburan Anda!!</span></a></div>
					<script type="text/javascript" src="<?= asset_url();?>js/jquery.marquee.min.js"></script>
					<script>
					  $('.marquee').marquee({ pauseOnHover: true });
					  //@ sourceURL=pen.js
					</script>
				</div>
			</div>
		</div>
	</div>
	<!-- //header --> 	
	<!-- login-page -->
	<div class="login-page">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">Login to your account</h3>  
			<div class="login-body">
				<form action="#" method="post">
					<input type="text" class="user" name="email" placeholder="Enter your email" required="">
					<input type="password" name="password" class="lock" placeholder="Password" required="">
					<input type="submit" value="Login">
					<div class="forgot-grid">
						<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Remember me</label>
						<div class="forgot">
							<a href="#">Forgot Password?</a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</form>
			</div>  
			<h6> Not a Member? <a href="signup.html">Sign Up Now »</a> </h6> 
			<div class="login-page-bottom social-icons">
				<h5>Recover your social account</h5>
				<ul>
					<li><a href="#" class="fa fa-facebook icon facebook"> </a></li>
					<li><a href="#" class="fa fa-twitter icon twitter"> </a></li>
					<li><a href="#" class="fa fa-google-plus icon googleplus"> </a></li>
					<li><a href="#" class="fa fa-dribbble icon dribbble"> </a></li>
					<li><a href="#" class="fa fa-rss icon rss"> </a></li> 
				</ul> 
			</div>
		</div>
	</div>
	<!-- //login-page --> 
	<!-- footer-top -->
	<div class="footer">
		<div class="container">
			<div class="footer-info w3-agileits-info">
				<div class="col-md-4 address-left agileinfo">
					<div class="footer-logo header-logo">
						<h2><a href="index.html"><span>D</span>inas</a></h2>
						<h6>Kebudayaan dan Pariwisata Sumsel</h6>
					</div>
					<ul>
						<li><i class="fa fa-map-marker"></i> Jl. Demang Lebar Daun No.Kav 9, Lorok Pakjo, Ilir Bar. I, Kota Palembang, Sumatera Selatan</li>
						<li><i class="fa fa-phone"></i> +(0711) 356661 </li>
						<li><i class="fa fa-envelope-o"></i> <a href="info@southsumateratourism.com"> info@southsumateratourism.com</a></li>
					</ul> 
				</div>
				<div>
					<div class="col-md-4 footer-grids">
					</div>
					<div class="col-md-4 footer-grids">
					</div>
					<div class="col-md-4 footer-grids">
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //footer -->		
	<div class="copy-right"> 
		<div class="container">
			<p> Dinas Kebudayaan dan Pariwisata Provinsi Sumatera Selatan</a></p>
		</div>
	</div> 
	<!-- cart-js -->
	<script src="<?= asset_url();?>js/minicart.js"></script>
	<script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) {
        			items[i].set('shipping', 0);
        			items[i].set('shipping2', 0);
        		}
        	}
        });
    </script>  
	<!-- //cart-js --> 	 
	<!-- menu js aim -->
	<script src="<?= asset_url();?>js/jquery.menu-aim.js"> </script>
	<script src="<?= asset_url();?>js/main.js"></script> <!-- Resource jQuery -->
	<!-- //menu js aim --> 
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?= asset_url();?>js/bootstrap.js"></script>
</body>
</html>