  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- <section class="content-header">
      <h1>
        <?= $title; ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Acara</li>
      </ol>
    </section> -->

    <!-- Main content -->
    <section class="content">
      
      <h4>Edit data Wisata</h4>
      <img src="<?= base_url('uploads/'.$wisata->id) ?>.jpg" height="100" width="100" alt="IMG">
      <form class="form" action="<?= base_url('admin/edit_wisata/'.$wisata->id) ?>" method="post" enctype= multipart/form-data>
        Nama Wisata: <input class="form-control" type="text" name="nama" value="<?= $wisata->nama ?>">
        Jenis: <input class="form-control" type="text" name="jenis" value="<?= $wisata->jenis ?>">
        Alamat: <input class="form-control" type="text" name="alamat" value="<?= $wisata->alamat ?>">
        Kabupaten: <input class="form-control" type="text" name="kabupaten" value="<?= $wisata->kabupaten ?>">
        Foto: <input type="file" class="form-control-file" name="foto">
        Deskripsi: <textarea class="form-control" name="deskripsi" cols="30" rows="3"><?= $wisata->deskripsi ?></textarea>
        
        <input type="submit" value="submit" class="btn btn-success">
      </form>
      
    </section>
    <!-- /.content -->
  </div>