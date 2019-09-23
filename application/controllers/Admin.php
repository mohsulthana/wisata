<?php

class Admin extends MY_Controller {
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->data['title']      = 'Dashboard';
    $this->data['content']    = 'admin/dashboard';
    $this->admin_template($this->data);
  }
}