<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sewa</title>
    <script>
    function hapusSewa(pesan) {
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
                        <h1>Sewa</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a
                                    href="<?php echo base_url('index.php/home/index') ?>">Home</a></li>
                            <li class="breadcrumb-item active">Sewa</a></li>
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
                                <h3 class="card-title">List Sewa</h3>

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
                                            <th>Tanggal Mulai</th>
                                            <th>Tanggal AKhir</th>
                                            <th>Tujuan</th>
                                            <th>No KTP</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $nomor = 1;
                                        foreach ($sewa as $sw) {
                                        ?>
                                        <tr>
                                            <td> <?= $nomor ?> </td>
                                            <td> <?= $sw->tanggal_mulai ?></td>
                                            <td> <?= $sw->tanggal_akhir ?></td>
                                            <td> <?= $sw->tujuan ?></td>
                                            <td> <?= $sw->noktp ?></td>
                                            <td>
                                                <a href=<?php echo base_url("index.php/sewa/detail/$sw->id") ?>
                                                    class="btn btn-warning">Detail</a>
                                                &nbsp;
                                                <a href=<?php echo base_url("index.php/sewa/edit/$sw->id") ?>
                                                    class="btn btn-dark">Edit</a>
                                                &nbsp;
                                                <a href=<?php echo base_url("index.php/sewa/delete/$sw->id") ?>
                                                    class="btn btn-danger"
                                                    onclick=" return hapusSewa('Apakah Anda yakin ingin menghapus sewa dengan No KTP <?php echo $sw->noktp ?> ?')">Hapus</a>

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
                                <a href=<?php echo base_url("index.php/sewa/form") ?>
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