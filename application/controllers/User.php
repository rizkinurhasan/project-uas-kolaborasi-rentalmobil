<?php
class User extends CI_Controller
{

    public function index()
    {
        // load model
        $this->load->model('User_model');
        $user = $this->User_model->getAll();
        $data['users'] = $user;
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('user/index', $data);
        $this->load->view('layouts/footer');
    }

    public function detail($id)
    {
        // akses model
        $this->load->model('User_model');
        $usersd = $this->User_model->getById($id);
        $data['usersd'] = $usersd;
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('user/detail', $data);
        $this->load->view('layouts/footer');
    }

    public function form()
    {
        // render view
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('user/form');
        $this->load->view('layouts/footer');
    }
    public function save()
    {
        $this->load->model('User_model', 'user'); // 1
        $_username = $this->input->post('username');
        $_password = md5($this->input->post('password'));
        $_email = $this->input->post('email');
        $_role = $this->input->post('role');
        

        $data_user['username'] = $_username;
        $data_user['password'] = $_password;
        $data_user['email'] = $_email;
        $data_user['role'] = $_role;
     


        if ((!empty($_idedit))) { //update
            $data_user['id'] = $_idedit;
            $this->user->update($data_user);
        } else {
            //  data baru
            $this->user->simpan($data_user);
        }
        redirect('user', 'refresh');
    }

    public function edit($id)
    {
        // akses model 
        $this->load->model('User_model', 'user');
        $obj_user = $this->user->getById($id);
        $data['obj_user'] = $obj_user;
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('user/edit', $data);
        $this->load->view('layouts/footer');
    }
    
    public function delete($id)
    {
        $this->load->model('User_model', 'user');
        // Mengecek data berdasarkan id
        $data_user['id'] = $id;
        $this->user->delete($data_user);
        redirect('user', 'refresh');
    }
}