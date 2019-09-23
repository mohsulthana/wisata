<?php

class Authentication extends MY_Controller {
  public function __construct()
  {
    parent::__construct();
  }

  public function login()
  {
    $data['title']      = 'Login';
    $this->load->view('auth/login', $data);
  }

  public function signup()
  {
    $data['title']      = 'Signup';
    $this->load->view('auth/signup', $data);
  }
}