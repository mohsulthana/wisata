<?php

class Authentication extends MY_Controller {
  public function __construct()
  {
    parent::__construct();
    if (!empty($this->session->userdata()['status']) && $this->session->userdata()['status'] == 'logged in') {
      redirect('Admin');
    }
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
  
  public function do_signup()
  {
    $username   = $this->post('username');
    $password   = $this->post('password');
    $name       = $this->post('name');

    $db = $this->db->get_where('user', [
      'username'    => $username
    ])->result_array();

    if (count($db) > 1) {
      $this->flashmsg('Akun sudah ada. Pilih username lain.', 'danger');
      redirect('Authentication/signup');
    } else {
      $account = [
        'username'    => $username,
        'password'    => $password,
        'name'        => $name
      ];
      $this->db->insert('user', $account);
      $this->flashmsg('Akun berhasil dibuat. Silahkan login.');
      redirect('Authentication/login');
    }
  }

  public function do_login()
  {
    $username   = $this->post('username');
    $password   = $this->post('password');

    $db = $this->db->get_where('user', [
      'username'    => $username
    ])->result_array();

    if (count($db) == 0) {
      $this->flashmsg('Akun tidak ada. Silahkan hubungi kontak person di bawah.', 'danger');
      redirect('Authentication/login');
    } else {

      // auth password
      if ($password != $db[0]['password']) {
        $this->flashmsg('Password salah. Ulangi kembali', 'danger');
        redirect('Authentication/login');
      } else {
        $data = [
          'id'          => $db[0]['id'],
          'username'    => $db[0]['username'],
          'status'      => 'logged in'
        ];
        $this->session->set_userdata($data);
        redirect('Admin');
      }
    }
  }
}