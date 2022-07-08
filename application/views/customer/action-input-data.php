<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'dbrentalmobil1';

$conn = mysqli_connect($server, $username, $password, $database) or die("Gagal");

  $tanggal_awal  = $_POST['tanggal_awal'];
  $tanggal_akhir  = $_POST['tanggal_akhir'];
  $tujuan  = $_POST['tujuan'];
  $noktp  = $_POST['noktp'];
  $user_id  = $_POST['user_id'];
  $mobil_id  = $_POST['mobil_id'];
  $mysqli  = "INSERT INTO sewa (tanggal_awal, tanggal_akhir, tujuan, noktp, 'user_id', 'mobil_id') VALUES ('$tanggal_awal', '$tanggal_akhir', '$tujuan', '$noktp', $user_id', '$mobil_id')";
  $result  = mysqli_query($conn, $mysqli);
  if ($result) {
    echo "Input berhasil";
  } else {
    echo "Input gagal";
  }
  mysqli_close($conn);
?>