<?php

class Wisata extends MY_Controller {
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->data['title']      = 'Menu wisata';
    $this->data['content']    = 'admin/wisata';
    $this->admin_template($this->data);
  }

  public function detail_wisata($id)
  {
    $this->data['wisata']   = $this->db->get_where('wisata', ['id' => $id])->result_array();
    $this->data['title']    = $this->data['wisata'][0]['nama'];
    $this->data['content']  = 'pages/detail_wisata';

    $this->template($this->data);
  }
}