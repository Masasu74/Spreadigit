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

<body class="home-six">
    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader">
            <div class="custom-loader"></div>
        </div>

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


        <!-- Hero Section Start -->
        <section class="hero-area-six pt-185 rpt-150 pb-130 rpb-100 rel z-1">
            <div class="container container-1620">
                <div class="hero-six-wrapper">
                    <div class="hero-social">
                        <a href="#"><i class="fab fa-facebook-f"></i> <span>Facebook</span></a>
                        <a href="#"><i class="fab fa-twitter"></i> <span>Twitter</span></a>
                        <a href="#"><i class="fab fa-dribbble"></i> <span>Dribbble</span></a>
                        <a href="#"><i class="fab fa-behance"></i> <span>Behance</span></a>
                    </div>
                    <div class="row no-gap">
                        <div class="col-xl-4">
                            <div class="left-image">
                            <img src="assets/images/hero/hero-six1.png" alt="Hero">                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="hero-six-content">
                                <h1>Creative Digital Agency</h1>
                                <p>
                                    SpreaDigit: Your Partner in Digital Success. Tailored solutions to elevate your business. Let's spread success together!</p>
                                <a href="contact.php" class="theme-btn style-two" style="color:white;">Free consultation <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-xl-4 align-self-end">
                            <div class="right-image">
                                <img src="assets/images/hero/hero-six2.png" alt="Hero">
                            </div>
                        </div>
                    </div>
                    <div class="down-arrow">
                        <a href="#services">Scroll Down <i class="fal fa-arrow-down"></i></a>
                    </div>
                </div>
            </div>
            <div class="bg-lines">
                <span></span><span></span>
                <span></span><span></span>
            </div>
        </section>
        <!-- Hero Section End -->


        <!-- Services area start -->
        <div id="services" class="services-area-five bgc-primary pt-80 pb-50">
            <div class="container">
                <div class="services-five-wrapper">
                    <a class="service-five-item" href="service-details.php">
                        <span>Social Media Marketing</span>
                        <i class="flaticon-star-symbol"></i>
                        <div class="image"><img src="assets/images/services/smm.jpeg" alt="Service"></div>
                    </a>
                    <a class="service-five-item" href="service-details.php">
                        <span>Google ads</span>
                        <i class="flaticon-star-symbol"></i>
                        <div class="image"><img src="assets/images/services/google-ads.png" alt="Service"></div>
                    </a>
                    <a class="service-five-item" href="service-details.php">
                        <span>SEO</span>
                        <i class="flaticon-star-symbol"></i>
                        <div class="image"><img src="assets/images/services/seo.png" alt="Service"></div>
                    </a>

                    <a class="service-five-item" href="service-details.php">
                        <span>Posters</span>
                        <i class="flaticon-star-symbol"></i>
                        <div class="image"><img src="assets/images/services/poster.jpeg" alt="Service"></div>
                    </a>
                    <a class="service-five-item" href="service-details.php">

                        <span>Brand Identity</span>
                        <i class="flaticon-star-symbol"></i>
                        <div class="image"><img src="assets/images/services/brand-identity.jpg" alt="Service"></div>
                    </a>

                    <a class="service-five-item" href="service-details.php">
                        <span>Web Design</span>
                        <i class="flaticon-star-symbol"></i>
                        <div class="image"><img src="assets/images/services/web design.png" alt="Service"></div>
                    </a>
                    <a class="service-five-item" href="service-details.php">
                        <span>Print Design</span>
                        <i class="flaticon-star-symbol"></i>
                        <div class="image"><img src="assets/images/services/print-design.jpeg" alt="Service"></div>
                    </a>

                    <a class="service-five-item" href="service-details.php">
                        <span>Web & Mobile App Development</span>
                        <i class="flaticon-star-symbol"></i>
                        <div class="image"><img src="assets/images/services/web-dev.png" alt="Service"></div>
                    </a>
                    
                </div>
            </div>
        </div>
        <!-- Services Area end -->


        <!-- About Us Area start -->
        <section class="about-area-six pt-130 rpt-100 pb-80 rpb-50 rel z-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-md-6">
                        <div class="about-content-six mb-40 wow fadeInUp delay-0-2s">
                            <div class="about-logo mb-50">
                                <img src="assets/images/about/circle-text-six.svg" alt="Logo">
                            </div>
                            <div class="section-title">
                                <span class="sub-title mb-15">About Company</span>
                                <h2>Our Main Goal to Satisficed Local & Global Clients</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="about-image-six mb-50 wow fadeInUp delay-0-4s">
                            <img src="assets/images/about/about-six.jpg" alt="About">
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="about-features mb-50 wow fadeInUp delay-0-4s">
                            <div class="feature-six-item">
                                <div class="icon">
                                    <i class="far fa-rocket-launch"></i>
                                </div>
                                <div class="content">
                                    <h5>Company Mission</h5>
                                    <p>Empower businesses with innovative digital strategies for sustained success.</p>
                                    <a class="read-more" href="service-details.php"><span>Read More</span> <i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="feature-six-item">
                                <div class="icon">
                                    <i class="far fa-bullseye-arrow"></i>
                                </div>
                                <div class="content">
                                    <h5>Company Vision & Goals</h5>
                                    <p>
                                        To lead digital innovation for client success while adapting to industry changes.</p>
                                    <a class="read-more" href="service-details.php"><span>Read More</span> <i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-lines">
                <span></span><span></span>
                <span></span><span></span>
            </div>
        </section>
        <!-- About Us Area end -->
