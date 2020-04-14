<?php

class Home extends MY_Controller {
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data['title'] = 'HOME | Dinas Kebudayaan & Pariwisata Kota Palembang';
    $data['content'] = 'home';
    $data['wisata']     = $this->db->get('wisata')->result_array();
    $data['acara']      = $this->db->limit(5)->get('acara')->result_array();

    $this->template($data);
  }

  public function detail_acara()
  {
    $data['title']        = 'Daftar acara | Dinas Kebudayaan & Pariwisata Kota Palembang';
    $data['content']      = 'pages/daftar_acara';
    $data['acara']        = $this->db->get('acara')->result_array();

    $this->template($data);
  }
}