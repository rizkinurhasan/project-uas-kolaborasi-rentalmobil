<?php
class Sewa extends CI_Controller
{

    public function index()
    {
        // load model
        $this->load->model('Sewa_model');
        $sewa = $this->Sewa_model->getAll();
        $data['sewa'] = $sewa;
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('sewa/index', $data);
        $this->load->view('layouts/footer');
    }
    public function detail($id)
    {
        // akses model
        $this->load->model('Sewa_model');
        $sewad = $this->Sewa_model->getById($id);
        $data['sewad'] = $sewad;
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('sewa/detail', $data);
        $this->load->view('layouts/footer');
    }
    public function form()
    {
        // render view
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('sewa/form');
        $this->load->view('layouts/footer');
    }
    public function save()
    {
        $this->load->model('Sewa_model', 'sewa'); // 1
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
            $this->sewa->update($data_sewa);
        } else {
            //  data baru
            $this->sewa->simpan($data_sewa);
        }
        redirect('sewa', 'refresh');
    }
    public function edit($id)
    {
        // akses model 
        $this->load->model('Sewa_model', 'sewa');
        $obj_sewa = $this->sewa->getById($id);
        $data['obj_sewa'] = $obj_sewa;
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('sewa/edit', $data);
        $this->load->view('layouts/footer');
    }
    public function delete($id)
    {
        $this->load->model('Sewa_model', 'sewa');
        // Mengecek data berdasarkan id
        $data_sewa['id'] = $id;
        $this->sewa->delete($data_sewa);
        redirect('sewa', 'refresh');
    }
}