<?php

class Acara extends MY_Controller {
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->data['title']      = 'Menu acara';
    $this->data['content']    = 'admin/acara';
    $this->admin_template($this->data);
  }
}