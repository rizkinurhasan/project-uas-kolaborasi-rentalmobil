<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Input Perawatan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/perawatan/index') ?>">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/perawatan/index') ?>">Merk</a>
                        </li>
                        <li class="breadcrumb-item active">Form</li>
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
                            <h3 class="card-title">Form</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <?php echo form_open("Perawatan/save") ?>
                                <div class="form-group row">
                                    <label for="tanggal" class="col-4 col-form-label">Tanggal Perawatan</label>
                                    <div class="col-8">
                                        <input id="tanggal" name="tanggal" placeholder="Masukkan Tanggal Perawatan Mobil" type="date"
                                            class="form-control" spellcheck="false" data-ms-editor="true">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="biaya" class="col-4 col-form-label">Biaya Perawatan Mobil</label>
                                    <div class="col-8">
                                        <input id="biaya" name="biaya" placeholder="Masukkan biaya perawatan Mobil"
                                            type="text" class="form-control" spellcheck="false" data-ms-editor="true">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="km_mobil" class="col-4 col-form-label">KM Mobil</label>
                                    <div class="col-8">
                                        <input id="km_mobil" name="km_mobil" placeholder="Masukkan KM Mobil"
                                            type="text" class="form-control" spellcheck="false" data-ms-editor="true">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="produk" class="col-4 col-form-label">Deskripsi Perawatan Mobil</label>
                                    <div class="col-8">
                                        <input id="deskripsi" name="deskripsi" placeholder="Masukkan deskripsi perawatan Mobil"
                                            type="text" class="form-control" spellcheck="false" data-ms-editor="true">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="mobil_id" class="col-4 col-form-label">Mobil Id</label>
                                    <div class="col-8">
                                        <select class="form-control" id="mobil_id" name="mobil_id">
                                            <?php
                                            include "config.php";
                                            $result = mysqli_query($connect, "SELECT * FROM mobil");
                                            while ($row = mysqli_fetch_array($result)) { ?>
                                            <option value="<?php echo $row[0] ?>">
                                                <?php echo $row[0] ?>
                                            </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="jenis_perawatan_id" class="col-4 col-form-label">Jenis Perawatan Id</label>
                                    <div class="col-8">
                                        <select class="form-control" id="jenis_perawatan_id" name="jenis_perawatan_id">
                                            <?php
                                            include "config.php";
                                            $result = mysqli_query($connect, "SELECT * FROM jenis_perawatan");
                                            while ($row = mysqli_fetch_array($result)) { ?>
                                            <option value="<?php echo $row[0] ?>">
                                                <?php echo $row[0] ?>
                                            </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="offset-4 col-8">
                                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                                <?php echo form_close() ?>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                        </div>
                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>