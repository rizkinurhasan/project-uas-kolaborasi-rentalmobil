<?php
class Login_model extends CI_Model{
    //cek nip dan password dosen
    function auth_admin($username,$password){
        $query=$this->db->query("SELECT * FROM users WHERE username='$username' AND password=MD5('$password') LIMIT 1");
        return $query;
    }
 
    //cek nim dan password mahasiswa
    function auth_public($username,$password){
        $query=$this->db->query("SELECT * FROM users WHERE username='$username' AND password=MD5('$password') LIMIT 1");
        return $query;
    }
 
}