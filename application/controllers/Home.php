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
    $this->template($data);
  }
}