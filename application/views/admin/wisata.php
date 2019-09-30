  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Daftar wisata
        <small>wisata kebudayaan di Sumatera Selatan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">wisata</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-xs-12">
        <a class="btn btn-success text-lg" href="<?= base_url('admin/add_wisata') ?>">+Tambah Wisata</a>
          <div class="box">          
            <div class="box-header">
              <h3 class="box-title">Tabel wisata</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama wisata</th>
                  <th>Jenis</th>
                  <th>Alamat</th>
                  <th>Kabupaten</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php $i=1; foreach($wisata as $d) : ?>
                  <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $d->nama ?></td>
                    <td><?= $d->jenis ?></td>
                    <td><?= $d->alamat ?></td>
                    <td><?= $d->kabupaten ?></td>
                    <td><a href="<?= base_url('admin/edit_wisata/'.$d->id) ?>">Edit</a>|<a class="text-danger" href="<?= base_url('admin/delete_wisata/'.$d->id) ?>">Delete</a></td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>