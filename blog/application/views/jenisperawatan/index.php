<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jenis Perawatan</title>
    <script>
    function hapusJenisperawatan(pesan) {
        if (confirm(pesan)) {
            return true;
        } else {
            return false;
        }
    }
    </script>
</head>

<body>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Jenis Perawatan</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a
                                    href="<?php echo base_url('index.php/home/index') ?>">Home</a></li>
                            <li class="breadcrumb-item active">Jenis Perawatan</a></li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- Default box -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">List Jenis Perawatan</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <table border="2" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $nomor = 1;
                                        foreach ($jenis_perawatan as $jp) {
                                        ?>
                                        <tr>
                                            <td> <?= $nomor ?> </td>
                                            <td> <?= $jp->nama ?></td>
                                            <td>
                                                <a href=<?php echo base_url("index.php/pesanan/edit/$jp->id") ?>
                                                    class="btn btn-dark">Edit</a>
                                                &nbsp;
                                                <a href=<?php echo base_url("index.php/pesanan/delete/$jp->id") ?>
                                                    class="btn btn-danger"
                                                    onclick=" return hapusJenisperawatan('Apakah Anda yakin ingin menghapus Jenis Perawatan <?php echo $jp->nama ?> ?')">Hapus</a>

                                            </td>
                                        </tr>
                                        <?php
                                            $nomor++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <a href=<?php echo base_url("index.php/jenisperawatan/form") ?>
                                    class="btn btn-primary active">Tambah</a>
                                <!-- /.card-footer-->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</body>

</html>