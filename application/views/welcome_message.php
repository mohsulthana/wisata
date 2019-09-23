 <?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Silahkan Update Data Hotel</title>

	<style type="text/css">

	::selection { background-color: blue; color: blue; }
	::-moz-selection { background-color: blue; color: blue; }

	body {
		background-color: #FFFAF0;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: #fff;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: #fff;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #fff;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Silahkan Update Data</h1>

	<div id="body">
		<a href="<?php echo site_url('laman.php')?>">Kembali</a>
		<a href="<?php echo site_url('welcome/form_input')?>">Tambah Data Hotel</a>
		<a href="<?php echo site_url('welcome/restoran')?>">Restoran</a>
		<a href="<?php echo site_url('welcome/wisata')?>">Wisata</a>
		<a href="<?php echo site_url('welcome/seni')?>">Sanggar Seni</a>
		<table border="1">
		
		<table border="1">

			<tr>
				<td>No</td>
				<td>Nama Hotel</td>
				<td>Alamat</td>
				<td>Jumlah Pegawai</td>
				<td>Fasilitas</td>
				<td>Jumlah Kamar</td>
				<td>bintang</td>
				<td>Action</td>
			</tr>
			<?php 
			$no = 0;
			foreach($hasil as $r) { ?> 
			<tr>
				<td><?php echo ++$no ?></td>
				<td><?php echo $r['nama_hotel'] ?></td>
				<td><?php echo $r['Alamat'] ?></td>
				<td><?php echo $r['jumlah_pegawai'] ?></td>
				<td><?php echo $r['Fasilitas'] ?></td>
				<td><?php echo $r['jumlah_kamar'] ?></td>
				<td><?php echo $r['bintang'] ?></td>
				<td><?php echo $r['Action'] ?>

					<a href="<?php echo site_url('welcome/form_edit/'.$r['no'])?>">Edit</a>
					||
					<a href="<?php echo site_url('welcome/delete/'.$r['no'])?>"onclick = "return confirm('Yakin ingin hapus data? ')">Hapus</a>
				</td>
			</tr>
		<?php } ?>
			

		</table>
		<td>Fasilitas yang tersedia: <br> 1. Elevator (lift) <br> 2. Central AC system <br> 3. Air Conditioner
			<br>4. Balcony <br> 5. Idd Phone <br> 6.  Parking Lot <br> 7. Room Service <br> 8. Laundry <br> 9. Dancing/Night Club or Music <br> 10. Confrence Room/Meeting Room </td>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html> 