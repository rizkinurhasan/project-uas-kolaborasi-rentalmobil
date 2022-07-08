<?php
class Mobil_model extends CI_Model
{
    public function getAll()
    {
        $query = $this->db->get('mobil');
        return $query->result();
    }

    // menampilkan produk bedasarkan id
    public function getById($id)
    {
        $query = $this->db->get_where('mobil', ['id' => $id]);
        return $query->row();
    }

    public function simpan($data)
    {
        $sql = "INSERT INTO merk (nopol,warna,biaya_sewa,deskripsi,cc,tahun,merk_id,foto) VALUES (?,?,?,?,?,?,?,?)";
        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->getById($insert_id);
    }

    public function update($data)
    {
        $sql = "UPDATE mobil SET nopol=?,warna=?,biaya_sewa=?,deskripsi=?,cc=?,tahun=?,merk_id=?,foto=? where id=?";
        $this->db->query($sql, $data);
    }

    public function delete($data)
    {
        // hapus data
        $sql = "DELETE FROM mobil WHERE id=?";
        $this->db->query($sql, $data);
    }
}