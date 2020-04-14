<div class="container" style="margin-top: 3rem;">
  <div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Daftar acara</div>
    <div class="panel-body">
      <!-- Table -->
      <table class="table">
        <thead>
          <tr>
            <td>No</td>
            <td>Nama Acara</td>
            <td>Alamat</td>
            <td>Tanggal</td>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1;foreach($acara as $key => $value) {?>
          <tr>
            <td><?= $no++; ?></td>
            <td><a href="<?= base_url('Acara/detail_acara/' . $value['id_acara']);?>"><?= $value['nama_acara'];?></a></td>
            <td><?= $value['lokasi_acara'];?></td>
            <td><?= $value['tanggal'];?></td>
          </tr>
          <?php }; ?>
        </tbody>
      </table>
    </div>
</div>