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
}