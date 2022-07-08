<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
            $url=base_url('index.php/login');
            redirect($url);
        }
  }
 
  function index(){
    $this->load->view('dashboard');
  }
 
  function halaman_admin(){
    // function ini hanya boleh diakses oleh admin dan dosen
    if($this->session->userdata('akses')=='administrator' || $this->session->userdata('akses')=='2'){
      $this->load->view('admin');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
 
  }
 
  function halaman_public(){
    // function ini hanya boleh diakses oleh admin dan dosen
    if($this->session->userdata('akses')=='administrator' || $this->session->userdata('akses')=='2'){
      $this->load->view('public');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
 
  function krs(){
    // function ini hanya boleh diakses oleh admin dan mahasiswa
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='3'){
      $this->load->view('v_krs');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
  function lhs(){
    // function ini hanya boleh diakses oleh admin dan mahasiswa
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='3'){
      $this->load->view('v_lhs');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
}