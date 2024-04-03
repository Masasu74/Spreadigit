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
                    <form method="post" action="contact.php">
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
                    <h2 class="page-title wow fadeInUp delay-0-2s">Our Projects</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Our Projects</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->
        
        
        <!-- Project List Area start -->
        <section class="project-list-area pt-130 rpt-100 pb-10 rpb-25">
            <div class="container">
                <div class="project-item style-two">
                    <div class="image wow fadeInLeft delay-0-2s">
                        <img src="assets/images/projects/project-list1.jpg" alt="Project List">
                        <a href="project-details.php" class="project-btn"><i class="far fa-arrow-right"></i></a>
                    </div>
                    <div class="content wow fadeInRight delay-0-2s">
                        <a href="projects.php" class="category">Creative Work</a>
                        <h2><a href="project-details.php">Task Management <i>Dashboard</i></a></h2>
                        <hr>
                        <p>Sed ut perspiciatis unde omnis iste natus error sitesy voluptatem accusantium doloremque lauda</p>
                        <a class="read-more" href="project-details.php">Project Details <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="project-item style-two">
                    <div class="content wow fadeInLeft delay-0-2s">
                        <a href="projects.php" class="category">Digital Product</a>
                        <h2><a href="project-details.php">Mobile Application <i>Development</i></a></h2>
                        <hr>
                        <p>Sed ut perspiciatis unde omnis iste natus error sitesy voluptatem accusantium doloremque lauda</p>
                        <a class="read-more" href="project-details.php">Project Details <i class="far fa-arrow-right"></i></a>
                    </div>
                    <div class="image wow fadeInRight delay-0-2s">
                        <img src="assets/images/projects/project-list2.jpg" alt="Project List">
                        <a href="project-details.php" class="project-btn"><i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="project-item style-two">
                    <div class="image wow fadeInLeft delay-0-2s">
                        <img src="assets/images/projects/project-list3.jpg" alt="Project List">
                        <a href="project-details.php" class="project-btn"><i class="far fa-arrow-right"></i></a>
                    </div>
                    <div class="content wow fadeInRight delay-0-2s">
                        <a href="projects.php" class="category">Creative Work</a>
                        <h2><a href="project-details.php">Product Design & <i>Branding</i></a></h2>
                        <hr>
                        <p>Sed ut perspiciatis unde omnis iste natus error sitesy voluptatem accusantium doloremque lauda</p>
                        <a class="read-more" href="project-details.php">Project Details <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="project-item style-two">
                    <div class="content wow fadeInLeft delay-0-2s">
                        <a href="projects.php" class="category">Digital Product</a>
                        <h2><a href="project-details.php">Digital Content For <i>Web Development</i></a></h2>
                        <hr>
                        <p>Sed ut perspiciatis unde omnis iste natus error sitesy voluptatem accusantium doloremque lauda</p>
                        <a class="read-more" href="project-details.php">Project Details <i class="far fa-arrow-right"></i></a>
                    </div>
                    <div class="image wow fadeInRight delay-0-2s">
                        <img src="assets/images/projects/project-list4.jpg" alt="Project List">
                        <a href="project-details.php" class="project-btn"><i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="project-item style-two">
                    <div class="image wow fadeInLeft delay-0-2s">
                        <img src="assets/images/projects/project-list5.jpg" alt="Project List">
                        <a href="project-details.php" class="project-btn"><i class="far fa-arrow-right"></i></a>
                    </div>
                    <div class="content wow fadeInRight delay-0-2s">
                        <a href="projects.php" class="category">Creative Work</a>
                        <h2><a href="project-details.php">Product Design <i>& Branding</i></a></h2>
                        <hr>
                        <p>Sed ut perspiciatis unde omnis iste natus error sitesy voluptatem accusantium doloremque lauda</p>
                        <a class="read-more" href="project-details.php">Project Details <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="project-item style-two">
                    <div class="content wow fadeInLeft delay-0-2s">
                        <a href="projects.php" class="category">Digital Product</a>
                        <h2><a href="project-details.php">Digital Content For <i>Web Development</i></a></h2>
                        <hr>
                        <p>Sed ut perspiciatis unde omnis iste natus error sitesy voluptatem accusantium doloremque lauda</p>
                        <a class="read-more" href="project-details.php">Project Details <i class="far fa-arrow-right"></i></a>
                    </div>
                    <div class="image wow fadeInRight delay-0-2s">
                        <img src="assets/images/projects/project-list6.jpg" alt="Project List">
                        <a href="project-details.php" class="project-btn"><i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Project List Area end -->
        
        
        <!-- Work With Area start -->
        <section class="work-with-area pb-150 rpb-145 rel z-1">
            <div class="container">
               <div class="row justify-content-center pb-45 rpb-25">
                    <div class="col-xl-7 col-lg-9">
                        <div class="section-title text-center wow fadeInUp delay-0-2s">
                            <span class="sub-title mb-15">Work With Us</span>
                            <h2>Have Any Projects On Minds! Feel Free to Contact Us</h2>
                            <a class="explore-more text-start mt-30" href="contact.php"><i class="fas fa-arrow-right"></i> <span>Explore more</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <span class="big-text light-opacity">Let’s Work Together</span>
        </section>
        <!-- Work With Area end -->

       
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

</body>
</html>