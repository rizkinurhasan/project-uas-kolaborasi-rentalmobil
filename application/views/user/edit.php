<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Edit Sewa</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/user/index') ?>">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/user/index') ?>">Sewa</a>
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
                            <h3 class="card-title">Form Edit</h3>

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
                                <?php echo form_open("User/save") ?>
                                <div class="form-group row">
                                    <label for="username" class="col-4 col-form-label">Username</label>
                                    <div class="col-8">
                                        <input id="username" name="username"
                                            value="<?php echo $obj_user->username ?>" type="text"
                                            class="form-control" spellcheck="false" data-ms-editor="true">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-4 col-form-label">Password</label>
                                    <div class="col-8">
                                        <input id="password" name="tanggal_akhir"
                                            value="<?php echo $obj_user->password ?> " type="text"
                                            class="form-control" spellcheck="false" data-ms-editor="true">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-4 col-form-label">Email</label>
                                    <div class="col-8">
                                        <input id="email" name="email" placeholder="Masukkan Email" type="text"
                                            value="<?php echo $obj_user->email ?> " class="form-control"
                                            spellcheck="false" data-ms-editor="true">
                                    </div>
                               
                                </div>
                                <div class="form-group row">
                                    <label for="role" class="col-4 col-form-label">Role</label>
                                    <div class="col-8">
                                        <input id="role" name="role" placeholder="Masukkan Role (administrator/publik)" type="text"
                                            value="<?php echo $obj_user->role ?> " class="form-control"
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