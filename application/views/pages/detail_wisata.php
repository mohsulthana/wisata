      <div class="container">
        <div class="flexslider">
          <ul class="slides">
            <?php foreach($wisata as $value) {?>
            <li data-thumb="<?= FCPATH ?>uploads\<?= $value['foto'];?>">
              <div class="thumb-image detail_images"> <img src="<?= FCPATH ?>uploads\<?= $value['foto'];?>" data-imagezoom="true" class="img-responsive" alt=""></div>
            </li>
            <?php }; ?>
          </ul>
        </div>
        <div class="collpse tabs">
  				<h3 class="w3ls-title"><?= $wisata[0]['nama'];?></h3> 
  				<div class="panel-group collpse" id="accordion" role="tablist" aria-multiselectable="true">
  					<div class="panel panel-default">
  						<div class="panel-heading" role="tab" id="deskripsi">
  							<h4 class="panel-title">
  								<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
  									<i class="fa fa-file-text-o fa-icon" aria-hidden="true"></i> Deskripsi <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
  								</a>
  							</h4>
  						</div>
  						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="deskripsi">
  							<div class="panel-body">
                  <?= $wisata[0]['deskripsi']; ?>
  							</div>
  						</div>
            </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                  <h4 class="panel-title">
                    <a class="collapsed pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      <i class="fa fa-info-circle fa-icon" aria-hidden="true"></i>Lokasi <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
                    </a> 
                  </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
  							<div class="panel-body">
                  <p>Alamat:</p>
                  <?= $wisata[0]['deskripsi']; ?>
                  <br>
                  <p>Kabupaten:</p>
                  <?= $wisata[0]['kabupaten']; ?>
  							</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>