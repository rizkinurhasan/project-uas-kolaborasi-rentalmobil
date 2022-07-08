<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'dbrentalmobil1';

$conn = mysqli_connect($server, $username, $password, $database) or die("Gagal");

$query = mysqli_query($conn, 'SELECT * FROM merk');
                           
                
    $merk = array(); 

    while ($data = mysqli_fetch_array($query)) {
    $merk[] = $data; //result dijadikan array 

    }
   
    
$datamobil = mysqli_query($conn, 'SELECT * FROM mobil');   
$mobil = mysqli_fetch_array($datamobil);

$datapengguna = mysqli_query($conn, 'SELECT * FROM users');   
$user = mysqli_fetch_array($datapengguna);
?>