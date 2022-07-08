<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobil</title>
</head>


<body>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Mobil</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a
                                    href="<?php echo base_url('index.php/home/index') ?>">Home</a></li>
                            <li class="breadcrumb-item"><a
                                    href="<?php echo base_url('index.php/mobil/index') ?>">Mobil</a></li>
                            <li class="breadcrumb-item active">Detail Mobil</a></li>
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
                                <h3 class="card-title">Detail Mobil</h3>

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
                                            <th>Nopol</th>
                                            <th>Warna</th>
                                            <th>Biaya Sewa</th>
                                            <th>Deskripsi</th>
                                            <th>CC</th>
                                            <th>Tahun</th>
                                            <th>Merk Id</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> <?= $mobild->id ?> </td>
                                            <td> <?= $mobild->nopol ?></td>
                                            <td> <?= $mobild->warna ?></td>
                                            <td> <?= $mobild->biaya_sewa ?></td>
                                            <td> <?= $mobild->deskripsi ?></td>
                                            <td> <?= $mobild->cc ?></td>
                                            <td> <?= $mobild->tahun ?></td>
                                            <td> <?= $mobild->merk_id ?></td>
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