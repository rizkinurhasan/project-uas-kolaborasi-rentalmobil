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
    <div class="container">
      <div class="row">
        <div class="col">
        <div class="card">
          <div class="card-body">
            <div class="text-center">
              <img src="<?php echo base_url('assets/assets_shop')?>/assets/xpander.jpg" class="rounded" alt="...">
              <h5>Mitsubishi Xpander</h5>
              <form>
                <div class="row">
                  <div class="col">
                  <input class="form-control" type="text" placeholder="5 Penumpang" readonly>
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
            <form>
                <div class="form-group">
                  <label for="tanggal_mulai">Tanggal Mulai Pinjam</label>
                  <input type="date" class="form-control" id="tanggal_mulai" placeholder="Tanggal Mulai" required>
                </div>
                <div class="form-group">
                  <label for="tanggal_akhir">Tanggal Akhir Pinjam</label>
                  <input type="date" class="form-control" id="tanggal_akhir" placeholder="Tanggal Akhir" required>
                </div>
              <div class="form-group">
                <label for="inputAddress2">NO. KTP</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Nomor Kartu Tanda Penduduk (KTP)" required>
              </div>
              <div class="form-group">
                <label for="alasan">Alasan</label>
                <textarea class="form-control" rows="3" id="textarea"></textarea>
              </div>
              
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
                </div>
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