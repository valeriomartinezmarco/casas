<?php
include_once('template/header.php');
?>
<style>
body {
  font-family: var(--font-default);
  color: var(--color-default);
  background-color: #0c2331;
}
.gallery-single .portfolio-description .testimonial-item {
  padding: 30px 30px 0 30px;
  position: relative;
  background: #353c44;
  height: 100%;
  margin-bottom: 50px;
}
  :root {
  --color-default: #fafafa;
  --color-primary: #4d4f59;
  --color-secondary: #161718;
}

.header {
  transition: all 0.5s;
  z-index: 997;
  padding: 30px 0;
  background-color: #0c2331;
}
</style>

  <main id="main" data-aos="fade" data-aos-delay="1500">

       <!-- ======= End Page Header ======= -->
       <div class="page-header d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2><?= $casas[0]['tituloCasa'];?></h2>
            <?= $casas[0]['introCasa'];?>
            
            <a class="cta-btn" href="https://wa.me/+52<?= $_SESSION['asesor'];?>/?text=tu%20texto%20personalizado">   <?= $casas[0]['botonCasaCel'];?>            </a>
            
          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

    <!-- ======= Gallery Single Section ======= -->
    <section id="gallery-single" class="gallery-single">
      <div class="container">

        <div class="position-relative h-100">
          <div class="slides-1 portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
                <?php
                $archivo="C:/xampp/htdocs/casas/vendor/assets/img/gallery/".$casas[0]['tagCasa'];
                
                $listar = null;
                $directorio = opendir($archivo);
                while($elemento = readdir($directorio))
                {
                
                    if($elemento != '.' && $elemento != '..' && $elemento != 'all_photo')
                    {?>
                      <div class="swiper-slide">
                      <img src="../vendor/assets/img/gallery/<?= $casas[0]['tagCasa'].'/'.$elemento; ?>" alt="" width="100%" height="100%">
                    </div>

                      <?php
                    }
                }
                ?>
              </div>
            <div class="swiper-pagination"></div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>

        </div>

        <div class="row justify-content-between gy-4 mt-4">

<div class="col-lg-8">
  <div class="portfolio-description">
    <h2>  <?= $casas[0]['tituloCasa'];?>   </h2>
    <p>
    <?= $casas[0]['tituloDescCasa'];?>   
    </p>
    <div class="testimonial-item">
      <p>

        <i class="bi fa-check"></i>
        <i class="bi bi-quote quote-icon-left"></i>
        <?= $casas[0]['descCasa'];?>   
        
        

        <i class="bi bi-quote quote-icon-right"></i>
      </p>
      <div>
        <img src="vendor/assets/img/testimonials/testimonials-2.jpeg" class="testimonial-img" alt="">
        <h3>Descripción de Casa</h3>
        <h4>Designer</h4>
      </div>
    </div>

    <div class="testimonial-item">
      <p>

        <i class="bi fa-check"></i>
        <i class="bi bi-quote quote-icon-left"></i>
        <?= $casas[0]['descJardin'];?>
        <i class="bi bi-quote quote-icon-right"></i>
      </p>
      <div>
        <img src="vendor/assets/img/testimonials/testimonials-2.jpeg" class="testimonial-img" alt="">
        <h3>Descripción Area verde.</h3>
        <h4>Designer</h4>
      </div>
    </div>
    <?= $casas[0]['footerCasa'];?>
  </div>
</div>

<div class="col-lg-3">
  <div class="portfolio-info">
    <h3>Información de la casa. </h3>
    <ul>
      <li><strong>Categoria</strong> <span><?= $casas[0]['categoriaCasa'];?></span></li>
      <li><strong>Administrador</strong> <span><?= $casas[0]['adminCasa'];?></span></li>
      <li><strong>Fecha de Fotos</strong> <span><?= $casas[0]['fotosfechaCasa'];?></span></li>
      <li><strong>Fotos de la casa</strong> <a href="#">www.example.com</a></li>
      <li><a href="../galeria/<?= $casas[0]['id'];?>" class="btn-visit align-self-start">Fotos de la casa.</a></li>
    </ul>
  </div>
</div>

</div>

</div>
</section><!-- End Gallery Single Section -->

  </main><!-- End #main -->

<?php
include_once('template/footer.php');
?>
