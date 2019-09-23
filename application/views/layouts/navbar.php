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
    	<!-- banner -->
	<div class="banner">
		<div id="kb" class="carousel kb_elastic animate_text kb_wrapper" data-ride="carousel" data-interval="6000" data-pause="hover">
			<!-- Wrapper-for-Slides -->
        <div class="carousel-inner" role="listbox">  
            <div class="item active"><!-- First-Slide -->
                <img src="<?= asset_url();?>image/Ampera.jpg" alt="" class="img-responsive" />
                <div class="carousel-caption kb_caption kb_caption_right">
                    <h3 data-animation="animated flipInX">Kota Palembang</h3>
                    <h4 data-animation="animated flipInX">Pesona Indonesia</h4>
                </div>
            </div>  
            <div class="item"> <!-- Second-Slide -->
              <img src="<?= asset_url();?>image/monpera.jpg" alt="" class="img-responsive" />
                <div class="carousel-caption kb_caption kb_caption_right">
                    <h3 data-animation="animated fadeInDown">Monpera</h3>
                    <h4 data-animation="animated fadeInUp">Monumen Perjuangan Rakyat</h4>
                </div>
            </div> 
            <div class="item"><!-- Third-Slide -->
              <img src="<?= asset_url();?>image/belido.jpg" alt="" class="img-responsive" />
                <div class="carousel-caption kb_caption kb_caption_center">
                    <h3 data-animation="animated fadeInLeft">Momumen Belido</h3>
                    <h4 data-animation="animated flipInX">Spesies ikan Palembang</h4>
                </div>
            </div> 
        </div> 
        <!-- Left-Button -->
        <a class="left carousel-control kb_control_left" href="#kb" role="button" data-slide="prev">
          <span class="fa fa-angle-left kb_icons" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a> 
        <!-- Right-Button -->
        <a class="right carousel-control kb_control_right" href="#kb" role="button" data-slide="next">
            <span class="fa fa-angle-right kb_icons" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a> 
        </div>
		  <script src="<?= asset_url();?>js/custom.js"></script>
	  </div>
	</div>