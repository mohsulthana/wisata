<div class="container">
  <div class="single-page" style="margin-top: 5rem;">
    <div class="single-page-row" id="detail-21">
      <div class="col-md-12 single-top-right">
        <h3 class="item_name"><?= $acara[0]['nama_acara'];?></h3>
        <p>Lokasi acara: <?= $acara[0]['lokasi_acara'];?></p>
        <div class="single-rating">
          <ul>
            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
            <li class="rating">20 orang akan hadir</li>
            <li><a href="#">Tanggal <?= $acara[0]['tanggal'];?></a></li>
          </ul> 
        </div>
        <button class="w3ls-cart w3ls-cart-like"><i class="fa fa-heart-o" aria-hidden="true"></i> Saya akan hadir</button>
      </div>
        <div class="clearfix"> </div>  
    </div>
    <div class="single-page-icons social-icons"> 
      <ul>
        <li><h4>Bagikan acara ini</h4></li>
        <li><a href="#" class="fa fa-facebook icon facebook"> </a></li>
        <li><a href="#" class="fa fa-twitter icon twitter"> </a></li>
        <li><a href="#" class="fa fa-google-plus icon googleplus"> </a></li>
        <li><a href="#" class="fa fa-dribbble icon dribbble"> </a></li>
        <li><a href="#" class="fa fa-rss icon rss"> </a></li> 
      </ul>
    </div>
    <div class="recommend">
      <h3 class="w3ls-title">Daftar tempat wisata</h3> 
      <script>
        $(document).ready(function() { 
          $("#owl-demo5").owlCarousel({
          
            autoPlay: 3000, //Set AutoPlay to 3 seconds
          
            items :4,
            itemsDesktop : [640,5],
            itemsDesktopSmall : [414,4],
            navigation : true
          
          });
          
        }); 
      </script>
      <div id="owl-demo5" class="owl-carousel">
        <?php foreach($wisata as $key => $value) {?>
          <div class="item">
            <div class="glry-w3agile-grids agileits">
              <div class="new-tag"><h6><?= $value['jenis'];?></h6></div>
              <a href="<?= base_url('Wisata/detail_wisata/' . $value['id']);?>"><img src="<?= $value['foto'] ?  'uploads/' . $value['foto'] :  'assets/image/masjidagung.jpg' ?>" alt="img"></a>
              <div class="view-caption agileits-w3layouts">
                <h4><a href="<?= base_url('Wisata/detail_wisata/' . $value['id']);?>"><?= $value['nama']; ?></a></h4>
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
</div>