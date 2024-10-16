<?php 

class beranda extends CI_Controller 
{ 
public  function index() 
  { 
    if(empty($this->session->userdata('email') )){
      redirect('login');

    }
    $data['judul']= 'Halaman Beranda'; 
    $this->load->view('templates/header',$data);  // Memuat view beranda.php
    $this->load->view('beranda/index',$data);  // Memuat view beranda.php
    $this->load->view('templates/footer');  // Memuat view beranda.php

    
  }
}
?>