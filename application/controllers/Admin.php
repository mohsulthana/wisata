<?php

class Admin extends MY_Controller {
  public function __construct()
  {
    parent::__construct();
    if ($this->session->userdata()['status'] != "logged in") {
      $this->flashmsg('Anda harus login untuk masuk ke halaman admin.', 'danger');
      redirect('Authentication/login');
    }
  }

  public function index()
  {
    $this->data['title']      = 'Dashboard';
    $this->data['content']    = 'admin/dashboard';
    $this->admin_template($this->data);
  }

  public function logout()
  {
    $this->session->unset_userdata('status');
    redirect('/');
  }

  public function wisata()
  {
    $this->data['wisata'] = $this->db->get('wisata')->result();
    
    $this->data['title']      = 'Wisata';
    $this->data['content']    = 'admin/wisata';
    $this->admin_template($this->data);
  }

  public function edit_wisata($id)
  {    
    if($_POST) {
      $data = [];
      $field = ['nama', 'jenis', 'deskripsi', 'alamat', 'kabupaten'];
      foreach ($field as $key => $value) {
        $data[$value] = $this->input->post($value);
      }
      $this->db->where('id',$id);
      $this->db->update('wisata', $data);
      echo "<script type='text/javascript'>alert('Sukses Edit Data');</script>";
      redirect('admin/wisata','refresh');
      exit;
    }
    $this->data['wisata'] = $this->db->where('id', $id)->get('wisata')->row();
    $this->data['title']      = 'Edit wisata';
    $this->data['content']    = 'admin/edit_wisata';
    $this->admin_template($this->data);
  }

  public function add_wisata()
  {
    if($_POST) {
      $data = [];
      $field = ['nama', 'jenis', 'deskripsi', 'alamat', 'kabupaten'];
      foreach ($field as $key => $value) {
        $data[$value] = $this->input->post($value);
      }

      $this->db->insert('wisata', $data);
      $id = $this->db->insert_id();

      if(isset($_FILES)) {
        $this->do_upload($id);
        $this->db->set('foto', $_FILES['foto']['name'])->where('id', $id)->update('wisata');
      } 
      echo "<script type='text/javascript'>alert('Sukses Tambah Data');</script>";      
      redirect('admin/wisata','refresh');
      exit;
    }
    $this->data['title']      = 'Add wisata';
    $this->data['content']    = 'admin/add_wisata';
    $this->admin_template($this->data);
  }

  public function delete_wisata($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('wisata');
    echo "<script type='text/javascript'>alert('Sukses Delete Data');</script>";
    redirect('admin/wisata','refresh');
  }

  public function acara()
  {
    $this->data['acara'] = $this->db->get('acara')->result();
    
    $this->data['title']      = 'Acara';
    $this->data['content']    = 'admin/acara';
    $this->admin_template($this->data);
  }

  public function edit_acara($id)
  {    
    if($_POST) {
      $data = [];
      $field = ['nama_acara', 'tanggal', 'lokasi_acara'];
      foreach ($field as $key => $value) {
        $data[$value] = $this->input->post($value);
      }
      $this->db->where('id_acara',$id);
      $this->db->update('acara', $data);
      if(!empty($_FILES)) {
        @unlink('/uploads/'.$id);
        $this->do_upload($id);
      }
      echo "<script type='text/javascript'>alert('Sukses Edit Data');</script>";
      redirect('admin/acara','refresh');
      exit;
    }
    $this->data['acara'] = $this->db->where('id_acara', $id)->get('acara')->row();
    $this->data['title']      = 'Edit acara';
    $this->data['content']    = 'admin/edit_acara';
    $this->admin_template($this->data);
  }

  public function add_acara()
  {
    if($_POST) {
      $data = [];
      $field = ['nama_acara', 'tanggal', 'lokasi_acara'];
      foreach ($field as $key => $value) {
        $data[$value] = $this->input->post($value);
      }

      $this->db->insert('acara', $data);
      echo "<script type='text/javascript'>alert('Sukses Tambah Data');</script>";      
      redirect('admin/acara','refresh');
      exit;
    }
    $this->data['title']      = 'Add acara';
    $this->data['content']    = 'admin/add_acara';
    $this->admin_template($this->data);
  }

  public function delete_acara($id)
  {
    $this->db->where('id_acara', $id);
    $this->db->delete('acara');
    echo "<script type='text/javascript'>alert('Sukses Delete Data');</script>";
    redirect('admin/acara','refresh');
  }

  public function do_upload($name)
  {
    $config['upload_path']          = './uploads/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['max_size']             = 0;
    $config['file_name']            = $name;

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload('foto'))
    {
      $error = array('error' => $this->upload->display_errors());
      echo $error; exit;
    }
  }
}