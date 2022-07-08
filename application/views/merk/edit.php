<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Edit Merk</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/home/index') ?>">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/merk/index') ?>">Merk</a>
                        </li>
                        <li class="breadcrumb-item active">Edit Form</li>
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
                                <?php echo form_open("Merk/save") ?>
                                <div class="form-group row">
                                    <label for="nama" class="col-4 col-form-label">Nama Merk Mobil</label>
                                    <div class="col-8">
                                        <input id="nama" name="nama" placeholder="Masukkan Nama Merk Mobil" type="text"
                                            value="<?php echo $obj_merk->nama ?> " class="form-control"
                                            spellcheck="false" data-ms-editor="true">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="produk" class="col-4 col-form-label">Nama Produk Mobil</label>
                                    <div class="col-8">
                                        <input id="produk" name="produk" placeholder="Masukkan Nama Produk Mobil"
                                            type="text" value="<?php echo $obj_merk->produk ?> " class="form-control"
                                            spellcheck="false" data-ms-editor="true">
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