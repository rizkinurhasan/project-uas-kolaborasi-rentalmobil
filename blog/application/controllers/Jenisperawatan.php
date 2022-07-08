<?php
class Jenisperawatan extends CI_Controller
{

    public function index()
    {
        // load model
        $this->load->model('Jenisperawatan_model');
        $jenis_perawatan = $this->Jenisperawatan_model->getAll();
        $data['jenis_perawatan'] = $jenis_perawatan;
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('jenisperawatan/index', $data);
        $this->load->view('layouts/footer');
    }
    public function form()
    {
        // render view
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('jenisperawatan/form');
        $this->load->view('layouts/footer');
    }
    public function save()
    {
        $this->load->model('Jenisperawatan_model', 'jenis_perawatan'); // 1
        $_nama = $this->input->post('nama');

        $data_jenisperawatan['nama'] = $_nama;
        if ((!empty($_idedit))) { //update
            $data_jenisperawatan['id'] = $_idedit;
            $this->jenis_perawatan->update($data_jenisperawatan);
        } else {
            //  data baru
            $this->jenis_perawatan->simpan($data_jenisperawatan);
        }
        redirect('jenis_perawatan', 'refresh');
    }
    public function edit($id)
    {
        $this->load->model('Jenisperawatan_model', 'jenis_perawatan');
        $obj_jp = $this->jenis_perawatan->getById($id);
        $data['obj_jp'] = $obj_jp;
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('jenisperawatan/edit', $data);
        $this->load->view('layouts/footer');
    }
    public function delete($id)
    {
        $this->load->model('Jenisperawatan_model', 'jenis_perawatan');
        $data_jenisperawatan['id'] = $id;
        $this->jenis_perawatan->delete($data_jenisperawatan);
        redirect('jenisperawatan', 'refresh');
    }
}