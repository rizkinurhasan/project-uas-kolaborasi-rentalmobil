<?php
class Users_model extends CI_Model
{
    public function getAll()
    {
        $query = $this->db->get('users');
        return $query->result();
    }

    // menampilkan produk bedasarkan id
    public function getById($id)
    {
        $query = $this->db->get_where('users', ['id' => $id]);
        return $query->row();
    }
}