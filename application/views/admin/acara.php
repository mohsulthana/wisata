  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Daftar Acara
        <small>wisata kebudayaan di Sumatera Selatan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">acara</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-xs-12">
        <a class="btn btn-success text-lg" href="<?= base_url('admin/add_acara') ?>">+Tambah acara</a>
          <div class="box">          
            <div class="box-header">
              <h3 class="box-title">Tabel Acara</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Acara</th>
                  <th>Tanggal</th>
                  <th>Lokasi</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php $i=1; foreach($acara as $d) : ?>
                  <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $d->nama_acara ?></td>
                    <td><?= $d->tanggal ?></td>
                    <td><?= $d->lokasi_acara ?></td>
                    <td><a href="<?= base_url('admin/edit_acara/'.$d->id_acara) ?>">Edit</a>|<a class="text-danger" href="<?= base_url('admin/delete_acara/'.$d->id_acara) ?>">Delete</a></td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
    </section>
    <!-- /.content -->
  </div>