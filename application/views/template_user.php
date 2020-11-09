<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>E-Psyc</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?=base_url()?>assets1/img/eps.png" rel="icon">
  <link href="<?=base_url()?>assets1/img/eps.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="<?=base_url()?>assets1/https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?=base_url()?>assets1/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?=base_url()?>assets1/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets1/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets1/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets1/lib/owlcarousel/assets1/owl.carousel.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets1/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?=base_url()?>assets1/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: NewBiz
    Theme URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left" style="">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
        <a href="#intro" class="scrollto"><img style="height: 100%;width: 50%;" src="<?=base_url()?>assets1/img/a1.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#intro">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#portfolio">Counseling</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#contact">Contact Us</a></li>
          <li><a href="<?= base_url()?>index.php/Login_pelanggan/logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container">
  <?php
    $this->load->view($konten); 
     ?>
 </div>
</section>
  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div style="margin-left: 200px;" class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h3>E-Psyc</h3>
            <p>E-Psyc merupakan aplikasi berbasis website yang bertujuan untuk memudahkan customer dalam menemukan psikiater atau psikolog.</p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="#intro">Home</a></li>
              <li><a href="#about">About us</a></li>
              <li><a href="#portfolio">Counseling</a></li>
             
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Jalan Danau Ranau<br>
              Malang, INA +62<br>
              Indonesia <br>
              <strong>Phone:</strong> +62 345 6789 01<br>
              <strong>Email:</strong> epsyc@gmail.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

         
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>NewBiz</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=NewBiz
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="<?=base_url()?>assets1/lib/jquery/jquery.min.js"></script>
  <script src="<?=base_url()?>assets1/lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?=base_url()?>assets1/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url()?>assets1/lib/easing/easing.min.js"></script>
  <script src="<?=base_url()?>assets1/lib/mobile-nav/mobile-nav.js"></script>
  <script src="<?=base_url()?>assets1/lib/wow/wow.min.js"></script>
  <script src="<?=base_url()?>assets1/lib/waypoints/waypoints.min.js"></script>
  <script src="<?=base_url()?>assets1/lib/counterup/counterup.min.js"></script>
  <script src="<?=base_url()?>assets1/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?=base_url()?>assets1/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="<?=base_url()?>assets1/lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="<?=base_url()?>assets1/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?=base_url()?>assets1/js/main.js"></script>

</body>
</html>
