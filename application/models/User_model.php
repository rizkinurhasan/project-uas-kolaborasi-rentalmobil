<?php
class User_model extends CI_Model
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

    public function simpan($data)
    {
        $sql = "INSERT INTO users (username,password,email,role) VALUES (?,?,?,?)";
        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->getById($insert_id);
    }

    public function update($data)
    {
        $sql = "UPDATE users SET username=?,password=?,email=?,role=? where id=?";
        $this->db->query($sql, $data);
    }

    public function delete($data)
    {
        // hapus data
        $sql = "DELETE FROM users WHERE id=?";
        $this->db->query($sql, $data);
    }
}
