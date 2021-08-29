<!doctype html>
<html lang="en">
   
<!-- Mirrored from iqonic.design/themes/vizion/computer-vizion/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 May 2021 18:43:31 GMT -->
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
                              <a class="nav-link" href="contact-us.php">Contact Us</a>
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
        <!-- Header-->
        <!-- About -->
        <div class="breadcrumb-main">
         <div class="container-fluid">
            <div class="row align-items-center">
               <div class="col-auto mr-auto">
                  <h2 class="iq-fw-8 text-white mb-0">Register</h2>
               </div>
               <div class="col-auto  text-right">
                  <nav aria-label="breadcrumb">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html" class="iq-fw-6"><i class="ion-android-home"></i>Home</a></li>
                        <li class="breadcrumb-item active iq-fw-6" aria-current="page">Register</li>
                     </ol>
                  </nav>
               </div>
            </div>
         </div>
      </div>
            <!-- About End -->
            <!--=================================
    MAIN CONTENT -->
            <div class="main-content">
                <!--================================
      register -->
                <section class="iq-login-regi">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-sm-12 mb-5 mb-lg-0">
                                <h2 class="mt-3">Register</h2>
                                <p class="mt-3 mb-4">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                <h5>You can Login With <i class="fa fa-hand-o-down" aria-hidden="true"></i></h5>
                                <ul class="iq-media mt-3">
                                    <li><a href="#" class="fb"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" class="gplus"><i class="fab fa-google"></i></a></li>
                                    <li><a href="#" class="lkd"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="iq-login register-box">
                                    <form method="POST">
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
                                        <div class="form-group">
                                            <label for="exampleInputName">Name</label>
                                            <input type="text" name="name" class="form-control email-bg" id="exampleInputName" placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail">Email</label>
                                            <input type="email" name="email" class="form-control email-bg" id="exampleInputEmail" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputnumber">Phone Number</label>
                                            <input type="number" name="number" class="form-control email-bg" id="exampleInputnumber" placeholder="Phone Number">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputcomment1">Comment</label>
                                            <br>
                                            <textarea name="comment" id="" cols="30" style="width: 100%" placeholder="Comments..." class="email-bg"  rows="5"></textarea>
                                            <!-- <input type="password" name="password" class="form-control email-bg" id="exampleInputPassword1" placeholder="Password"> -->
                                        </div>
                                      
                                        <!-- <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" name="password" class="form-control email-bg" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Confirm Password</label>
                                            <input type="password" class="form-control email-bg" id="exampleInputPassword2" placeholder="Confirm Password">
                                        </div> -->
                                        <!-- <button type="submit" class="button">Sign Up</button> -->
                                        <button type="submit" class="button">Register</button>
                                    </form>
                                    <div class="row justify-content-between">
                                        <div class="col-auto mr-auto">
                                            <a href="#" class="link">Forgot Password?</a>
                                        </div>
                                        <div class="col-auto">
                                            <div class="text-right">
                                                <div class="link">Don't Have an Account?</div>
                                                <div class="link"> <a href="#">Register Now</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--================================
      Login -->
            </div>
            <!--=================================
    MAIN CONTENT  END-->
            <!-- Footer start-->
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
                        <input type="email" name="" placeholder="Enter Email" class="subscription-email position-relative form-control d-inline-block">
                        <a href="#" class="button subscription-button">Sign Up</a>
                     </form>
                     <ul class="list-inline mb-5">
                        <li class="list-inline-item iq-fw-6 text-black"><i class="fas fa-phone"></i><span class="ml-2 text-gray">+234 7061399411</span></li>
                        <li class="list-inline-item ml-3 iq-fw-6 text-black"><i class="fas fa-envelope-open-text"></i><span class="ml-2 text-gray"><a href="info@smartoutingsystem.com" class="__cf_email__">info@smartoutingsystem.com</a></span></li>
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
   
<!-- Mirrored from iqonic.design/themes/vizion/computer-vizion/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 May 2021 18:43:31 GMT -->
</html>