<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Silahkan Update Data Hotel</title>

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
		<?php if($dataEdit){
			$no = $dataEdit->no;
			$nama = $dataEdit->nama_hotel;
			$alamat = $dataEdit->Alamat;
			$Jumlah = $dataEdit->jumlah_pegawai;
			$Fasilitas = $dataEdit->Fasilitas;
			$Kamar = $dataEdit->jumlah_kamar;
			$Bintang = $dataEdit->bintang;
		}	else {
			$nama = "";
			$alamat = "";
			$Jumlah = "";
			$Fasilitas = "";
			$Kamar = "";
			$Bintang="";

		}?>
		<form action="<?php echo site_url('welcome/update/'.$no) ?> " method="post">
			<!--No <br>
			<input type="text" name="NO"/><br>-->
			Nama Hotel<br>
			<input type="text" name="nama_hotel" value="<?php echo $nama ?>" /><br>
			Alamat<br>
			<input type="text" name="alamat" value="<?php echo $alamat ?>"   /><br>
			Jumlah Pegawai<br>
			<input type="text" name="jumlah_pegawai" value="<?php echo $Jumlah ?>" /><br>
			Fasilitas<br>
			<input type="text" name="Fasilitas" value="<?php echo $Fasilitas ?>" /><br>
			Jumlah Kamar<br>
			<input type="text" name="jumlah_kamar" value="<?php echo $Kamar ?>" /><br>
			Bintang<br>
			<select name="bintang" value="bintang">
				<option value="5">Bintang 5 <br>
				<option value="4">Bintang 4<br>
				<option value="3">Bintang 3<br>
				<option value="2">Bintang 2<br>
				<option value="1">Bintang 1<br>

			<input type="Submit" name="Simpan" value="simpan"/>

		</form>
		<td>Fasilitas yang tersedia: <br> 1. Elevator (lift) <br> 2. Central AC system <br> 3. Air Conditioner
			<br>4. Balcony <br> 5. Idd Phone <br> 6.  Parking Lot <br> 7. Room Service <br> 8. Laundry <br> 9. Dancing/Night Club or Music <br> 10. Confrence Room/Meeting Room </td>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>