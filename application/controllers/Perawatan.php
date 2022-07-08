<?php
class Perawatan extends CI_Controller
{

    public function index()
    {
        // load model
        $this->load->model('Perawatan_model');
        $perawatan = $this->Perawatan_model->getAll();
        $data['perawatan'] = $perawatan;
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('perawatan/index', $data);
        $this->load->view('layouts/footer');
    }
    public function detail($id)
    {
        // akses model
        $this->load->model('Perawatan_model');
        $perawatand = $this->Perawatan_model->getById($id);
        $data['perawatand'] = $perawatand;
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('perawatan/detail', $data);
        $this->load->view('layouts/footer');
    }
    public function form()
    {
        // render view
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('perawatan/form');
        $this->load->view('layouts/footer');
    }
    public function save()
    {
        $this->load->model('Perawatan_model', 'perawatan'); // 1
        $_tanggal = $this->input->post('tanggal');
        $_biaya = $this->input->post('biaya');
        $_km_mobil = $this->input->post('km_mobil');
        $_deskripsi = $this->input->post('deskripsi');
        $_mobil_id = $this->input->post('mobil_id');
        $_jenis_perwatan_id = $this->input->post('jenis_perawatan_id');

        $data_perawatan['tanggal'] = $_tanggal;
        $data_perawatan['biaya'] = $_biaya;
        $data_perawatan['km_mobil'] = $_km_mobil;
        $data_perawatan['deskripsi'] = $_deskripsi;
        $data_perawatan['mobil_id'] = $_mobil_id;
        $data_perawatan['tahun'] = $_jenis_perwatan_id;


        if ((!empty($_idedit))) { //update
            $data_perawatan['id'] = $_idedit;
            $this->perawatan->update($data_perawatan);
        } else {
            //  data baru
            $this->perawatan->simpan($data_perawatan);
        }
        redirect('perawatan', 'refresh');
    }
    public function edit($id)
    {
        // akses model 
        $this->load->model('Perawatan_model', 'perawatan');
        $obj_perawatan = $this->perawatan->getById($id);
        $data['obj_perawatan'] = $obj_perawatan;
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('perawatan/edit', $data);
        $this->load->view('layouts/footer');
    }
    public function delete($id)
    {
        $this->load->model('Perawatan_model', 'perawatan');
        // Mengecek data berdasarkan id
        $data_perawatan['id'] = $id;
        $this->perawatan->delete($data_perawatan);
        redirect('perawatan', 'refresh');
    }
}