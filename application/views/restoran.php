 <?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Silahkan Update Data Resto</title>

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
		<a href="<?php echo site_url('SmartBazar/index.php/')?>">Kembali</a>
		<a href="<?php echo site_url('welcome/welcome_msg')?>">Hotel</a>
		<a href="<?php echo site_url('welcome/form_input_resto')?>"> Tambah Data Restoran</a>
		<a href="<?php echo site_url('welcome/wisata')?>">Wisata</a>
		<a href="<?php echo site_url('welcome/seni')?>">Seni</a>
		<table border="1">
		
		<table border="1">

			<tr>
				<td>No</td>
				<td>Nama Restoran</td>
				<td>Alamat</td>
				<td>Jumlah Pegawai</td>
				<td>Kabupaten</td>
				<td>Action</td>
			</tr>
			<?php 
			$no = 0;
			foreach($hasil as $r) { ?> 
			<tr>
				<td><?php echo ++$no ?></td>
				<td><?php echo $r['nama'] ?></td>
				<td><?php echo $r['alamat'] ?></td>
				<td><?php echo $r['jumlah_pegawai'] ?></td>
				<td><?php echo $r['kabupaten'] ?></td>
				<td><?php echo $r['Action'] ?>

					<a href="<?php echo site_url('welcome/form_edit_resto/'.$r['id'])?>">Edit</a>
					||
					<a href="<?php echo site_url('welcome/deleteResto/'.$r['id'])?>"onclick = "return confirm('Yakin ingin hapus data? ')">Hapus</a>
				</td>
			</tr>
		<?php } ?>
			

		</table>
		
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>