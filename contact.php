<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Spreadigit - Digital Agency</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    
    <!-- Flaticon -->
    <link rel="stylesheet" href="assets/css/flaticon.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/css/fontawesome-5.14.0.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <!-- Nice Select -->
    <link rel="stylesheet" href="assets/css/nice-select.min.css">
    <!-- Animate -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- Slick -->
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <!-- Main Style -->
    <link rel="stylesheet" href="assets/css/style.css">
    
</head>
<body>
    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"><div class="custom-loader"></div></div>

        <!-- main header -->
        <?php
    include './partial/header.php';
    ?>
       

        <!--Form Back Drop-->
        <div class="form-back-drop"></div>
        
        <!-- Hidden Sidebar -->
        <section class="hidden-bar">
            <div class="inner-box text-center">
                <div class="cross-icon"><span class="fa fa-times"></span></div>
                <div class="title">
                    <h4>Get Appointment</h4>
                </div>

                <!--Appointment Form-->
                <div class="appointment-form">
                    <form method="post" action="contact.html">
                        <div class="form-group">
                            <input type="text" name="text" value="" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" value="" placeholder="Email Address" required>
                        </div>
                        <div class="form-group">
                            <textarea placeholder="Message" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="theme-btn">Submit now</button>
                        </div>
                    </form>
                </div>

                <!--Social Icons-->
                <div class="social-style-one">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                </div>
            </div>
        </section>
        <!--End Hidden Sidebar -->
        
        
        <!-- Page Banner Start -->
        <section class="page-banner-area overlay pt-220 rpt-150 pb-170 rpb-100 rel z-1 bgs-cover text-center" style="background-image: url(assets/images/banner/banner-bg.jpg);">
            <div class="container">
                <div class="banner-inner rpt-10">
                    <h2 class="page-title wow fadeInUp delay-0-2s">Contact</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->
       
       
       <!-- Contact Form Area start -->
        <section class="contact-page-area py-130 rpy-100 rel z-1">
            <div class="container">
               <div class="row justify-content-between">
                    <div class="col-lg-6">
                        <div class="our-location-part rmb-55 wow fadeInUp delay-0-2s">
                            <div class="row">
                                <div class="col-xl-10">
                                    <div class="section-title mb-60">
                                        <span class="sub-title mb-15">Contact Us</span>
                                        <h2>Ready to Work Your Next Projects</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row gap-80 pb-30">
                                <div class="col-sm-6">
                                    <div class="our-location-address mb-40">
                                        <h5>Kigali</h5>
                                        <p>Kimironko,Gasabo,Rwanda</p>
                                        <a class="mailto" href="mailto:support@gmail.com">spreadigit@gmail.com</a><br>
                                        <a class="callto" href="callto:+00012345688"><i class="fas fa-phone"></i> +250783876662</a>
                                    </div>
                                </div>
                                <!-- <div class="col-sm-6">
                                    <div class="our-location-address mb-40">
                                        <h5>Australia</h5>
                                        <p>67 One State Road, 2nd Block Melbourne, Australia</p>
                                        <a class="mailto" href="mailto:support@gmail.com">support@gmail.com</a><br>
                                        <a class="callto" href="callto:+00012345688"><i class="fas fa-phone"></i> +000 (123) 456 88</a>
                                    </div>
                                </div> -->
                            </div>
                            <h4>Follow Us</h4>
                            <div class="social-style-two pt-15">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="contact-page-form form-style-one wow fadeInUp delay-0-2s">
                            <div class="section-title mb-35">
                                <span class="sub-title mb-15">Get Free Quote</span>
                                <h3>Drop Us a Message</h3>
                            </div>
                            <form id="contactForm" class="contactForm"  action="assets/php/form-process.php.html" name="contactForm" method="post">
                                <div class="row gap-60 pt-15">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name"><i class="far fa-user"></i></label>
                                            <input type="text" id="name" name="name" class="form-control" value="" placeholder="Full Name" required data-error="Please enter your name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="phone_number"><i class="far fa-phone"></i></label>
                                            <input type="text" id="phone_number" name="phone_number" class="form-control" value="" placeholder="Phone" required data-error="Please enter your Number">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="email"><i class="far fa-envelope"></i></label>
                                            <input type="email" id="email" name="email" class="form-control" value="" placeholder="Email Address" required data-error="Please enter your Email Address">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="message"><i class="far fa-pencil"></i></label>
                                            <textarea name="message" id="message" class="form-control" rows="2" placeholder="Message" required data-error="Please enter your Message"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group pt-5 mb-0">
                                            <button type="submit" class="theme-btn style-two w-100">Send Message us <i class="far fa-arrow-right"></i></button>
                                            <div id="msgSubmit" class="hidden"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Form Area end -->
       
       
       <!-- Location Map Area Start -->
        <!-- <div class="contact-page-map mb-120 rpb-90 wow fadeInUp delay-0-2s">
            <div class="container-fluid">
                <div class="our-location">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m12!1m10!1m3!1d142190.2862584524!2d-74.01298319978558!3d40.721725351435126!2m1!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sbd!4v1663473911885!5m2!1sen!2sbd" style="border:0; width: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div> -->
        <!-- Location Map Area End -->
        
       
        <!-- footer area start -->
        <?php
    include './partial/footer.php';
    ?>
        <!-- footer area end -->
        
        
        <!-- Scroll Top Button -->
        <button class="scroll-top scroll-to-target" data-target="html"><span class="fas fa-angle-double-up"></span></button>

    </div>
    <!--End pagewrapper-->
   
    
    <!-- Jquery -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Appear Js -->
    <script src="assets/js/appear.min.js"></script>
    <!-- Slick -->
    <script src="assets/js/slick.min.js"></script>
    <!-- Magnific Popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Nice Select -->
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <!-- Image Loader -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- Circle Progress -->
    <script src="assets/js/circle-progress.min.js"></script>
    <!-- Isotope -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!--  WOW Animation -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Custom script -->
    <script src="assets/js/script.js"></script>
    
    <!-- For Contact Form -->
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.js"></script>

</body>
</html>