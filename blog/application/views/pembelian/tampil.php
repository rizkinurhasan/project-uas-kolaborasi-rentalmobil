<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
</head>
<body>
<div class="col-md-12">
 <h4 style="text-align: center;">
 Daftar Dosen
 </h4>
 <table border="1" class="table">
 <thead>
 <tr>
 <th>No</th><th>NIDN</th><th>Nama</th><th>Gender</th>
<th>Tempat Lahir</th><th>Tanggal Lahir</th><th>Pendidikan</th>
 </tr>
 </thead>
 <tbody>
 <?php
 $nomor=1;
 foreach($dosen as $dosens){
 ?>
 <tr>
 <td> <?= $nomor ?> </td>
 <td> <?= $dosens -> nidn ?></td>
 <td> <?= $dosens -> nama ?></td>
 <td> <?= $dosens -> gender ?></td>
 <td> <?= $dosens -> tmp_lahir ?></td>
 <td> <?= $dosens -> tgl_lahir ?></td>
 <td><?=$dosens->pendidikan?></td>
 </tr>
 <?php
 $nomor++;
 }
 ?>
 </tbody>
 </table>
</div>
</body>
</html>