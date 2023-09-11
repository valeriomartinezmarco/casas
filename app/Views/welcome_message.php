<?php
include_once('template/header.php');
//print_r($casas);
//exit();
?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade" data-aos-delay="1500">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>Casas de Fin de Semana , Cuernavaca Morelos.</h2>
          <p>Ven a descasar y disfrutar del clima de la alberca!! </p>
          <a href="contact.html" class="btn-get-started">Quieres más información?</a>
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container-fluid">
        <div class="row gy-4 justify-content-center">
          <?php
          foreach ($casas as $key) {
            //echo $key['idCasa'];
            ?>
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="gallery-item h-100">    
              <img src="<?= base_url()."vendor/assets/img/gallery/".$key['tagCasa'].'.jpeg'; ?>" class="img-fluid" alt="">
                <div class="gallery-links d-flex align-items-center justify-content-center">
                  <a href="<?= base_url()?>vendor/assets/img/gallery/gallery-1.jpg" title="Gallery 1" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                  <a href="propiedad/<?=$key['id'];?>" class="details-link">7-9 personas<i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Gallery Item -->
          <?php }?>
        </div>
      </div>
    </section><!-- End Gallery Section -->

  </main><!-- End #main -->

  <?php
  include_once('template/footer.php');
  ?>