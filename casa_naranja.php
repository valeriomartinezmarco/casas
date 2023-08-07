<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Casa Naranja</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: PhotoFolio
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center  me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <i class="bi bi-camera"></i>
        <h1>Casa Naranja</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html">Inicio</a></li>
          <li><a href="about.html">Nosotros</a></li>
          <li class="dropdown"><a href="#"><span>Casa Naranja</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="gallery.html" class="active">Nature</a></li>
              <li><a href="gallery.html">People</a></li>
              <li><a href="gallery.html">Architecture</a></li>
              <li><a href="gallery.html">Animals</a></li>
              <li><a href="gallery.html">Sports</a></li>
              <li><a href="gallery.html">Travel</a></li>
              <li class="dropdown"><a href="#"><span>Sub Menu</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Sub Menu 1</a></li>
                  <li><a href="#">Sub Menu 2</a></li>
                  <li><a href="#">Sub Menu 3</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="services.html">Servicios</a></li>
          <li><a href="contact.html">Contacto</a></li>
        </ul>
      </nav><!-- .navbar -->

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

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

            <a class="cta-btn" href="contact.html">Me interesa, deseo mas información de la casa y fechas disponibles.</a>

          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

    <!-- ======= Gallery Single Section ======= -->
    <section id="gallery-single" class="gallery-single">
      <div class="container">
<?php
      $thefolder = "assets/img/gallery/casa_naranja/";
if ($handler = opendir($thefolder)) {
    while (false !== ($file = readdir($handler))) {
      if( $handler != "." && $handler != ".."){
        echo "$file<br>";
      }else{
        
      }
    }
    closedir($handler);
}
?>

        <div class="position-relative h-100">
          <div class="slides-1 portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide">
                <img src="assets/img/gallery/casa_naranja/naranja1.jpg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/gallery/casa_naranja/naranja2.jpg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/gallery/casa_naranja/naranja3.jpg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/gallery/casa_naranja/naranja4.jpg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/gallery/casa_naranja/naranja5.jpg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/gallery/casa_naranja/naranja6.jpg" alt="">
              </div>

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
                  Incluye Bolsas de Basura
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
                <li><a href="#" class="btn-visit align-self-start">Visita la Pagina</a></li>
              </ul>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Single Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>PhotoFolio</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader">
    <div class="line"></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>