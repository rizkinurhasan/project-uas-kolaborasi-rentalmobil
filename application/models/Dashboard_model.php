<?php
class Dashboard_model extends CI_Model
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
}