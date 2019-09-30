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
      
      <h4>Edit data Acara</h4>
      <form class="form" action="<?= base_url('admin/edit_acara/'.$acara->id_acara) ?>" method="post">
        Nama Acara: <input class="form-control" type="text" name="nama_acara" value="<?= $acara->nama_acara ?>">
        Tanggal: <input class="form-control" type="date" name="tanggal" value="<?= $acara->tanggal ?>">
        Lokasi Acara: <input class="form-control" type="text" name="lokasi_acara" value="<?= $acara->lokasi_acara ?>">        
        
        <input type="submit" value="submit" class="btn btn-success">
      </form>
      
    </section>
    <!-- /.content -->
  </div>