<!-- Projects Area start -->
<section class="project-area-six pt-100 rpt-70 rel z-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="section-title text-center mb-60 wow fadeInUp delay-0-2s">
                            <span class="sub-title mb-20">Recent Works Gallery</span>
                            <h2>Lat’s Look Our Recent Project Gallery</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 row-cols-1">
                <div class="col">
                    <div class="project-item style-five wow fadeInUp delay-0-2s">
                        <div class="image">
                            <img src="assets/images/projects/project-list4.png" alt="Project">
                        </div>
                        <div class="content">
                            <h4><a href="project-details.php">Product Design</a></h4>
                            <a href="projects.php" class="category">Design, Branding</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-item style-five wow fadeInUp delay-0-3s">
                        <div class="image">
                            <img src="assets/images/projects/project-list2.png" alt="Project">
                        </div>
                        <div class="content">
                            <h4><a href="project-details.php">Product Design</a></h4>
                            <a href="projects.php" class="category">Design, Branding</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-item style-five wow fadeInUp delay-0-4s">
                        <div class="image">
                            <img src="assets/images/projects/project-list8.png" alt="Project">
                        </div>
                        <div class="content">
                            <h4><a href="project-details.php">Product Design</a></h4>
                            <a href="projects.php" class="category">Design, Branding</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-item style-five wow fadeInUp delay-0-5s">
                        <div class="image">
                            <img src="assets/images/projects/project-list5.png" alt="Project">
                        </div>
                        <div class="content">
                            <h4><a href="project-details.php">Product Design</a></h4>
                            <a href="projects.php" class="category">Design, Branding</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-item style-five wow fadeInUp delay-0-6s">
                        <div class="image">
                            <img src="assets/images/projects/project-list1.png" alt="Project">
                        </div>
                        <div class="content">
                            <h4><a href="project-details.php">Product Design</a></h4>
                            <a href="projects.php" class="category">Design, Branding</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-item style-five wow fadeInUp delay-0-6s">
                        <div class="image">
                            <img src="assets/images/projects/project-list7.png" alt="Project">
                        </div>
                        <div class="content">
                            <h4><a href="project-details.php">Product Design</a></h4>
                            <a href="projects.php" class="category">Design, Branding</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-item style-five wow fadeInUp delay-0-6s">
                        <div class="image">
                            <img src="assets/images/projects/project-list6.png" alt="Project">
                        </div>
                        <div class="content">
                            <h4><a href="project-details.php">Product Design</a></h4>
                            <a href="projects.php" class="category">Design, Branding</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-item style-five wow fadeInUp delay-0-6s">
                        <div class="image">
                            <img src="assets/images/projects/project-list9.png" alt="Project">
                        </div>
                        <div class="content">
                            <h4><a href="project-details.php">Product Design</a></h4>
                            <a href="projects.php" class="category">Design, Branding</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-lines">
                <span></span><span></span>
                <span></span><span></span>
            </div>
        </section>
        <!-- Projects Area end -->

        <!-- Services Area start -->
        <section class="services-area-six pb-100 rpb-70 rel z-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-70 rmb-50 wow fadeInUp delay-0-2s">
                            <span class="sub-title mb-15">Popular Services</span>
                            <h2>We Provide Amazing Digital Services Solutions</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="service-six-item wow fadeInUp delay-0-2s">
                            <div class="icon"><i class="fal fa-bezier-curve"></i></div>
                            <div class="content">
                                <h5><a href="service-details.php">Brand Identity</a></h5>
                                <p>Crafting compelling brand identities that resonate and captivate.</p>
                            </div>
                            <a class="details-btn" href="#"><i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="service-six-item wow fadeInUp delay-0-4s">
                            <div class="icon"><i class="fal fa-telescope"></i></div>
                            <div class="content">
                                <h5><a href="service-details.php">Social Media Marketing</a></h5>
                                <p>Engaging audiences and driving brand awareness through strategic social media campaigns.</p>
                            </div>
                            <a class="details-btn" href="#"><i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="service-six-item wow fadeInUp delay-0-2s">
                            <div class="icon"><i class="fal fa-telescope"></i></div>
                            <div class="content">
                                <h5><a href="service-details.php">Web Design</a></h5>
                                <p>Designing intuitive and visually stunning websites to enhance user experience and drive conversions.</p>
                            </div>
                            <a class="details-btn" href="#"><i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="service-six-item wow fadeInUp delay-0-4s">
                            <div class="icon"><i class="fal fa-laptop-code"></i></div>
                            <div class="content">
                                <h5><a href="service-details.php">Poster Design</a></h5>
                                <p>Creating impactful posters that effectively communicate messages and promote events or products.</p>
                            </div>
                            <a class="details-btn" href="#"><i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="service-six-item wow fadeInUp delay-0-2s">
                            <div class="icon"><i class="fal fa-mail-bulk"></i></div>
                            <div class="content">
                                <h5><a href="service-details.php">Google Ads </a></h5>
                                <p>Maximizing business visibility and conversions with targeted Google Ads campaigns.n</p>
                            </div>
                            <a class="details-btn" href="#"><i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="service-six-item wow fadeInUp delay-0-4s">
                            <div class="icon"><i class="fal fa-file-contract"></i></div>
                            <div class="content">
                                <h5><a href="service-details.php">Print Design</a></h5>
                                <p>Delivering exceptional print designs for consistent branding and memorable impressions.</p>
                            </div>
                            <a class="details-btn" href="#"><i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-lines">
                <span></span><span></span>
                <span></span><span></span>
            </div>
        </section>
        <!-- Services Area end -->


        <!-- Video Area start -->
        <!-- <div class="video-area-six pt-175 rpt-125 pb-185 rpb-135 bgs-cover"
            style="background-image: url(assets/images/background/video-bg.jpg);">
            <div class="container">
                <div class="video-six-content wow fadeInUp delay-0-2s">
                    <span class="video-title mb-20 rmb-0">Co-working</span>
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-3 col-lg-4">
                            <div class="text mt-35">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                accusantium doloremque</div>
                        </div>
                        <div class="col-xl-2 col-lg-3 text-center">
                            <a href="https://www.youtube.com/watch?v=9Y7ma241N8k"
                                class="mfp-iframe video-play mt-35"><img src="assets/images/icons/play-icon.png"
                                    alt="Play"></a>
                        </div>
                        <div class="col-xl-3 col-lg-4">
                            <span class="video-text text-lg-start text-center mt-35">Video</span>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Video Area end -->


        <!-- Team Area start -->
        <!-- <section class="team-area pt-130 rpt-100 pb-100 rpb-70 rel z-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="section-title text-center mb-55 wow fadeInUp delay-0-2s">
                            <span class="sub-title mb-20">Team Members</span>
                            <h2>Meet Our Professionals Team</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                        <div class="team-member style-four wow fadeInUp delay-0-2s">
                            <div class="image">
                                <img src="assets/images/team/member-six1.jpg" alt="Team Member">
                            </div>
                            <div class="content">
                                <h5>Patrick V. Schroeder</h5>
                                <span>UI/UX Designer</span>
                                <div class="team-social">
                                    <div class="social-style-two">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                    <button><i class="far fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                        <div class="team-member style-four wow fadeInUp delay-0-4s">
                            <div class="image">
                                <img src="assets/images/team/member-six2.jpg" alt="Team Member">
                            </div>
                            <div class="content">
                                <h5>Jonathan S. Wilcox</h5>
                                <span>Senior Manager</span>
                                <div class="team-social">
                                    <div class="social-style-two">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                    <button><i class="far fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                        <div class="team-member style-four wow fadeInUp delay-0-6s">
                            <div class="image">
                                <img src="assets/images/team/member-six3.jpg" alt="Team Member">
                            </div>
                            <div class="content">
                                <h5>Steven G. Seman</h5>
                                <span>Web Developer</span>
                                <div class="team-social">
                                    <div class="social-style-two">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                    <button><i class="far fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                        <div class="team-member style-four wow fadeInUp delay-0-8s">
                            <div class="image">
                                <img src="assets/images/team/member-six4.jpg" alt="Team Member">
                            </div>
                            <div class="content">
                                <h5>Troy V. Richardson</h5>
                                <span>Digital Marketer</span>
                                <div class="team-social">
                                    <div class="social-style-two">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                    <button><i class="far fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-lines">
                <span></span><span></span>
                <span></span><span></span>
            </div>
        </section> -->
        <!-- Team Area end -->


  

    

        <!-- Headline area start -->
        
        <!-- Headline Area end -->

      <!-- Why Choose Us start -->
      <section class="demo-area pb-60 rel z-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="why-choose-us-content pb-30">
                            <div class="section-title mb-60 wow fadeInUp delay-0-2s">
                                <span class="sub-title mb-15">Why Choose Us</span>
                                <h2>Elevate Your Business with Our Unmatched Expertise</h2>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="why-choose-item style-three wow fadeInUp delay-0-2s">
                                        <div class="why-choose-header">
                                            <i class="far fa-chevron-right"></i>
                                            <h5>Proven Expertise</h5>
                                        </div>
                                        <p>Benefit from years of experience and a proven track record of success.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="why-choose-item style-three wow fadeInUp delay-0-3s">
                                        <div class="why-choose-header">
                                            <i class="far fa-chevron-right"></i>
                                            <h5>Innovative Approach</h5>
                                        </div>
                                        <p>Stay ahead of the competition with our cutting-edge techniques and technologies.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="why-choose-item style-three wow fadeInUp delay-0-2s">
                                        <div class="why-choose-header">
                                            <i class="far fa-chevron-right"></i>
                                            <h5>Client-Centric Focus</h5>
                                        </div>
                                        <p>Experience exceptional customer service and unwavering dedication to your success.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="why-choose-item style-three wow fadeInUp delay-0-3s">
                                        <div class="why-choose-header">
                                            <i class="far fa-chevron-right"></i>
                                            <h5>Measurable Results</h5>
                                        </div>
                                        <p>Achieve tangible outcomes through data-driven campaigns tailored to your goals.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="why-choose-right mb-60 style-two style-three wow fadeInLeft delay-0-2s">
                            <div class="image-one mb-30">
                                <img src="assets/images/services/why-choose1.jpg" alt="Why Choose">
                            </div>
                            <div class="image-two">
                                <img src="assets/images/services/why-choose2.jpg" alt="Why Choose">
                            </div>
                            <div class="why-choose-border-shape"></div>
                            <div class="text-shape">
                                <img class="text" src="assets/images/services/web-design-text.svg" alt="Web Design Text">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-lines">
                <span></span><span></span>
                <span></span><span></span>
            </div>
        </section>
        <!-- Why Choose Us end -->
        <div class="headline-six-wrapper rel z-1 py-60 rpy-30">
            <div class="headline-area-six bgc-primary py-20 rpy-10">
                <div class="container-fluid">
                    <div class="headline-wrap-two style-two">
                        <span class="marquee-wrap">
                            <span class="marquee-inner left">
                                <span class="marquee-item"><i class="flaticon-star-symbol"></i><b>Brand Identity</b></span>
                                <span class="marquee-item"><i class="flaticon-star-symbol"></i><b>Social Media Marketing</b></span>
                                <span class="marquee-item"><i class="flaticon-star-symbol"></i><b>Poster Design
                                        </b></span>
                                <span class="marquee-item"><i class="flaticon-star-symbol"></i><b>Google Ads</b></span>
                                <span class="marquee-item"><i class="flaticon-star-symbol"></i><b> SEO</b></span>
                                <span class="marquee-item"><i class="flaticon-star-symbol"></i><b>Email
                                        Marketing</b></span>
                            </span>
                            <span class="marquee-inner left">
                                <span class="marquee-item"><i class="flaticon-star-symbol"></i><b>Print Design</b></span>
                                <span class="marquee-item"><i class="flaticon-star-symbol"></i><b>Web & Mobile Design</b></span>
                                <span class="marquee-item"><i class="flaticon-star-symbol"></i><b>Mobile Apps
                                        Development</b></span>
                                <span class="marquee-item"><i class="flaticon-star-symbol"></i><b>Website Development</b></span>
                                <span class="marquee-item"><i class="flaticon-star-symbol"></i><b>Content Creation</b></span>
                            </span>
                            <span class="marquee-inner left">
                                <span class="marquee-item"><i class="flaticon-star-symbol"></i><b>Digital
                                        Marketing</b></span>
                                <span class="marquee-item"><i class="flaticon-star-symbol"></i><b>Product
                                        Design</b></span>
                                <span class="marquee-item"><i class="flaticon-star-symbol"></i><b>Mobile Apps
                                        Design</b></span>
                                <span class="marquee-item"><i class="flaticon-star-symbol"></i><b>Branding
                                        Identity</b></span>
                                <span class="marquee-item"><i class="flaticon-star-symbol"></i><b>Web
                                        Optimizations</b></span>
                                <span class="marquee-item"><i class="flaticon-star-symbol"></i><b>Email
                                        Marketing</b></span>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
            <div class="bg-lines">
                <span></span><span></span>
                <span></span><span></span>
            </div>
        </div>


        <!-- Statistics Area start -->
        <div class="statistics-area pt-100 rpt-70 pb-70 rpb-40 rel z-1">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-2 col-lg-3 col-6">
                        <div class="counter-item counter-text-wrap wow fadeInUp delay-0-2s">
                            <i class="fal fa-check-circle"></i>
                            <span class="count-text" data-speed="3000" data-stop="5">0</span>
                            <span class="counter-title">Years Of Experience</span>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-6">
                        <div class="counter-item counter-text-wrap wow fadeInUp delay-0-3s">
                            <i class="fal fa-check-circle"></i>
                            <span class="count-text k" data-speed="3000" data-stop="1">0</span>
                            <span class="counter-title">Project’s Complete</span>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-6">
                        <div class="counter-item counter-text-wrap wow fadeInUp delay-0-4s">
                            <i class="fal fa-check-circle"></i>
                            <span class="count-text" data-speed="3000" data-stop="20">0</span>
                            <span class="counter-title">Professionals Team Member</span>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-6">
                        <div class="counter-item counter-text-wrap wow fadeInUp delay-0-5s">
                            <i class="fal fa-check-circle"></i>
                            <span class="count-text" data-speed="3000" data-stop="2">0</span>
                            <span class="counter-title">Awards Winning</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-lines">
                <span></span><span></span>
                <span></span><span></span>
            </div>
        </div>
        <!-- Statistics Area end -->


        <!-- Testimonial Area start -->
        <section class="testimonial-section pt-70 rpt-30">
            <div class="container container-1210">
                <div class="row">
                   <div class="col-lg-6">
                       <div class="image-border-shape rmb-20 wow fadeInRight delay-0-2s">
                           <img src="assets/images/testimonials/testimonials-four.jpg.png" alt="Testimonial Left Image">
                           <div class="bottom-border"></div>
                       </div>
                   </div>
                    <div class="col-lg-6">
                        <div class="testimonial-one-right-part wow fadeInLeft delay-0-2s">
                            <div class="testimonials-active">
                                <div class="testimonial-item">
                                    <div class="author-speech">
                                        <p><span class="quote">“</span> Our experience with SpreadiGit was nothing short of fantastic. They were responsive, collaborative, and committed to delivering results. We're grateful for their expertise and look forward to continuing our partnership.<span class="quote right-quote">“</span></p>
                                    </div>
                                    <div class="testimonial-footer">
                                        <div class="testimonial-author">
                                            <div class="author-image">
                                                <img src="assets/images/testimonials/author1.png" alt="Author Image">
                                            </div>
                                            <div class="author-info">
                                                <h4>David Brown</h4>
                                                <span class="designation">COO of Summit Enterprises</span>
                                            </div>
                                        </div>
                                        <div class="ratting style-two">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-item">
                                    <div class="author-speech">
                                        <p><span class="quote">“</span>SpreadiGit provided exceptional service from start to finish. Their creativity and technical skills are unmatched, and they truly understand how to elevate a brand in the digital space. We're thrilled with the results!<span class="quote right-quote">“</span></p>
                                    </div>
                                    <div class="testimonial-footer">
                                        <div class="testimonial-author">
                                            <div class="author-image">
                                                <img src="assets/images/testimonials/author1.png" alt="Author Image">
                                            </div>
                                            <div class="author-info">
                                                <h4>Sarah Adams</h4>
                                                <span class="designation">Founder of Sparkle Boutique</span>
                                            </div>
                                        </div>
                                        <div class="ratting style-two">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-item">
                                    <div class="author-speech">
                                        <p><span class="quote">“</span> I can't say enough about the professionalism and expertise of SpreadiGit and their team. They transformed our digital presence and helped us reach new heights. Thank you for your outstanding work!<span class="quote right-quote">“</span></p>
                                    </div>
                                    <div class="testimonial-footer">
                                        <div class="testimonial-author">
                                            <div class="author-image">
                                                <img src="assets/images/testimonials/author1.png" alt="Author Image">
                                            </div>
                                            <div class="author-info">
                                                <h4>Michael Smith</h4>
                                                <span class="designation">Marketing Director at TechPro Solutions</span>
                                            </div>
                                        </div>
                                        <div class="ratting style-two">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-item">
                                    <div class="author-speech">
                                        <p><span class="quote">“</span> Working with SpreadiGit and their team was an absolute pleasure. Their attention to detail and dedication to bringing our vision to life exceeded our expectations. We highly recommend their services to anyone looking for top-notch digital solutions. <span class="quote right-quote">“</span></p>
                                    </div>
                                    <div class="testimonial-footer">
                                        <div class="testimonial-author">
                                            <div class="author-image">
                                                <img src="assets/images/testimonials/author1.png" alt="Author Image">
                                            </div>
                                            <div class="author-info">
                                                <h4>Emily Johnson</h4>
                                                <span class="designation">CEO of Bright Ideas Inc.</span>
                                            </div>
                                        </div>
                                        <div class="ratting style-two">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-controls mt-75 rmt-40">
                                <button class="testimonial-prev">
                                    <i class="far fa-chevron-left"></i>
                                </button>
                                <div class="testimonial-dots"></div>
                                <button class="testimonial-next">
                                    <i class="far fa-chevron-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial Area end -->


        <!-- Blog Style Two start -->
        <!-- <section class="blog-area-two pt-125 rpt-100 pb-70 rpb-40 rel z-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9 col-md-11">
                        <div class="section-title text-center mb-60 wow fadeInUp delay-0-2s">
                            <span class="sub-title mb-20">Blog & News</span>
                            <h2>Read Our Latest News & Blog Get Every Updates</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <div class="blog-item style-five wow fadeInUp delay-0-2s">
                            <div class="image">
                                <img src="assets/images/blog/blog-six1.jpg" alt="Blog">
                            </div>
                            <div class="content">
                                <ul class="blog-meta">
                                    <li>
                                        <i class="far fa-calendar-alt"></i>
                                        <a href="#">February 18, 2023</a>
                                    </li>
                                </ul>
                                <hr>
                                <h5><a href="blog-details.php">Voice Skills For Google Assistant And Amazon Alexa</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="blog-item style-five wow fadeInUp delay-0-4s">
                            <div class="image">
                                <img src="assets/images/blog/blog-six2.jpg" alt="Blog">
                            </div>
                            <div class="content">
                                <ul class="blog-meta">
                                    <li>
                                        <i class="far fa-calendar-alt"></i>
                                        <a href="#">February 18, 2023</a>
                                    </li>
                                </ul>
                                <hr>
                                <h5><a href="blog-details.php">Voice Skills For Google Assistant And Amazon Alexa</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="blog-item style-five wow fadeInUp delay-0-6s">
                            <div class="image">
                                <img src="assets/images/blog/blog-six3.jpg" alt="Blog">
                            </div>
                            <div class="content">
                                <ul class="blog-meta">
                                    <li>
                                        <i class="far fa-calendar-alt"></i>
                                        <a href="#">February 18, 2023</a>
                                    </li>
                                </ul>
                                <hr>
                                <h5><a href="blog-details.php">Voice Skills For Google Assistant And Amazon Alexa</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-lines">
                <span></span><span></span>
                <span></span><span></span>
            </div>
        </section> -->
        <!-- Blog Style Two end -->


        <!-- Client Logo Two start -->
        <!-- <div class="client-logo-area pb-90 rpb-70 rel z-1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="section-title mb-60 wow fadeInUp delay-0-2s">
                            <span class="sub-title mb-20">Global Clients</span>
                            <h2>I’ve 1253+ Global Clients & lot’s of Project Complete</h2>
                        </div>
                    </div>
                </div>
                <div class="client-logo-wrap-two">
                    <a class="client-logo-item wow fadeInUp delay-0-2s" href="contact.php">
                        <img src="assets/images/client-logos/client-logo-six1.png" alt="Client Logo">
                    </a>
                    <a class="client-logo-item wow fadeInUp delay-0-3s" href="contact.php">
                        <img src="assets/images/client-logos/client-logo-six2.png" alt="Client Logo">
                    </a>
                    <a class="client-logo-item wow fadeInUp delay-0-4s" href="contact.php">
                        <img src="assets/images/client-logos/client-logo-six3.png" alt="Client Logo">
                    </a>
                    <a class="client-logo-item wow fadeInUp delay-0-5s" href="contact.php">
                        <img src="assets/images/client-logos/client-logo-six4.png" alt="Client Logo">
                    </a>
                    <a class="client-logo-item wow fadeInUp delay-0-6s" href="contact.php">
                        <img src="assets/images/client-logos/client-logo-six5.png" alt="Client Logo">
                    </a>
                    <a class="client-logo-item wow fadeInUp delay-0-2s" href="contact.php">
                        <img src="assets/images/client-logos/client-logo-six6.png" alt="Client Logo">
                    </a>
                    <a class="client-logo-item wow fadeInUp delay-0-3s" href="contact.php">
                        <img src="assets/images/client-logos/client-logo-six7.png" alt="Client Logo">
                    </a>
                    <a class="client-logo-item wow fadeInUp delay-0-4s" href="contact.php">
                        <img src="assets/images/client-logos/client-logo-six8.png" alt="Client Logo">
                    </a>
                    <a class="client-logo-item wow fadeInUp delay-0-5s" href="contact.php">
                        <img src="assets/images/client-logos/client-logo-six9.png" alt="Client Logo">
                    </a>
                    <a class="client-logo-item wow fadeInUp delay-0-6s" href="contact.php">
                        <img src="assets/images/client-logos/client-logo-six10.png" alt="Client Logo">
                    </a>
                </div>
            </div>
            <div class="bg-lines">
                <span></span><span></span>
                <span></span><span></span>
            </div>
        </div> -->

        <section class="client-logo-area pt-130 rpt-100 pb-100 rpb-70">
            <div class="container">
                <div class="section-title text-center mb-60">
                    <h4>We Have 1520+Global Clients</h4>
                </div>
                <div class="client-logo-wrap">
                    <a class="client-logo-item wow fadeInUp delay-0-2s" href="contact.php">
                        <img src="assets/images/client-logos/client-logo1.png" alt="Client Logo">
                    </a>
                    <a class="client-logo-item wow fadeInUp delay-0-3s" href="contact.php">
                        <img src="assets/images/client-logos/client-logo2.png" alt="Client Logo">
                    </a>
                    <a class="client-logo-item wow fadeInUp delay-0-4s" href="contact.php">
                        <img src="assets/images/client-logos/client-logo3.png" alt="Client Logo">
                    </a>
                    <a class="client-logo-item wow fadeInUp delay-0-5s" href="contact.php">
                        <img src="assets/images/client-logos/client-logo4.png" alt="Client Logo">
                    </a>
                    <a class="client-logo-item wow fadeInUp delay-0-6s" href="contact.php">
                        <img src="assets/images/client-logos/client-logo5.png" alt="Client Logo">
                    </a>
                    <a class="client-logo-item wow fadeInUp delay-0-7s" href="contact.php">
                        <img src="assets/images/client-logos/client-logo6.png" alt="Client Logo">
                    </a>
                </div>
            </div>
        </section>
        <!-- Client Logo Two end -->


        <!-- footer area start -->
        <?php
        include './partial/footer.php';
        ?>
        <!-- footer area end -->

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