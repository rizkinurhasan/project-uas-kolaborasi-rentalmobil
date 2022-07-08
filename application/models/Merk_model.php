<?php
class Merk_model extends CI_Model
{
    public function getAll()
    {
        $query = $this->db->get('merk');
        return $query->result();
    }

    // menampilkan produk bedasarkan id
    public function getById($id)
    {
        $query = $this->db->get_where('merk', ['id' => $id]);
        return $query->row();
    }

    public function simpan($data)
    {
        $sql = "INSERT INTO merk (nama,produk) VALUES (?,?)";
        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->getById($insert_id);
    }

    public function update($data)
    {
        $sql = "UPDATE merk SET nama=?,produk=? where id=?";
        $this->db->query($sql, $data);
    }

    public function delete($data)
    {
        // hapus data
        $sql = "DELETE FROM merk WHERE id=?";
        $this->db->query($sql, $data);
    }
}