<?php
class Jenisperawatan_model extends CI_Model
{
    public function getAll()
    {
        $query = $this->db->get('jenis_perawatan');
        return $query->result();
    }

    // menampilkan produk bedasarkan id
    public function getById($id)
    {
        $query = $this->db->get_where('jenis_perawatan', ['id' => $id]);
        return $query->row();
    }
}