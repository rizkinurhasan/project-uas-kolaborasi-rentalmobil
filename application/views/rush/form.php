<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Penyewaan Mobil</title>
  </head>
  <body>
    <!-- cek apakah sudah login -->
    <?php include "config.php"?>
    <div class="container">
      <div class="row">
        <div class="col">
        <div class="card">
          <div class="card-body">
            <div class="text-center">
              <img src="<?php echo base_url('assets/assets_shop')?>/assets/toyota_rush.jpg" class="rounded" alt="...">
              <h5>Toyota Rush</h5>
              <form action="action-input-data.php" method="POST" name="form-input-data">
                <div class="row">
                  <div class="col">
                  <input class="form-control" type="text" placeholder="6 Penumpang" readonly>
                  </div>
                  <div class="col">
                  <input class="form-control" type="text" placeholder="2 Bagasi" readonly>
                  </div>
                </div>
              </form>
            </div>
        </div>
            </div>
          </div>
        <div class="col">
          <div class="card-body">
          <div class="card-body">
                            <div class="container">
                                <?php echo form_open("Rush/save") ?>
                                <div class="form-group row">
                                    <label for="tanggal_mulai" class="col-4 col-form-label">Tanggal Awal Sewa</label>
                                    <div class="col-8">
                                        <input id="tanggal_mulai" name="tanggal_mulai" type="date" class="form-control"
                                            spellcheck="false" data-ms-editor="true">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tanggal_akhir" class="col-4 col-form-label">Tanggal Akhir Sewa</label>
                                    <div class="col-8">
                                        <input id="tanggal_akhir" name="tanggal_akhir" type="date" class="form-control"
                                            spellcheck="false" data-ms-editor="true">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tujuan" class="col-4 col-form-label">Tujuan</label>
                                    <div class="col-8">
                                        <input id="tujuan" name="tujuan" placeholder="Masukkan Tujuan"
                                            type="text" class="form-control" spellcheck="false" data-ms-editor="true">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="noktp" class="col-4 col-form-label">No. KTP</label>
                                    <div class="col-8">
                                        <input id="noktp" name="noktp" placeholder="Masukkan No KTP"
                                            type="text" class="form-control" spellcheck="false" data-ms-editor="true">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-8">
                                        <input class="form-control" id="users_id" name="users_id" value="
                                        <?php
                                            include "konfig.php";
                                            $result = mysqli_query($connect, "SELECT * FROM users");
                                            $row = mysqli_fetch_array($result);
                                            echo $row['id']?>" hidden>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-8">
                                    <input class="form-control" id="mobil_id" name="mobil_id" value="1" hidden>
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
  </div>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>