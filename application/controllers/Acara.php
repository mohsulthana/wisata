<?php

class Acara extends MY_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->data['title']      = 'Acara';
  }

  public function index()
  {
    $this->data['content']    = 'admin/acara';
    $this->admin_template($this->data);
  }

  public function detail_acara($id)
  {
    $this->data['acara']   = $this->db->get_where('acara', ['id_acara' => $id])->result_array();
    $this->data['wisata']   = $this->db->get('wisata')->result_array();
    $this->data['title']    = $this->data['acara'][0]['nama_acara'];
    $this->data['content']  = 'pages/detail_acara';

    $this->template($this->data);
  }
}