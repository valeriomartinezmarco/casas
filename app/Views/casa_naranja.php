  <?php
include_once('templeate/header.php');
?>

  <main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= End Page Header ======= -->
    <div class="page-header d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>Casa Naranja</h2>
            <p align='justify'>Disfruta de la una quinta casa privada en Chinconcuac, Xochitepec. El costo es para 7 personas y la capacidad máxima es de 10. <br>
            
            <br>  Deseas reservar, lo puedes hacer con $1000 y el resto al estar instalado dentro de la casa.
            </p>

            <a class="cta-btn" href="https://wa.me/+527777929929/?text=tu%20texto%20personalizado">Me interesa, deseo mas información de la <i>Casa Naranja</i> y fechas disponibles.</a>
            
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

              
              <?=
              
              
              
                    $directory = "C:/xampp/htdocs/PhotoFolio/vendor/assets/img/gallery/";
                    $dirint = dir($directory);
                    while (($archivo = $dirint->read()) != false)
                    {
                        if (strpos($archivo,'jpg') || strpos($archivo,'jpeg')){
                             $image = $directory. $archivo;
                            ?>
                              <div class="swiper-slide">
                                <img src="<?= $image;?>" alt="">
                              </div>
                            <?Php
                        }
                    }
                    $dirint->close();
                
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
              <h2>Casa Naranja</h2>
              <p>
                Ubicada en Chinconcuac Xochitepec, casa privada con cámaras de seguridad, cerca elecrificada para su seguridad.
              </p>
              <p> 
                Cuenta con alberca, Jacuzzi, camastros, regadera, baño en area verde,palapa con ventilador, mesa en palapa, iluminación en palapa, area de asador con tarja.
              </p>
              <div class="testimonial-item">
                <p>

                  <i class="bi fa-check"></i>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Casa para 7 personas (Máximo 10 personas)<br>
                  Capacidad para 4 autos<br>
                  Se aceptan mascotas sin costo<br>
                  La casa no tiene capacidad para eventos<br>
                  Hora de entrada desde 9 am  y salida 2 pm (**Se puede ampliar hora salida)<br>
                  Cocina cuenta (Cafetera,Estufa,Refrigerador,Sartens,Platos,Vasos)<br>
                  Incluye un Garrafon nuevo<br>
                  Incluye Un rollo nuevo por cada Baño<br>
                  Incluye Bolsas de Basura<br>
                  No cuenta con Horno de Microondas<br>
                  No incluye Toallas de Baño<br>
                  Cuenta con un cuarto Privado, con Baño.<br>
                  En la parte superior hay dos camas matrimoniales con sofa cama, con baño completo.

                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <div>
                  <img src="assets/img/testimonials/testimonials-2.jpeg" class="testimonial-img" alt="">
                  <h3>Descripción de Casa</h3>
                  <h4>Designer</h4>
                </div>
              </div>

              <div class="testimonial-item">
                <p>

                  <i class="bi fa-check"></i>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Cuenta con alberca, Jacuzzi, camastros, regadera, baño en area verde,palapa con ventilador, mesa en palapa, iluminación en palapa, area de asador con tarja.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <div>
                  <img src="assets/img/testimonials/testimonials-2.jpeg" class="testimonial-img" alt="">
                  <h3>Descripción Area verde.</h3>
                  <h4>Designer</h4>
                </div>
              </div>

              <p>
                La casa se encuentra constantemente en mantenimiento para darte el mejor servicio.
              <p>
                La casa se encuentra en el Chinconcuac, Xochitepec.
              </p>

            </div>
          </div>

          <div class="col-lg-3">
            <div class="portfolio-info">
              <h3>Información de la casa. </h3>
              <ul>
                <li><strong>Categoria</strong> <span>****</span></li>
                <li><strong>Administrador</strong> <span>Marco</span></li>
                <li><strong>Fecha de Fotos</strong> <span>01 March, 2022</span></li>
                <li><strong>Fotos de la casa</strong> <a href="#">www.example.com</a></li>
                <li><a href="gallery_casa_naranja.php" class="btn-visit align-self-start">Fotos de la casa.</a></li>
              </ul>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Single Section -->

  </main><!-- End #main -->

<?php
include_once('templeate/footer.php');
?>
