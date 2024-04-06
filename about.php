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
       
        
        <!-- Page Banner Section Start -->
        <section class="page-banner pt-210 rpt-150 pb-45 rpb-50 rel z-1" style="background-image: url(assets/images/hero/hero-two-bg.png)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 col-lg-11">
                        <h1 class="hero-title mb-100 rmb-50 wow fadeInUp delay-0-2s hola">
                           We’re Creative
                           <img class="mxw-20" src="assets/images/banner/inside-title1.png" alt="title">
                           <img class="mxw-40" src="assets/images/banner/inside-title2.png" alt="title">
                           Digital Agency
                           <span class="arrow"><img class="wow fadeInLeft delay-0-6s" src="assets/images/hero/title-arrow.png" alt="Arrow"></span>
                        </h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Banner Section End -->
        
        
        <!-- Video Area start -->
        <!-- <div class="video-area-two rel z-1">
            <div class="container-fluid">
                <div class="video-part style-two mb-40 wow fadeInUp delay-0-2s">
                    <img src="assets/images/video/video-two-bg.jpg" alt="Video">
                    <a href="https://www.youtube.com/watch?v=9Y7ma241N8k" class="mfp-iframe video-play"><i class="fas fa-play"></i></a>
                </div>
            </div> -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 wow fadeInLeft delay-0-2s">
                        <div class="client-text text-lg-start text-center mt-40 pb-50">
                        SpreadiGit is your digital success partner, offering graphic design, software development, and digital marketing services to ensure your business thrives in the digital age. Let's bring your vision to life and achieve lasting success together.
                                            </div>
                        <!-- <div class="row">
                            <div class="col-xl-10">
                                <div class="client-logo-wrap">
                                    <a class="client-logo-item" href="contact.php">
                                        <img src="assets/images/client-logos/client-logo-two1.png" alt="Client Logo">
                                    </a>
                                    <a class="client-logo-item" href="contact.php">
                                        <img src="assets/images/client-logos/client-logo-two2.png" alt="Client Logo">
                                    </a>
                                    <a class="client-logo-item" href="contact.php">
                                        <img src="assets/images/client-logos/client-logo-two3.png" alt="Client Logo">
                                    </a>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="col-lg-6 wow fadeInRight delay-0-2s">
                        <div class="video-year text-lg-end text-center rel">
                            2020
                            <img class="leaf-shape" src="assets/images/video/leaf.png" alt="Leaf">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Area end -->
        
        
        <!-- Who We Are start -->
        <section class="who-we-are-area pt-100 rpt-80 pb-75 rpb-45 rel z-1">
            <div class="container container-1290">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="section-title text-center mb-70 wow fadeInUp delay-0-2s">
                            <span class="sub-title mb-15">Who We Are</span>
                            <h2>We are a professional and experienced team dedicated to crafting exceptional digital solutions tailored to your needs. </h2>
                        </div>
                    </div>
                </div>
                <div class="row gap-90">
                    <div class="col-lg-4 col-md-6">
                        <div class="why-choose-item style-two wow fadeInUp delay-0-2s">
                            <div class="why-choose-header">
                                <i class="flaticon-creativity"></i>
                                <h5>Personalized Approach</h5>
                            </div>
                            <p>We pride ourselves on our personalized approach to every project, tailoring our solutions to meet the specific needs and goals of each client.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="why-choose-item style-two wow fadeInUp delay-0-4s">
                            <div class="why-choose-header">
                                <i class="flaticon-mobile-banking"></i>
                                <h5>Creative Excellence</h5>
                            </div>
                            <p>Our team of creative professionals is dedicated to delivering excellence in every aspect of our digital services, from design to implementation, ensuring innovative and impactful results.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="why-choose-item style-two wow fadeInUp delay-0-6s">
                            <div class="why-choose-header">
                                <i class="flaticon-optimization-1"></i>
                                <h5>Continuous Innovation</h5>
                            </div>
                            <p>We are committed to staying at the forefront of digital trends and technologies, constantly innovating and evolving to provide our clients with cutting-edge solutions that drive success in the digital realm.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Who We Are end -->
        
        
        <!-- Headline area start -->
        <div class="headline-area bgc-primary pt-80 pb-65">
            <div class="container-fluid">
                <div class="headline-wrap marquee">
                    <span>
                        <span class="marquee-item">
                            <i class="fas fa-star-of-life"></i>
                            <b>Brand Identity</b>
                        </span>
                        <span class="marquee-item">
                            <i class="fas fa-star-of-life"></i>
                            <b>Social Media Marketing</b>
                        </span>
                        <span class="marquee-item">
                            <i class="fas fa-star-of-life"></i>
                            <b>Poster Design</b>
                        </span>
                        <span class="marquee-item">
                            <i class="fas fa-star-of-life"></i>
                            <b>Google Ads</b>
                        </span>
                        <span class="marquee-item">
                            <i class="fas fa-star-of-life"></i>
                            <b>SEO</b>
                        </span>
                        <span class="marquee-item">
                            <i class="fas fa-star-of-life"></i>
                            <b>Email
                                        Marketing</b>
                        </span>
                        <span class="marquee-item">
                            <i class="fas fa-star-of-life"></i>
                            <b>Print Design</b>
                        </span>
                        <span class="marquee-item">
                            <i class="fas fa-star-of-life"></i>
                            <b>Web Development</b>
                        </span>
                        <span class="marquee-item">
                            <i class="fas fa-star-of-life"></i>
                            <b>Mobile Apps</b>
                        </span>
                    </span>
                </div>
            </div>
        </div>
        <!-- Headline Area end -->
        
        
        <!-- Team Area start -->
        <!-- <section class="team-area pt-130 rpt-100">
            <div class="container-fluid">
                <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 justify-content-center">
                    <div class="col">
                        <div class="team-member wow fadeInUp delay-0-2s">
                            <div class="image">
                                <img src="assets/images/team/member6.jpg" alt="Team Member">
                            </div>
                            <div class="content">
                                <h4>Patrick V. Schroeder</h4>
                                <span>UI/UX Designer</span>
                                <a class="read-more" href="team-details.php"><i class="far fa-arrow-right"></i></a>
                            </div>
                            <div class="btn-social">
                                <a class="read-more" href="team-details.php"><span>View Details</span> <i class="far fa-arrow-right"></i></a>
                                <div class="social-style-two">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="team-member wow fadeInUp delay-0-3s">
                            <div class="image">
                                <img src="assets/images/team/member7.jpg" alt="Team Member">
                            </div>
                            <div class="content">
                                <h4>Michael A. Braun</h4>
                                <span>UI/UX Designer</span>
                                <a class="read-more" href="team-details.php"><i class="far fa-arrow-right"></i></a>
                            </div>
                            <div class="btn-social">
                                <a class="read-more" href="team-details.php"><span>View Details</span> <i class="far fa-arrow-right"></i></a>
                                <div class="social-style-two">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="team-member wow fadeInUp delay-0-4s">
                            <div class="image">
                                <img src="assets/images/team/member8.jpg" alt="Team Member">
                            </div>
                            <div class="content">
                                <h4>James V. Decastro</h4>
                                <span>Senior Marketer</span>
                                <a class="read-more" href="team-details.php"><i class="far fa-arrow-right"></i></a>
                            </div>
                            <div class="btn-social">
                                <a class="read-more" href="team-details.php"><span>View Details</span> <i class="far fa-arrow-right"></i></a>
                                <div class="social-style-two">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="team-member wow fadeInUp delay-0-5s">
                            <div class="image">
                                <img src="assets/images/team/member9.jpg" alt="Team Member">
                            </div>
                            <div class="content">
                                <h4>Troy V. Richardson</h4>
                                <span>Web Designer</span>
                                <a class="read-more" href="team-details.php"><i class="far fa-arrow-right"></i></a>
                            </div>
                            <div class="btn-social">
                                <a class="read-more" href="team-details.php"><span>View Details</span> <i class="far fa-arrow-right"></i></a>
                                <div class="social-style-two">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="team-member wow fadeInUp delay-0-6s">
                            <div class="image">
                                <img src="assets/images/team/member10.jpg" alt="Team Member">
                            </div>
                            <div class="content">
                                <h4>Michael A. Braun</h4>
                                <span>Apps Designer</span>
                                <a class="read-more" href="team-details.php"><i class="far fa-arrow-right"></i></a>
                            </div>
                            <div class="btn-social">
                                <a class="read-more" href="team-details.php"><span>View Details</span> <i class="far fa-arrow-right"></i></a>
                                <div class="social-style-two">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- Team Area end -->
       
       
       <!-- Statistics Area start -->
        <div class="statistics-area pt-100 rpt-70 rel z-1" style="background-image: url(assets/images/hero/hero-two-bg.png)">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-2 col-lg-3 col-6">
                        <div class="counter-item counter-text-wrap wow fadeInRight delay-0-2s">
                            <i class="fal fa-check-circle"></i>
                            <span class="count-text" data-speed="3000" data-stop="5">0</span>
                            <span class="counter-title">Years Of Experience</span>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-6">
                        <div class="counter-item counter-text-wrap wow fadeInRight delay-0-3s">
                            <i class="fal fa-check-circle"></i>
                            <span class="count-text k" data-speed="3000" data-stop="3">0</span>
                            <span class="counter-title">Project’s Complete</span>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-6">
                        <div class="counter-item counter-text-wrap wow fadeInRight delay-0-4s">
                            <i class="fal fa-check-circle"></i>
                            <span class="count-text" data-speed="3000" data-stop="48">0</span>
                            <span class="counter-title">Professionals Team Member</span>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-6">
                        <div class="counter-item counter-text-wrap wow fadeInRight delay-0-5s">
                            <i class="fal fa-check-circle"></i>
                            <span class="count-text" data-speed="3000" data-stop="92">0</span>
                            <span class="counter-title">Awards Winning</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Statistics Area end -->
        
        
        <!-- Testimonial Area start -->
        
        <!-- Testimonial Area end -->
        
        
        <!-- Client Logo Two start -->
       
        <!-- Client Logo Two end -->
        <section class="faq-area pt-130 rpt-100 pb-130 rpb-75 rel z-1">
            <div class="container">
                <div class="row align-items-center gap-100">
                    <div class="col-lg-5">
                       <div class="faq-iamge-part rmb-55 wow fadeInLeft delay-0-2s">
                           <img src="assets/images/faqs/faq-two.jpg" alt="FAQs">
                       </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="faq-content-part wow fadeInRight delay-0-2s">
                            <div class="section-title mb-60">
                                <span class="sub-title mb-15">Asked Questions</span>
                                <h2>Frequently Asked Questions</h2>
                            </div>
                            <div class="accordion" id="faq-accordion">
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                        What services does SpreadiGit offer?
                                        </button>
                                    </h5>
                                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>SpreadiGit offers a range of digital services including graphic design, software development, and digital marketing tailored to elevate your brand and drive success in the digital realm.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                        How does SpreadiGit ensure client satisfaction?
                                        </button>
                                    </h5>
                                    <div id="collapseTwo" class="accordion-collapse collapse show" data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>At SpreadiGit, client satisfaction is our top priority. We achieve this through open communication, understanding client needs, and delivering high-quality, tailored solutions that exceed expectations.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                        Can SpreadiGit handle projects of all sizes?
                                        </button>
                                    </h5>
                                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>Yes, SpreadiGit is equipped to handle projects of all sizes, from small startups to large corporations. Our team of experts has the skills and experience to tackle diverse projects and deliver exceptional results.

</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                        How can I get started with SpreadiGit?
                                        </button>
                                    </h5>
                                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>Getting started with SpreadiGit is simple. Just reach out to us through our website or contact us directly, and we'll schedule a consultation to discuss your needs and how we can help achieve your digital goals.s</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="faq-shapes">
                <img class="shape left" src="assets/images/shapes/ellipse-left.png" alt="Shape">
                <img class="shape right" src="assets/images/shapes/ellipse-right.png" alt="Shape">
            </div>
        </section>
        
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