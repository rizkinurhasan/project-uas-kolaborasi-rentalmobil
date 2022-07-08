<?php
class Login extends CI_Controller{
    public function index(){
        $this->load->view('layouts/header');
        $this->load->view('login/index');
        $this->load->view('layouts/footer');
    }
    // public function auth(){
    //     // mengambil data yang telah di input di form login
    //     $username = $this->input->post('username');
    //     $password = $this->input->post('password');

    //     // cek user login apakah sudah benar, jika benar arahkan ke halaman suplier, jika salah kembali ke login
    //     if ($username == 'admin' && $password =='admin') {
    //         $userdata = [
    //             "username" => $username,
    //             "logged_in" => TRUE,

    //         ];
    //         $this->session->set_userdata($userdata);
    //         redirect('/produk');
    //         redirect('/suplier');
    //         redirect('/pesanan');
    //         redirect('/pembelian');
    //     } elseif ($username == 'pembeli' && $password =='pembeli') {
    //         $userdata = [
    //             "username" => $username,

    //         ];
    //         $this->session->set_userdata($userdata);
    //         redirect('/pesanan');
    //     } 
    //     else {
    //         redirect('/login');
    //     }
    // }
    // public function logout(){
    //     $this->session->sess_destroy();
    //     redirect('/login');
    // }
}