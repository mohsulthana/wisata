<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Silahkan Update Data Objek Wisata</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #F0F8FF;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #00008B;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: blue;
		background-image: url('Ampera.jpg');: transparent;
		border-bottom: 2px solid blue;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 20px 0 20px;
	}

	p.footer {
		text-align: right;
		font-size: 10px;
		border-top: 2px solid blue;
		line-height: 20px;
		padding: 0 5px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid red;
		box-shadow: 0 0 30px red;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Form Edit Data</h1>

	<div id="body">
		<a href="<?php echo site_url('welcome/restoran')?>">Kembali</a>
		<?php if($dataEdit){
			$id = $dataEdit->id;
			$nama = $dataEdit->nama;
			$alamat = $dataEdit->alamat;
			$fasilitas = $dataEdit->fasilitas;
			$jenis = $dataEdit->jenis;
			$kabupaten = $dataEdit->kabupaten;
		}	else {
			$nama = "";
			$alamat = "";
			$fasilitas = "";
			$jenis = "";
			$kabupaten = "";
		}?>
		<form action="<?php echo site_url('welcome/update_wisata/').$id ?> " method="post">
			<!--No <br>
			<input type="text" name="NO"/><br>-->
			Nama Objek Wisata<br>
			<input type="text" name="nama" value="<?php echo $nama ?>" /><br>
			Alamat<br>
			<input type="text" name="alamat" value="<?php echo $alamat ?>"   /><br>
			Fasilitas<br>
			<input type="text" name="fasilitas" value="<?php echo $fasilitas ?>" /><br>
			Jenis<br>
			<input type="text" name="jenis" value="<?php echo $jenis ?>" /><br>
			Kabupaten<br>
			<select name="kabupaten" value="kabupaten">
				<option value="palembang">Palembang <br>
				<option value="oganilir">OganIlir <br>
				<option value="ogankomeringulu">OKU <br>
				<option value="ogankomeringselatan">OKI <br>
				<option value="muaraenim">muaraenim <br>
				<option value="lahat">Lahat <br>
				<option value="musirawas">Musirawas <br>
				<option value="musibanyuasin">Musibanyuasin <br>
				<option value="banyuasin">Banyuasin <br>
				<option value="ogankomeringulutimur">OKU timur <br>
				<option value="ogankomeringuluselatan">OKU selatan <br>
				<option value="empatlawang">Empat Lawang <br>
				<option value="penukalabablematangilir">Lematang Ilir <br>
				<option value="musirawasutara">Musirawas utara <br>
				<option value="pagaralam">PagarAlam <br>
				<option value="lubuklinggau">Lubuk Linggau <br>
				<option value="prabumulih">Prabumulih <br>	
				</select><br>
			<input type="Submit" name="Simpan" value="simpan"/>

		</form>
		
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>