<?php
class Mobil extends CI_Controller
{

    public function index()
    {
        // load model
        $this->load->model('Mobil_model');
        $mobil = $this->Mobil_model->getAll();
        $data['mobil'] = $mobil;
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('mobil/index', $data);
        $this->load->view('layouts/footer');
    }
    public function detail($id)
    {
        // akses model
        $this->load->model('Mobil_model');
        $mobild = $this->Mobil_model->getById($id);
        $data['mobild'] = $mobild;
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('mobil/detail', $data);
        $this->load->view('layouts/footer');
    }
    public function form()
    {
        // render view
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('mobil/form');
        $this->load->view('layouts/footer');
    }
    public function save()
    {
        $this->load->model('Mobil_model', 'mobil'); // 1
        $_nopol = $this->input->post('nopol');
        $_warna = $this->input->post('warna');
        $_biaya_sewa = $this->input->post('biaya_sewa');
        $_deskripsi = $this->input->post('deskripsi');
        $_cc = $this->input->post('cc');
        $_tahun = $this->input->post('tahun');
        $_merk_id = $this->input->post('merk_id');
        $_foto = $this->input->post('foto');

        $data_mobil['tanggal'] = $_nopol;
        $data_mobil['jumlah'] = $_warna;
        $data_mobil['biaya_sewa'] = $_biaya_sewa;
        $data_mobil['deskripsi'] = $_deskripsi;
        $data_mobil['cc'] = $_cc;
        $data_mobil['tahun'] = $_tahun;
        $data_mobil['merk_id'] = $_merk_id;
        $data_mobil['foto'] = $_foto;


        if ((!empty($_idedit))) { //update
            $data_mobil['id'] = $_idedit;
            $this->mobil->update($data_mobil);
        } else {
            //  data baru
            $this->mobil->simpan($data_mobil);
        }
        redirect('mobil', 'refresh');
    }
    public function edit($id)
    {
        // akses model 
        $this->load->model('Mobil_model', 'mobil');
        $obj_mobil = $this->mobil->getById($id);
        $data['obj_mobil'] = $obj_mobil;
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('mobil/edit', $data);
        $this->load->view('layouts/footer');
    }
    public function delete($id)
    {
        $this->load->model('Mobil_model', 'mobil');
        // Mengecek data berdasarkan id
        $data_mobil['id'] = $id;
        $this->mobil->delete($data_mobil);
        redirect('mobil', 'refresh');
    }
}