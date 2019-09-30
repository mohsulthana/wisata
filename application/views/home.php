<div class="container">
  <div class="row m-4">
    <div class="col-lg-12">
			<div class="row">
				<div class="deals"> 
					<div class="container"> 
					<h3 class="w3ls-title">JADWAL KEGIATAN KEBUDAYAAN</h3>
					<?php foreach($acara as $key => $value) {?>
						<div class="deals-row">
							<div class="col-md-4 focus-grid"> 
								<a href="products.html" class="wthree-btn"> 
									<div class="focus-image">
										<h4 class="clrchg"><?= $value['nama_acara'];?></h4> 
									</div>
									<p>Tanggal <?= $value['tanggal']; ?></p>
								</a>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
      <div class="row">
      	<h3 class="w3ls-title">Daftar Wisata</h3>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
							<div class="tabcontent-grids">  
								<div id="owl-demo" class="owl-carousel"> 
									<?php foreach($wisata as $key => $value) {?>
									<div class="item">
										<div class="glry-w3agile-grids agileits">
											<div class="new-tag"><h6><?= $value['jenis'];?></h6></div>
											<a href="products.html"><img src="<?= $value['foto'] ?  './uploads/' . $value['id'] . '.jpg' :  'assets/image/masjidagung.jpg' ?>" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="products.html"><?= $value['nama']; ?></a></h4>
												<p><?= $value['alamat'];?></p>
												<h5><?= $value['kabupaten'];?></h5> 
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" /> 
													<input type="hidden" name="w3ls_item" value="<?= $value['nama']; ?>" /> 
													<input type="hidden" name="amount" value="100.00" /> 
													<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
												</form>  
											</div>   
										</div>   
									</div>
									<?php }; ?>
								</div> 
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="carl" aria-labelledby="carl-tab">
							<div class="tabcontent-grids">
								<script>
									$(document).ready(function() { 
										$("#owl-demo1").owlCarousel({
									 
										  autoPlay: 3000, //Set AutoPlay to 3 seconds
									 
										  items :4,
										  itemsDesktop : [640,5],
										  itemsDesktopSmall : [414,4],
										  navigation : true
									 
										});
										
									}); 
								</script>
								<div id="owl-demo1" class="owl-carousel"> 
									<div class="item">
										<div class="glry-w3agile-grids agileits"> 
											<a href="products1.html"><img src="assets/images/f1.png" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="products1.html">T Shirt</a></h4>
												<p>Lorem ipsum dolor sit amet consectetur</p>
												<h5>$10</h5>
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" /> 
													<input type="hidden" name="w3ls_item" value="T Shirt" /> 
													<input type="hidden" name="amount" value="10.00" /> 
													<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
												</form>
											</div>        
										</div>    
									</div>
									<div class="item">
										<div class="glry-w3agile-grids agileits">
											<div class="new-tag"><h6>20% <br> Off</h6></div>
											<a href="products1.html"><img src="assets/images/f2.png" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="products1.html">Women Sandal</a></h4>
												<p>Lorem ipsum dolor sit amet consectetur</p>
												<h5>$20</h5>
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" /> 
													<input type="hidden" name="w3ls_item" value="Women Sandal" /> 
													<input type="hidden" name="amount" value="20.00" /> 
													<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
												</form>
											</div>        
										</div> 
									</div>
									<div class="item">
										<div class="glry-w3agile-grids agileits"> 
											<a href="products1.html"><img src="assets/images/f3.png" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="products1.html">Jewellery</a></h4>
												<p>Lorem ipsum dolor sit amet consectetur</p>
												<h5>$60</h5>
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" /> 
													<input type="hidden" name="w3ls_item" value="Jewellery" /> 
													<input type="hidden" name="amount" value="60.00" /> 
													<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
												</form>
											</div>         
										</div> 
									</div>
									<div class="item">
										<div class="glry-w3agile-grids agileits"> 
											<div class="new-tag"><h6>New</h6></div>
											<a href="products1.html"><img src="assets/images/f4.png" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="products1.html">Party dress</a></h4>
												<p>Lorem ipsum dolor sit amet consectetur</p>
												<h5>$15</h5>
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" /> 
													<input type="hidden" name="w3ls_item" value="Party dress" /> 
													<input type="hidden" name="amount" value="15.00" /> 
													<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
												</form>
											</div>      
										</div> 
									</div> 
									<div class="item">
										<div class="glry-w3agile-grids agileits"> 
											<a href="products1.html"><img src="assets/images/f1.png" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="products1.html">T Shirt</a></h4>
												<p>Lorem ipsum dolor sit amet consectetur</p>
												<h5>$10</h5>
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" /> 
													<input type="hidden" name="w3ls_item" value="T Shirt" /> 
													<input type="hidden" name="amount" value="10.00" /> 
													<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
												</form>
											</div>        
										</div>    
									</div>
									<div class="item">
										<div class="glry-w3agile-grids agileits">
											<div class="new-tag"><h6>20% <br> Off</h6></div>
											<a href="products1.html"><img src="assets/images/f2.png" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="products1.html">Women Sandal</a></h4>
												<p>Lorem ipsum dolor sit amet consectetur</p>
												<h5>$20</h5>
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" /> 
													<input type="hidden" name="w3ls_item" value="Women Sandal" /> 
													<input type="hidden" name="amount" value="20.00" /> 
													<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
												</form>
											</div>        
										</div> 
									</div>
									<div class="item">
										<div class="glry-w3agile-grids agileits"> 
											<a href="products1.html"><img src="assets/images/f3.png" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="products1.html">Jewellery</a></h4>
												<p>Lorem ipsum dolor sit amet consectetur</p>
												<h5>$60</h5>
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" /> 
													<input type="hidden" name="w3ls_item" value="Jewellery" /> 
													<input type="hidden" name="amount" value="60.00" /> 
													<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
												</form>
											</div>         
										</div> 
									</div>
									<div class="item">
										<div class="glry-w3agile-grids agileits"> 
											<div class="new-tag"><h6>New</h6></div>
											<a href="products1.html"><img src="assets/images/f4.png" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="products1.html">Party dress</a></h4>
												<p>Lorem ipsum dolor sit amet consectetur</p>
												<h5>$15</h5>
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" /> 
													<input type="hidden" name="w3ls_item" value="Party dress" /> 
													<input type="hidden" name="amount" value="15.00" /> 
													<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
												</form>
											</div>      
										</div> 
									</div>   
								</div>   
							</div>
						</div> 
						<div role="tabpanel" class="tab-pane fade" id="james" aria-labelledby="james-tab">
							<div class="tabcontent-grids">
								<script>
									$(document).ready(function() { 
										$("#owl-demo2").owlCarousel({
									 
										  autoPlay: 3000, //Set AutoPlay to 3 seconds
									 
										  items :4,
										  itemsDesktop : [640,5],
										  itemsDesktopSmall : [414,4],
										  navigation : true
									 
										});
										
									}); 
								</script>
								<div id="owl-demo2" class="owl-carousel"> 
									<div class="item">
										<div class="glry-w3agile-grids agileits"> 
											<div class="new-tag"><h6>New</h6></div>
											<a href="products6.html"><img src="assets/images/p1.png" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="products6.html">Coffee Mug</a></h4>
												<p>Lorem ipsum dolor sit amet consectetur</p>
												<h5>$14</h5>
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" /> 
													<input type="hidden" name="w3ls_item" value="Coffee Mug" /> 
													<input type="hidden" name="amount" value="14.00" /> 
													<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
												</form>
											</div>         
										</div>  
									</div>
									<div class="item">
										<div class="glry-w3agile-grids agileits"> 
											<div class="new-tag"><h6>20% <br> Off</h6></div>
											<a href="products6.html"><img src="assets/images/p2.png" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="products6.html">Teddy bear</a></h4>
												<p>Lorem ipsum dolor sit amet consectetur</p>
												<h5>$20</h5>
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" /> 
													<input type="hidden" name="w3ls_item" value="Teddy bear" /> 
													<input type="hidden" name="amount" value="20.00" /> 
													<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
												</form>
											</div>        
										</div> 
									</div>
									<div class="item"> 
										<div class="glry-w3agile-grids agileits"> 
											<div class="new-tag"><h6>Sale</h6></div>
											<a href="products6.html"><img src="assets/images/p3.png" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="products6.html">Chocolates</a></h4>
												<p>Lorem ipsum dolor sit amet consectetur</p>
												<h5>$60</h5>
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" /> 
													<input type="hidden" name="w3ls_item" value="Chocolates" /> 
													<input type="hidden" name="amount" value="60.00" /> 
													<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
												</form>
											</div>        
										</div> 
									</div>
									<div class="item">
										<div class="glry-w3agile-grids agileits"> 
											<a href="products6.html"><img src="assets/images/p4.png" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="products6.html">Gift Card</a></h4>
												<p>Lorem ipsum dolor sit amet consectetur</p>
												<h5>$22</h5>
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" /> 
													<input type="hidden" name="w3ls_item" value="Gift Card" /> 
													<input type="hidden" name="amount" value="22.00" /> 
													<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
												</form>
											</div>       
										</div> 
									</div>
									<div class="item">
										<div class="glry-w3agile-grids agileits"> 
											<div class="new-tag"><h6>New</h6></div>
											<a href="products6.html"><img src="assets/images/p1.png" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="products6.html">Coffee Mug</a></h4>
												<p>Lorem ipsum dolor sit amet consectetur</p>
												<h5>$14</h5>
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" /> 
													<input type="hidden" name="w3ls_item" value="Coffee Mug" /> 
													<input type="hidden" name="amount" value="14.00" /> 
													<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
												</form>
											</div>         
										</div>  
									</div>
									<div class="item">
										<div class="glry-w3agile-grids agileits"> 
											<div class="new-tag"><h6>20% <br> Off</h6></div>
											<a href="products6.html"><img src="assets/images/p2.png" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="products6.html">Teddy bear</a></h4>
												<p>Lorem ipsum dolor sit amet consectetur</p>
												<h5>$20</h5>
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" /> 
													<input type="hidden" name="w3ls_item" value="Teddy bear" /> 
													<input type="hidden" name="amount" value="20.00" /> 
													<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
												</form>
											</div>        
										</div> 
									</div>
									<div class="item"> 
										<div class="glry-w3agile-grids agileits"> 
											<div class="new-tag"><h6>Sale</h6></div>
											<a href="products6.html"><img src="assets/images/p3.png" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="products6.html">Chocolates</a></h4>
												<p>Lorem ipsum dolor sit amet consectetur</p>
												<h5>$60</h5>
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" /> 
													<input type="hidden" name="w3ls_item" value="Chocolates" /> 
													<input type="hidden" name="amount" value="60.00" /> 
													<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
												</form>
											</div>        
										</div> 
									</div>
									<div class="item">
										<div class="glry-w3agile-grids agileits"> 
											<a href="products6.html"><img src="assets/images/p4.png" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="products6.html">Gift Card</a></h4>
												<p>Lorem ipsum dolor sit amet consectetur</p>
												<h5>$22</h5>
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" /> 
													<input type="hidden" name="w3ls_item" value="Gift Card" /> 
													<input type="hidden" name="amount" value="22.00" /> 
													<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
												</form>
											</div>       
										</div> 
									</div> 
								</div>    
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="decor" aria-labelledby="decor-tab">
							<div class="tabcontent-grids">
								<script>
									$(document).ready(function() { 
										$("#owl-demo3").owlCarousel({
									 
										  autoPlay: 3000, //Set AutoPlay to 3 seconds
									 
										  items :4,
										  itemsDesktop : [640,5],
										  itemsDesktopSmall : [414,4],
										  navigation : true
									 
										});
										
									}); 
								</script>
								<div id="owl-demo3" class="owl-carousel"> 
									<div class="item">
										<div class="glry-w3agile-grids agileits"> 
											<div class="new-tag"><h6>Sale</h6></div>
											<a href="products3.html"><img src="assets/images/h1.png" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="products3.html">Wall Clock</a></h4>
												<p>Lorem ipsum dolor sit amet consectetur</p>
												<h5>$80</h5>
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" /> 
													<input type="hidden" name="w3ls_item" value="Wall Clock" /> 
													<input type="hidden" name="amount" value="80.00" /> 
													<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
												</form>
											</div>         
										</div>  
									</div>
									<div class="item">
										<div class="glry-w3agile-grids agileits"> 
											<div class="new-tag"><h6>10%<br>Off</h6></div>
											<a href="products3.html"><img src="assets/images/h2.png" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="products3.html">Plants & Vases</a></h4>
												<p>Lorem ipsum dolor sit amet consectetur</p>
												<h5>$40</h5>
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" /> 
													<input type="hidden" name="w3ls_item" value="Plants & Vases" /> 
													<input type="hidden" name="amount" value="40.00" /> 
													<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
												</form>
											</div>         
										</div>
									</div>
									<div class="item">
										<div class="glry-w3agile-grids agileits"> 
											<a href="products3.html"><img src="assets/images/h3.png" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="products3.html">Queen Size Bed</a></h4>
												<p>Lorem ipsum dolor sit amet consectetur</p>
												<h5>$250</h5>
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" /> 
													<input type="hidden" name="w3ls_item" value="Queen Size Bed" /> 
													<input type="hidden" name="amount" value="250.00" /> 
													<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
												</form>
											</div>        
										</div> 
									</div>
									<div class="item">
										<div class="glry-w3agile-grids agileits"> 
											<a href="products3.html"><img src="assets/images/h4.png" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="products3.html">flower pot</a></h4>
												<p>Lorem ipsum dolor sit amet consectetur</p>
												<h5>$30</h5>
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" /> 
													<input type="hidden" name="w3ls_item" value="flower pot" /> 
													<input type="hidden" name="amount" value="30.00" /> 
													<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
												</form>
											</div>        
										</div> 
									</div> 
									<div class="item">
										<div class="glry-w3agile-grids agileits"> 
											<div class="new-tag"><h6>Sale</h6></div>
											<a href="products3.html"><img src="assets/images/h1.png" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="products3.html">Wall Clock</a></h4>
												<p>Lorem ipsum dolor sit amet consectetur</p>
												<h5>$80</h5>
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" /> 
													<input type="hidden" name="w3ls_item" value="Wall Clock" /> 
													<input type="hidden" name="amount" value="80.00" /> 
													<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
												</form>
											</div>         
										</div>  
									</div>
									<div class="item">
										<div class="glry-w3agile-grids agileits"> 
											<div class="new-tag"><h6>10%<br>Off</h6></div>
											<a href="products3.html"><img src="assets/images/h2.png" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="products3.html">Plants & Vases</a></h4>
												<p>Lorem ipsum dolor sit amet consectetur</p>
												<h5>$40</h5>
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" /> 
													<input type="hidden" name="w3ls_item" value="Plants & Vases" /> 
													<input type="hidden" name="amount" value="40.00" /> 
													<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
												</form>
											</div>         
										</div>
									</div>
									<div class="item">
										<div class="glry-w3agile-grids agileits"> 
											<a href="products3.html"><img src="assets/images/h3.png" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="products3.html">Queen Size Bed</a></h4>
												<p>Lorem ipsum dolor sit amet consectetur</p>
												<h5>$250</h5>
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" /> 
													<input type="hidden" name="w3ls_item" value="Queen Size Bed" /> 
													<input type="hidden" name="amount" value="250.00" /> 
													<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
												</form>
											</div>        
										</div> 
									</div>
									<div class="item">
										<div class="glry-w3agile-grids agileits"> 
											<a href="products3.html"><img src="assets/images/h4.png" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="products3.html">flower pot</a></h4>
												<p>Lorem ipsum dolor sit amet consectetur</p>
												<h5>$30</h5>
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" /> 
													<input type="hidden" name="w3ls_item" value="flower pot" /> 
													<input type="hidden" name="amount" value="30.00" /> 
													<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
												</form>
											</div>        
										</div> 
									</div>  
								</div>    
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="sports" aria-labelledby="sports-tab">
							<div class="tabcontent-grids">
								<script>
									$(document).ready(function() { 
										$("#owl-demo4").owlCarousel({
									 
										  autoPlay: 3000, //Set AutoPlay to 3 seconds
									 
										  items :4,
										  itemsDesktop : [640,5],
										  itemsDesktopSmall : [414,4],
										  navigation : true
									 
										}); 
									}); 
								</script>
								<div id="owl-demo4" class="owl-carousel"> 
									<div class="item">
										<div class="glry-w3agile-grids agileits"> 
											<div class="new-tag"><h6>New</h6></div>
											<a href="products4.html"><img src="assets/images/s1.png" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="products4.html">Roller Skates</a></h4>
												<p>Lorem ipsum dolor sit amet consectetur</p>
												<h5>$180</h5>
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" /> 
													<input type="hidden" name="w3ls_item" value="Roller Skates"/> 
													<input type="hidden" name="amount" value="180.00" /> 
													<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
												</form>
											</div>         
										</div>  
									</div>
									<div class="item">
										<div class="glry-w3agile-grids agileits"> 
											<a href="products4.html"><img src="assets/images/s2.png" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="products4.html">Football</a></h4>
												<p>Lorem ipsum dolor sit amet consectetur</p>
												<h5>$70</h5>
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" /> 
													<input type="hidden" name="w3ls_item" value="Football"/> 
													<input type="hidden" name="amount" value="70.00"/>
													<button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
												</form>
											</div>        
										</div> 
									</div>
									<div class="item">
										<div class="glry-w3agile-grids agileits"> 
											<div class="new-tag"><h6>20% <br>Off</h6></div>
											<a href="products4.html"><img src="assets/images/s3.png" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="products4.html">Nylon Shuttle</a></h4>
												<p>Lorem ipsum dolor sit amet consectetur</p>
												<h5>$56</h5>
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" /> 
													<input type="hidden" name="w3ls_item" value="Nylon Shuttle" /> 
													<input type="hidden" name="amount" value="56.00"/> 
													<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
												</form>
											</div>       
										</div> 
									</div>
									<div class="item">
										<div class="glry-w3agile-grids agileits"> 
											<a href="products4.html"><img src="assets/images/s4.png" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="products4.html">Cricket Kit</a></h4>
												<p>Lorem ipsum dolor sit amet consectetur</p>
												<h5>$80</h5>
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" /> 
													<input type="hidden" name="w3ls_item" value="Cricket Kit" /> 
													<input type="hidden" name="amount" value="80.00" /> 
													<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
												</form>
											</div>       
										</div> 
									</div>
									<div class="item">
										<div class="glry-w3agile-grids agileits"> 
											<div class="new-tag"><h6>New</h6></div>
											<a href="products4.html"><img src="assets/images/s1.png" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="products4.html">Roller Skates</a></h4>
												<p>Lorem ipsum dolor sit amet consectetur</p>
												<h5>$180</h5>
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" /> 
													<input type="hidden" name="w3ls_item" value="Roller Skates"/> 
													<input type="hidden" name="amount" value="180.00" /> 
													<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
												</form>
											</div>         
										</div>  
									</div>
									<div class="item">
										<div class="glry-w3agile-grids agileits"> 
											<a href="products4.html"><img src="assets/images/s2.png" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="products4.html">Football</a></h4>
												<p>Lorem ipsum dolor sit amet consectetur</p>
												<h5>$70</h5>
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" /> 
													<input type="hidden" name="w3ls_item" value="Football"/> 
													<input type="hidden" name="amount" value="70.00"/>
													<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
												</form>
											</div>        
										</div> 
									</div>
									<div class="item">
										<div class="glry-w3agile-grids agileits"> 
											<div class="new-tag"><h6>20% <br>Off</h6></div>
											<a href="products4.html"><img src="assets/images/s3.png" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="products4.html">Nylon Shuttle</a></h4>
												<p>Lorem ipsum dolor sit amet consectetur</p>
												<h5>$56</h5>
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" /> 
													<input type="hidden" name="w3ls_item" value="Nylon Shuttle" /> 
													<input type="hidden" name="amount" value="56.00"/> 
													<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
												</form>
											</div>       
										</div> 
									</div>
									<div class="item">
										<div class="glry-w3agile-grids agileits"> 
											<a href="products4.html"><img src="assets/images/s4.png" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="products4.html">Cricket Kit</a></h4>
												<p>Lorem ipsum dolor sit amet consectetur</p>
												<h5>$80</h5>
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" /> 
													<input type="hidden" name="w3ls_item" value="Cricket Kit" /> 
													<input type="hidden" name="amount" value="80.00" /> 
													<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
												</form>
											</div>       
										</div> 
									</div>
								</div>    
							</div>
						</div> 
					</div>   
      </div>
    </div>
  </div>
</div>