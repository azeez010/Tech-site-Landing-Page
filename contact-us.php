<!doctype html>
<html lang="en">
   
<!-- Mirrored from iqonic.design/themes/vizion/computer-vizion/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 May 2021 18:42:58 GMT -->
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Smart Routing Security</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="images/icon.png">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- Magnific Popup CSS-->
      <link rel="stylesheet" href="css/magnific-popup.css">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="css/responsive.css">
   </head>
   <body>
      <!-- loading -->
      <div id="loading">
         <div id="loading-center">
            <img src="images/loader.gif" alt="loder">
         </div>
      </div>
      <!-- loading End -->
      <!--=================================
      Header -->
      <header class="fixed" id="header">
         <div class="container-fluid">
            <div class="row align-items-center">
               <div class="col-lg-10">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <a class="navbar-brand" href="index.html">
                        <img class="logo" src="images/icon.png" alt="image">
                     </a>
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ml-auto">
                           <li class="nav-item">
                              <a class="nav-link " href="index.html">Home</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="about-us.html">About Us</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="solutions.html">Solutions</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="technology.html">Technology</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link active" href="contact-us.php">Contact Us</a>
                           </li>
                           <!-- <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 Pages
                              </a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                 <a class="dropdown-item" href="blog.html">Blog</a>
                                 <a class="dropdown-item" href="blog-details-left-sidebar.html">Blog Details Left Sidebar</a>
                                 <a class="dropdown-item" href="blog-details-right-sidebar.html">Blog Details Right Sidebar</a>
                                 <a class="dropdown-item" href="404-error.html">404 Error</a>
                                 <a class="dropdown-item" href="comingsoon.html">Coming Soon</a>
                                 <a class="dropdown-item" href="privacy-policy.html">Privacy Policy</a>
                              </div>
                           </li> -->
                        </ul>
                     </div>
                  </nav>
               </div>
               <div class="col-lg-2 text-right p-0">
                  <ul class="login">
                     <li class="d-inline pr-3 pr-md-2"><a href="login.html">Login</a></li>
                     <li class="d-inline pl-3 pl-md-0"><a href="register.php">Register</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </header>
      <!--=================================
      Header -->
      <!--=================================
      Banner -->
      <div class="breadcrumb-main">
         <div class="container-fluid">
            <div class="row align-items-center">
               <div class="col-auto mr-auto">
                  <h2 class="iq-fw-8 text-white mb-0">Contact Us</h2>
               </div>
               <div class="col-auto text-right">
                  <nav aria-label="breadcrumb">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html" class="iq-fw-6"><i class="ion-android-home"></i>Home</a></li>
                        <li class="breadcrumb-item active iq-fw-6" aria-current="page">Contact Us</li>
                     </ol>
                  </nav>
               </div>
            </div>
         </div>
      </div>
      <!--=================================
      Banner -->
      <!--=================================
      MAIN CONTENT -->
      <div class="main-content">
         <section class="contact-info">
            <div class="container">
               <div class="row justify-content-between">
                  <div class="col-lg-6">
                     <div class="iq-contact">
                        <h3 class="mb-5 font-weight-bold">Get in Touch With Us</h3>
                        <form id="contact" method="post">
                        <?php
                                    if($_POST){
                                          $phone = $_POST["number"];
                                          $name = $_POST["name"];
                                          $comment = $_POST["comment"];
                                          $email = $_POST["email"];

                                          $data = [$name, $phone, $comment, $email];
                              
                                          $filename = 'stock.csv';

                                       try {
                                          // open csv file for writing
                                          $f = fopen($filename, 'a');
                                          fputcsv($f, $data);

                                          if (!$f) {
                                             throw new Exception('Error openning the file ' . $filename);
                                          }

                                       } catch (\Throwable $e) {
                                          echo $e->getMessage();
                                       } finally {
                                          echo "<div class='alert alert-success' role='alert'>
                                                   <p>You have registered Successfully!!!</p>
                                                </div>
                                                ";
                                          if (!$f) {
                                             fclose($f);
                                             $_POST = [];
                                          }
                                       }
                                    }
                                 ?>
                           <div class="contact-form">
                              <div class="row">
                                 <div class="col-sm-12">
                                    <div class="section-field mt-3">
                                       <input class="require contact-first-name" id="contact_name" type="text" placeholder="Name" name="name">
                                    </div>
                                 </div>
                                 <div class="col-sm-12">
                                    <div class="section-field mt-3">
                                       <input class="require contact-email " id="contact_email" type="email" placeholder="Email" name="email">
                                    </div>
                                 </div>
                                 <div class="col-lg-12 col-sm-12">
                                    <div class="section-field mt-3">
                                       <input class="require contact-phone" id="company_name" type="text" placeholder="Phone Number" name="number">
                                    </div>
                                 </div>
                                 
                                 <div class="col-lg-12 col-sm-12">
                                    <div class="section-field textarea mt-3">
                                       <textarea id="contact_message" class="input-message require contact-message" placeholder="How can we help you?" rows="5" name="comment"></textarea>
                                    </div>
                                 </div>
                              </div>
                              <button id="submit" name="submit" type="submit" value="Send" class="button pull-right mt-5 mb-5 mb-lg-0 contact-us-button">Send Message</button>
                              <span class="ml-10" id="result"></span>
                           </div>
                        </form>
                     </div>
                  </div>
                  <div class="col-lg-5">
                     <h2 class="iq-fw-8 mb-5">Contact With Us</h2>
                     <div class="our-detail mb-4">
                        <div class="icone-box mr-3">
                           <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="main-detail">
                           <h4 class="iq-fw-8">Address</h4>
                           <p>3 Captain Oba Street Era Along, Badagry, Lagos.</p>
                        </div>
                     </div>
                     <div class="our-detail mb-4">
                        <div class="icone-box mr-3">
                           <i class="fas fa-envelope"></i>
                        </div>
                        <div class="main-detail">
                           <h4 class="iq-fw-8">Email</h4>
                           <p><a href="https://iqonic.design/cdn-cgi/l/email-protection" class="__cf_email__" >info@smartoutingsystem.com</a></p>
                        </div>
                     </div>
                     <div class="our-detail mb-4">
                        <div class="icone-box mr-3">
                           <i class="fas fa-phone"></i>
                        </div>
                        <div class="main-detail">
                           <h4 class="iq-fw-8">Call</h4>
                           <p>+234 7061399411</p>
                        </div>
                     </div>
                     <ul class="list-inline mb-4">
                        <li class="list-inline-item iq-fw-6 mr-3"><a href="#" class="text-gray"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="list-inline-item iq-fw-6 mr-3"><a href="#" class="text-gray"><i class="fab fa-twitter"></i></li>
                        <li class="list-inline-item iq-fw-6 mr-3"><a href="#" class="text-gray"><i class="fab fa-linkedin"></i></li>
                        <li class="list-inline-item iq-fw-6 mr-3"><a href="#" class="text-gray"><i class="fab fa-instagram"></i></li>
                        <li class="list-inline-item iq-fw-6 mr-3"><a href="#" class="text-gray"><i class="fab fa-dribbble-square"></i></li>
                        <li class="list-inline-item iq-fw-6"><a href="#" class="text-gray"><i class="fab fa-pinterest-square"></i></li>
                     </ul>
                  </div>
               </div>
            </div>
         </section>
         <section class="our-map pt-0">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                        <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.840289118572!2d144.95373631550405!3d-37.81720974201396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1543402448828" frameborder="0" style="border:0" allowfullscreen></iframe>
                  </div>
               </div>
            </div>
         </section>
      </div>
      <!--=================================
      MAIN CONTENT -->
      <!--=================================
      Footer -->
      <footer class="gray-bg">
         <div class="container">
            <div class="footer-top">
               <div class="row">
                  <div class="col-lg-2 col-md-6 mb-5 mb-lg-0">
                     <h4 class="iq-fw-7 mb-3">Company</h4>
                     <ul class="d-block">
                        <li class="d-block  iq-fw-6 mb-2"><a href="index.html" class="text-gray">Home</a></li>
                        <li class="d-block  iq-fw-6 mb-2"><a href="about-us.html" class="text-gray">About</a></li>
                        <li class="d-block  iq-fw-6 mb-2"><a href="#" class="text-gray">Pages</a></li>
                        <li class="d-block  iq-fw-6 mb-2"><a href="#" class="text-gray">Services</a></li>
                        <li class="d-block  iq-fw-6"><a href="blog.html" class="text-gray">Blog</a></li>
                     </ul>
                  </div>
                  <div class="col-lg-2 col-md-6 mb-5 mb-lg-0">
                     <h4 class="iq-fw-7 mb-3">Products</h4>
                     <ul class="d-block">
                        <li class="d-block  iq-fw-6 mb-2"><a href="#" class="text-gray">Integration</a></li>
                        <li class="d-block  iq-fw-6 mb-2"><a href="#" class="text-gray">Pricing</a></li>
                        <li class="d-block  iq-fw-6 mb-2"><a href="#" class="text-gray">Documentation</a></li>
                        <li class="d-block  iq-fw-6"><a href="#" class="text-gray">Release Notes</a></li>
                     </ul>
                  </div>
                  <div class="col-lg-2 col-md-6 mb-5 mb-lg-0 mb-md-0">
                     <h4 class="iq-fw-7 mb-3">Help</h4>
                     <ul class="d-block">
                        <li class="d-block  iq-fw-6 mb-2"><a href="#" class="text-gray">Support</a></li>
                        <li class="d-block  iq-fw-6 mb-2"><a href="#" class="text-gray">Faq's</a></li>
                        <li class="d-block  iq-fw-6 mb-2"><a href="contact-us.html" class="text-gray">Contact Us</a></li>
                     </ul>
                  </div>
                  <div class="col-lg-6 col-md-6">
                     <h4 class="iq-fw-7 mb-4">Subscribe for Newsletter</h4>
                     <form>
                        <input type="email" name="" placeholder="Enter Email" class="position-relative form-control d-inline-block subscription-email">
                        <a href="#" class="button subscription-button ">Sign Up</a>
                     </form>
                     <ul class="list-inline mb-5">
                        <li class="list-inline-item iq-fw-6 text-black"><i class="fas fa-phone"></i><span class="ml-2 text-gray">+234 7061399411</span></li>
                        <li class="list-inline-item ml-3 iq-fw-6 text-black"><i class="fas fa-envelope-open-text"></i><span class="ml-2 text-gray"><span class="__cf_email__">info@smartoutingsystem.com</span></span></li>
                     </ul>
                     <ul class="list-inline">
                        <li class="list-inline-item iq-fw-6 mr-3"><a href="#" class="text-gray"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="list-inline-item iq-fw-6 mr-3"><a href="#" class="text-gray"><i class="fab fa-twitter"></i></li>
                        <li class="list-inline-item iq-fw-6"><a href="#" class="text-gray"><i class="fab fa-linkedin"></i></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="footer-bottom">
               <div class="row">
                  <div class="col-auto mr-auto">
                     <ul class="list-inline">
                        <li class="list-inline-item mr-3 r-font-12"><a href="#" class="text-gray iq-fw-6">Terms & Conditions</a></li>
                        <li class="list-inline-item r-font-12"><a href="privacy-policy.html" class="text-gray iq-fw-6">Privacy Policy</a></li>
                     </ul>
                  </div>
                  <div class="col-auto r-font-12"><a href="#" class="text-gray iq-fw-6">Smart Routing Security (SRS) All rights reserved 2021</a></div>
               </div>
            </div>
            <!-- back-to-top -->
            <div id="back-to-top">
               <a class="top" id="top" href="#top"> <i class="ion-ios-upload-outline"></i> </a>
            </div>
            <!-- back-to-top End -->
         </footer>
         <!-- Optional JavaScript -->
         <!-- jQuery first, then Popper.js, then Bootstrap JS -->
         <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery-3.3.1.min.js"></script>
         <!-- popper-->
         <script src="js/popper.min.js"></script>
         <!-- bootstrap -->
         <script src="js/bootstrap.min.js"></script>
         <!-- Owl Carousel -->
         <script src="js/owl.carousel.min.js"></script>
         <!-- slick -->
         <script src="js/slick.min.js"></script>
         <!-- Magnific Popup js-->
         <script src="js/jquery.magnific-popup.min.js"></script>
         <!-- jquery countdown -->
        <script src="js/countdown.js"></script>
         <!-- swiper -->
         <script src="js/swiper.min.js"></script>
         <!-- Wow -->
         <script src="js/wow.min.js"></script>
         <!-- Custom -->
         <script src="js/custom.js"></script>
      </body>
   
<!-- Mirrored from iqonic.design/themes/vizion/computer-vizion/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 May 2021 18:42:58 GMT -->
</html>