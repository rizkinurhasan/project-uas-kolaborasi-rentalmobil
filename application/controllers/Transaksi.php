<?php

class Transaksi extends CI_Controller{

  public function index()
  {
    $this->load->view('transaksi');
    
  }

  public function form()
    {
        // render view
        $this->load->view('transaksi/form');
    }
    public function save()
    {
        $this->load->model('Sewa_model', 'transaksi'); // 1
        $_tanggal_mulai = $this->input->post('tanggal_mulai');
        $_tanggal_akhir = $this->input->post('tanggal_akhir');
        $_tujuan = $this->input->post('tujuan');
        $_noktp = $this->input->post('noktp');
        $_users_id = $this->input->post('users_id');
        $_mobil_id = $this->input->post('mobil_id');

        $data_sewa['tanggal_mulai'] = $_tanggal_mulai;
        $data_sewa['tanggal_akhir'] = $_tanggal_akhir;
        $data_sewa['tujuan'] = $_tujuan;
        $data_sewa['noktp'] = $_noktp;
        $data_sewa['users_id'] = $_users_id;
        $data_sewa['mobil_id'] = $_mobil_id;


        if ((!empty($_idedit))) { //update
            $data_sewa['id'] = $_idedit;
            $this->transaksi->update($data_sewa);
            echo "<script>alert('Data Sewa berhasil diinput');</script>";
        } else {
            //  data baru
            $this->transaksi->simpan($data_sewa);
            echo "<script>alert('Data Sewa berhasil diinput');</script>";
        }
        redirect('dashboard', 'refresh');
    }

  
}
?>