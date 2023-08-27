<?php
include_once('template/header.php');
?>

  <main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= End Page Header ======= -->
    <div class="page-header d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
              <?php
                $count=0;
                $directory = opendir("C:/xampp/htdocs/casas/vendor/assets/img/gallery/".$casas[0]['tagCasa']."/all_photo/");
                $dirint =  readdir($directory);

                while($elemento = readdir($directory))
                {            
                    if($elemento != '.' && $elemento != '..')
                    {
                      $count=$count+1;
                    }
                }
            ?>
            <h2>
              Casa Naranja <br>
              (<?= $count;?> fotografías de la casa.)
            </h2>
            <p>A continuación veras todas las fotos de la casa. Las fotos los actualizamos cada 3 meses.</p>
            <a class="cta-btn" href="contact.html">Deseo saber disponibilidad!!!</a>
          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container-fluid">
        <div class="row gy-4 justify-content-center">
          <?php
          $directory = opendir("C:/xampp/htdocs/casas/vendor/assets/img/gallery/".$casas[0]['tagCasa']."/all_photo/");
          while($elemento = readdir($directory)){;
            if($elemento != '.' && $elemento != '..')
              {?>
              <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                          <img src="<?= base_url().'/vendor/assets/img/gallery/'.$casas[0]['tagCasa'].'/all_photo/'.$elemento;?>" class="img-fluid" alt="">
                          <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="<?= $elemento;?>" title="Gallery 16" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                            <a href="<?= $elemento;?>" class="details-link"><i class="bi bi-link-45deg"></i></a>
                          </div>
                        </div>
                      </div><!-- End Gallery Item -->
              <?php
              }
          }
          ?>
        </div>
      </div>
    </section><!-- End Gallery Section -->

  </main><!-- End #main -->

  <?php
  include_once('template/footer.php');
  ?>
