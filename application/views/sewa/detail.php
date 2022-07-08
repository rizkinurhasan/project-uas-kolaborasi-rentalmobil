<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sewa</title>
</head>


<body>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Detail Sewa</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a
                                    href="<?php echo base_url('index.php/home/index') ?>">Home</a></li>
                            <li class="breadcrumb-item"><a
                                    href="<?php echo base_url('index.php/sewa/index') ?>">Sewa</a></li>
                            <li class="breadcrumb-item active">Detail Sewa</a></li>
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
                                <h3 class="card-title">Detail Sewa</h3>

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
                                <table border="1" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal Mulai</th>
                                            <th>Tanggal AKhir</th>
                                            <th>Tujuan</th>
                                            <th>No KTP</th>
                                            <th>Users Id</th>
                                            <th>Mobil Id</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> <?= $sewad->id ?> </td>
                                            <td> <?= $sewad->tanggal_mulai ?></td>
                                            <td> <?= $sewad->tanggal_akhir ?></td>
                                            <td> <?= $sewad->tujuan ?></td>
                                            <td> <?= $sewad->noktp ?></td>
                                            <td> <?= $sewad->users_id ?></td>
                                            <td> <?= $sewad->mobil_id ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
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