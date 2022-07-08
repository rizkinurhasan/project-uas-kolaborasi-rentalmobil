<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'dbrentalmobil1';

$connect = mysqli_connect($server, $username, $password, $database) or die("Gagal");

$query = mysqli_query($connect, 'SELECT * FROM users');                              
