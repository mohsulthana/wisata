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
}