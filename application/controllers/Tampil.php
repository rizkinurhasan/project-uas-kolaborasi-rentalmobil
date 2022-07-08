<?php
class Kendaraan{
    var $koneksi;
    var $base_url;
    var $table='merk';
 
    function __construct($koneksi, $base_url){
        $this->koneksi=$koneksi;
        $this->base_url=$base_url;
    }
    
    function getAllData(){
        $no = 0;
        $data = mysqli_query($this->koneksi,"select * from $this->table where id='id' order by id");
        while($d = mysqli_fetch_array($data)){
            $result[$no]=$d;
            $no++;
        }
        return $result;
    }
}
?>