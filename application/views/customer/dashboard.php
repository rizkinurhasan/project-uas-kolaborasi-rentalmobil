

    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Rental Mobil</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <form class="form-inline">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <a class="btn btn-danger" href="<?php echo base_url('index.php/auth/logout')?>">LOGOUT</a>
                </div>
            </form>
            </div>
            
         
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">SEWA MOBIL HARGA MURAH</h1>
                    <p class="lead fw-normal text-white-50 mb-0">SEWA SEKARANG JUGA!</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                
                <?php 
                                include "config.php";
                ?>                    
                                <?php foreach( $merk as $mrk ) : ?>
                <div class="col mb-5">
                                
                                <div class="card h-100">
                                <img src="<?php
                                        if($mrk['nama'] == 'Toyota'){
                                            echo base_url('assets/assets_shop/assets/toyota_rush.jpg');
                                        } else if($mrk['nama'] == 'Mitsubishi'){
                                            echo base_url('assets/assets_shop/assets/xpander.jpg');;
                                        } else if($mrk['nama'] == 'Suzuki'){
                                            echo base_url('assets/assets_shop/assets/ertiga.jpg');;
                                        } else if($mrk['nama'] == 'Honda'){
                                            echo base_url('assets/assets_shop/assets/mobilio.jpg');;
                                        }
                                    ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?= $mrk['nama'] ?> <?= $mrk['produk']?></h5>
                                    <!-- Product price-->
                                    <?php
                                        if($mrk['nama'] == 'Toyota'){
                                            echo ("Rp 600.000/Hari");
                                        } else if($mrk['nama'] == 'Mitsubishi'){
                                            echo ("Rp 700.000/Hari");
                                        } else if($mrk['nama'] == 'Suzuki'){
                                            echo ("Rp 500.000/Hari");
                                        } else if($mrk['nama'] == 'Honda'){
                                            echo ("Rp 400.000/Hari");
                                        }
                                    ?>
                                    <br><br>
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="
                                        <?php
                                        if($mrk['nama'] == 'Toyota'){
                                            echo base_url('index.php/rush/form');
                                        } else if($mrk['nama'] == 'Mitsubishi'){
                                            echo base_url('index.php/xpander/form');
                                        } else if($mrk['nama'] == 'Suzuki'){
                                            echo base_url('index.php/ertiga/form');
                                        } else if($mrk['nama'] == 'Honda'){
                                            echo base_url('index.php/mobilio/form');
                                        }
                                    ?>">Sewa</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                
                    </div>
                    <?php endforeach; ?>
                            
                    
                </div>
            </div>
        </section>
        <!-- Footer-->
