<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Input Mobil</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/home/index') ?>">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/mobil/index') ?>">Mobil</a>
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
                                <?php echo form_open("Mobil/save") ?>
                                <div class="form-group row">
                                    <label for="nopol" class="col-4 col-form-label">Nopol</label>
                                    <div class="col-8">
                                        <input id="nopol" name="nopol" value="<?php echo $obj_mobil->nopol ?>" placeholder="Masukkan Nopol" type="text"
                                            class="form-control" spellcheck="false" data-ms-editor="true">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="warna" class="col-4 col-form-label">Warna</label>
                                    <div class="col-8">
                                        <input id="warna" name="warna" placeholder="Masukkan Warna Mobil" type="text"
                                            class="form-control" value="<?php echo $obj_mobil->warna ?>" spellcheck="false" data-ms-editor="true">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="biaya_sewa" class="col-4 col-form-label">Biaya Sewa</label>
                                    <div class="col-8">
                                        <input id="biaya_sewa" name="biaya_sewa" placeholder="Masukkan Biaya Sewa Mobil"
                                            type="number" class="form-control" value="<?php echo $obj_mobil->biaya_sewa ?>" spellcheck="false" data-ms-editor="true">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
                                    <div class="col-8">
                                        <input id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi Mobil"
                                            type="text" class="form-control" value="<?php echo $obj_mobil->deskripsi ?>" spellcheck="false" data-ms-editor="true">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="cc" class="col-4 col-form-label">CC</label>
                                    <div class="col-8">
                                        <input id="cc" name="cc" placeholder="Masukkan CC Mobil" type="number"
                                            class="form-control" value="<?php echo $obj_mobil->cc ?>" spellcheck="false" data-ms-editor="true">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tahun" class="col-4 col-form-label">Tahun</label>
                                    <div class="col-8">
                                        <input id="tahun" name="tahun" placeholder="Masukkan Tahun Mobil" type="number"
                                            class="form-control" value="<?php echo $obj_mobil->tahun ?>" spellcheck="false" data-ms-editor="true">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="merk_id" class="col-4 col-form-label">Merk Id</label>
                                    <div class="col-8">
                                        <select class="form-control" id="merk_id" name="merk_id">
                                            <?php
                                            include "config.php";
                                            $result = mysqli_query($connect, "SELECT * FROM merk");
                                            while ($row = mysqli_fetch_array($result)) { ?>
                                            <option value="<?php echo $row[0] ?>">
                                                <?php echo $row[0] ?>
                                            </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="foto" class="col-4 col-form-label">Foto</label>
                                    <div class="input-group mb-3 col-8">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                        <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="foto" value="<?php echo $obj_mobil->foto ?>">
                                        <label class="custom-file-label" for="foto">Choose file</label>
                                    </div>
                                    </div>
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