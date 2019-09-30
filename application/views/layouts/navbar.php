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
							<li><a href="<?= base_url();?>authentication/login">Login </a></li> 
							<li><a href="<?= base_url();?>authentication/signup">Sign Up</a></li>
						</ul> 
					</li> 
					<li class="dropdown head-dpdn">
						<a href="contact.html" class="dropdown-toggle"><i class="fa fa-mail" aria-hidden="true"></i> admin@pariwisataplg.go.id</a>
					</li> 
					<li class="dropdown head-dpdn">
						<a href="card.html" class="dropdown-toggle"><i class="fa fa-phone" aria-hidden="true"></i> Phone: 0711- 5740028 | 081253628843</a>
					</li> 
					<li class="dropdown head-dpdn">
						<a href="help.html" class="dropdown-toggle"><i class="fa fa-question-circle" aria-hidden="true"></i> Help</a>
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
				<!-- <div class="header-search">
					<form action="#" method="post">
						<input type="search" name="Search" placeholder="Cari wisata..." required="">
						<button type="submit" class="btn btn-default" aria-label="Left Align">
							<i class="fa fa-search" aria-hidden="true"> </i>
						</button>
					</form>
				</div> -->
				<div class="header-cart"> 
					<div class="my-account">
						<a href="<?= base_url('authentication/login');?>"><i class="fa fa-user" aria-hidden="true"></i> Login</a>						
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
						<a class="cd-dropdown-trigger" href="#0">Explore Palembang</a>
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
							</ul>
						</nav>
					</div>
				</div>
				<div class="move-text">
					<div class="marquee"><a href="offers.html"> Kabut Asap Bikin Udara Malam-Pagi di Palembang Tak Sehat <span>15 Tempat Wisata di Palembang yang Harus Dikunjungi!</span> <span> BREAKING NEWS : Presiden Jokowi Lagi di Pekanbaru, Malam Ini Kualitas Udara Masuk Level Berbahaya</span></a></div>
					<script type="text/javascript" src="<?= asset_url();?>js/jquery.marquee.min.js"></script>
					<script>
					  $('.marquee').marquee({ pauseOnHover: true });
					  //@ sourceURL=pen.js
					</script>
				</div>
			</div>
    </div>