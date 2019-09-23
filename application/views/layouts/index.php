<?php
$this->load->view('/layouts/header', ['title' => $title]);
$this->load->view('/layouts/navbar');
$this->load->view('/' . $content);
$this->load->view('/layouts/footer');