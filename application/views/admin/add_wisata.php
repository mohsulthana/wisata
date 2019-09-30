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
      
      <h4>Tambah data Wisata</h4>
      <form class="form" action="<?= base_url('admin/add_wisata') ?>" method="post" enctype= multipart/form-data>
        Nama Wisata: <input class="form-control" type="text" name="nama">
        Jenis: <input class="form-control" type="text" name="jenis">
        Alamat: <input class="form-control" type="text" name="alamat">
        Kabupaten: <input class="form-control" type="text" name="kabupaten">
        Foto: <input type="file" class="form-control-file" name="foto">
        Deskripsi: <textarea class="form-control" name="deskripsi" cols="30" rows="3"></textarea>

        <input type="submit" value="submit" class="btn btn-success">
      </form>
      
    </section>
    <!-- /.content -->
  </div>