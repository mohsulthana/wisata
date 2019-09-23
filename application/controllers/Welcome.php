<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{

		$this->load->view('laman');
	}

	public function form_input(){
		$this->load->view('form-input');
	}
	public function form_input_resto(){
		$this->load->view('form-input-restoran');
	}
	public function form_input_wisata(){
		$this->load->view('form-input-wisata');
	}
	public function form_input_seni(){
		$this->load->view('form-input-seni');
	}
	
	public function welcome_msg(){
		$this->data['hasil'] = $this->model_hotel->getUser('hotel');
		$this->load->view('chart');
		$this->load->view('welcome_message',$this->data);
		$this->load->view('laman',$this->data);
		}
	public function restoran(){
		$this->data['hasil'] = $this->model_hotel->getUser('restoran');
		$this->load->view('chart_resto');
		$this->load->view('restoran',$this->data);
		
	}
	public function wisata(){
		$this->data['hasil'] = $this->model_hotel->getUser('wisata');
		$this->load->view('chart_wisata');
		$this->load->view('wisata',$this->data);
		
	}
	public function seni(){
		$this->data['hasil'] = $this->model_hotel->getUser('seni');
		$this->load->view('chart_seni');
		$this->load->view('seni',$this->data);
		
	}

	public function insert()
	{

		$nama = $_POST['nama_hotel'];
		$alamat = $_POST['alamat'];
		$jumlah = $_POST['jumlah_pegawai'];
		$fasilitas = $_POST['fasilitas'];
		$kamar = $_POST['jumlah_kamar'];
		$bintang = $_POST['bintang'];
		$data = array('nama_hotel' => $nama, 'alamat'=> $alamat, 'jumlah_pegawai' => $jumlah, 'fasilitas'=> $fasilitas, 'jumlah_kamar'=> $kamar, 'bintang'=> $bintang );
		print_r($data);
		$tambah = $this->model_hotel->tambahData('hotel',$data);
		if ($tambah > 0){
			redirect('welcome/welcome_msg');

		}
		else {
			echo 'Gagal Disimpan';
		}
	}

	public function insert_resto(){
		$nama = $_POST['nama_resto'];
		$alamat = $_POST['alamat'];
		$pegawai  = $_POST['jumlah_pegawai'];
		$kabupaten = $_POST['kabupaten'];
		
		
		$data = array('nama' => $nama, 'alamat'=> $alamat, 'jumlah_pegawai' => $pegawai,'kabupaten' => $kabupaten);
		print_r($data);
		$tambah = $this->model_hotel->tambahData('restoran',$data);
		if ($tambah > 0){
			redirect('welcome/restoran');
		}
		else {
			echo 'Gagal Disimpan';
		}
	}

	public function insert_wisata(){
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$fasilitas = $_POST['Fasilitas'];
		$jenis = $_POST['jenis'];
		$kabupaten = $_POST['kabupaten'];
		
		
		$data = array('nama' => $nama, 'alamat'=> $alamat, 'fasilitas' => $fasilitas,'jenis'=> $jenis, 'kabupaten' => $kabupaten);
		print_r($data);
		$tambah = $this->model_hotel->tambahData('wisata',$data);
		if ($tambah > 0){
			redirect('welcome/wisata');
		}
		else {
			echo 'Gagal Disimpan';
		}
	}
	public function insert_seni(){
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$pekerja = $_POST['Pekerja'];
		$jenis = $_POST['jenis'];
		
		
		
		$data = array('nama' => $nama, 'alamat'=> $alamat, 'Pekerja' => $pekerja,'jenis'=> $jenis);
		print_r($data);
		$tambah = $this->model_hotel->tambahData('seni',$data);
		if ($tambah > 0){
			redirect('welcome/seni');
		}
		else {
			echo 'Gagal Disimpan';
		}
	}

	public function delete($id){
		$hapus = $this->model_hotel->hapusData('hotel',$id);
		if ($hapus > 0){
			redirect('welcome/welcome_msg');

		}
		else {
			echo 'Gagal Disimpan	';
		}
	}
	public function deleteResto($id){
		$hapus = $this->model_hotel->hapusDataResto('restoran',$id);
		if ($hapus > 0){
			redirect('welcome/restoran');

		}
		else {
			echo 'Gagal Disimpan	';
		}
	}
	public function deleteWisata($id){
		$hapus = $this->model_hotel->hapusDataWisata('wisata',$id);
		if ($hapus > 0){
			redirect('welcome/wisata');

		}
		else {
			echo 'Gagal Disimpan	';
		}
	}
	public function deleteSeni($id){
		$hapus = $this->model_hotel->hapusDataSeni('seni',$id);
		if ($hapus > 0){
			redirect('welcome/seni');

		}
		else {
			echo 'Gagal Disimpan	';
		}
	}

	public function form_edit($no){
		$this->data['dataEdit'] = $this->model_hotel->dataEdit('hotel',$no);
		$this->load->view('form-edit',$this->data);
	}
	public function form_edit_resto($no){
		$this->data['dataEdit'] = $this->model_hotel->dataEditResto('restoran',$no);
		$this->load->view('form-edit-restoran',$this->data);
	}
	public function form_edit_wisata($no){
		$this->data['dataEdit'] = $this->model_hotel->dataEditWisata('wisata',$no);
		$this->load->view('form-edit-wisata',$this->data);
	}
	public function form_edit_seni($no){
		$this->data['dataEdit'] = $this->model_hotel->dataEditSeni('seni',$no);
		$this->load->view('form-edit-seni',$this->data);
	}
	public function update($no){
		$nama = $_POST['nama_hotel'];
		$alamat = $_POST['alamat'];
		$jumlah = $_POST['jumlah_pegawai'];
		$fasilitas = $_POST['Fasilitas'];
		$kamar = $_POST['jumlah_kamar'];
		$bintang = $_POST['bintang'];
		$data = array('no' => $no, 'nama_hotel' => $nama, 'alamat'=> $alamat, 'jumlah_pegawai' => $jumlah, 'Fasilitas'=> $fasilitas, 'jumlah_kamar'=> $kamar, 'bintang'=> $bintang);
		print_r($data);
		$edit = $this->model_hotel->editData('hotel',$data,$no);
		if ($edit > 0){
			redirect('welcome/welcome_msg');

		}
		else {
			echo 'Gagal Disimpan';
		}
	}
	public function update_resto($no){
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$pegawai = $_POST['jumlah_pegawai'];
		$kabupaten = $_POST['kabupaten'];
		$data = array('id' => $no, 'nama' => $nama, 'alamat'=> $alamat, 'jumlah_pegawai' => $pegawai, 'kabupaten' => $kabupaten);
		print_r($data);
		$edit = $this->model_hotel->editDataResto('restoran',$data,$no);
		if ($edit > 0){
			redirect('welcome/restoran');

		}
		else {
			echo 'Gagal Disimpan';
		}
	}
	public function update_wisata($no){
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$fasilitas = $_POST['fasilitas'];
		$jenis = $_POST['jenis'];
		$kabupaten = $_POST['kabupaten'];
		$data = array('id' => $no, 'nama' => $nama, 'alamat'=> $alamat,'fasilitas' => $fasilitas, 'jenis' => $jenis,'kabupaten' => $kabupaten);
		print_r($data);
		$edit = $this->model_hotel->editDataWisata('wisata',$data,$no);
		if ($edit > 0){
			redirect('welcome/wisata');

		}
		else {
			echo 'Gagal Disimpan';
		}
	}
	public function update_seni($no){
	
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$pekerja = $_POST['Pekerja'];
		$jenis = $_POST['jenis'];
		$data = array('id' => $no, 'nama' => $nama, 'alamat'=> $alamat,'Pekerja' => $pekerja, 'jenis' => $jenis,);
		print_r($data);
		$edit = $this->model_hotel->editDataSeni('seni',$data,$no);
		if ($edit > 0){
			redirect('welcome/seni');

		}
		else {
			echo 'Gagal Disimpan';
		}
	}
}
					