<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Bhagwant Construction</title>
    <!-- Stylesheets -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/meanmenu.min.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">

    <!-- Color Switcher Mockup -->
    <link href="assets/css/color-switcher-design.css" rel="stylesheet">

    <!-- Color Themes -->
    <link id="theme-color-file" href="assets/css/color-themes/default-color.css" rel="stylesheet">

    <link rel="shortcut icon" href="assets/images/Bhagwant Logo PNG.png" type="image/x-icon">
    <link rel="icon" href="assets/images/Bhagwant Logo PNG.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

    <div class="page-wrapper">

        <!-- Cursor -->
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
        <!-- Cursor End -->

        <!-- Preloader -->

        <!-- End Preloader -->

        <!-- Main Header -->
        <?php include 'header.php'; ?>
        <!-- End Main Header -->


        <style>
        .overlay-section {
            position: relative;
            background-size: cover;
            background-position: center;
            z-index: 1;
            overflow: hidden;
        }

        .overlay-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgb(47 127 191);
            /* 0.5 = 50% black overlay */
            z-index: 2;
        }

        .overlay-section .auto-container {
            position: relative;
            z-index: 3;
            /* Content stays above the overlay */
        }
        </style>

        <!-- Page Title -->
        <section class="page-title overlay-section"
            style="background-image:url(assets/images/construction-worker-silhouette-work-place.jpg)">
            <div class="auto-container">
                <h2>Our Services</h2>
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li>Our Services</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- End Page Title -->

        <!-- Customer One -->
        <section class="customer-one style-two">
            <div class="auto-container">
                <div class="customer-one_bg">
                    <div class="customer-one_pattern"
                        style="background-image:url(assets/images/background/pattern-1.png)"></div>
                </div>
                <div class="inner-container">
                    <div class="sec-title centered">
                        <div class="sec-title_title">Our Services</div>
                        <h2 class="sec-title_heading">What We Build for <br> Customer</h2>
                    </div>

                    <div class="row clearfix">

                        <!-- Customer Block One -->
                        <div class="customer-block_one col-lg-4 col-md-6 col-sm-12">
                            <div class="customer-block_one-inner wow fadeInLeft" data-wow-delay="0ms"
                                data-wow-duration="1500ms">
                                <div class="customer-block_one-bg"
                                    style="background-image:url(assets/images/background/choose-one_bg.jpg)"></div>
                                <!-- <div class="customer-block_one-number">01</div> -->
                                <div class="customer-block_one-icon">
                                    <img src="assets/images/icons/customer-1.svg" alt="" style="width: 60px;" />
                                </div>
                                <h3 class="customer-block_one-title" style="font-size: 25px;"><a href="#">Roads &
                                        Highways
                                    </a></h3>
                                <div class="customer-block_one-text">We specialize in the construction and development
                                    of robust road and highway networks. Our projects, from high-capacity expressways to
                                    essential rural access roads</div>
                                <!-- <a class="customer-block_one-more" href="#">Read More <i
                                        class="fa-classic fa-solid fa-plus fa-fw"></i></a> -->
                            </div>
                        </div>

                        <!-- Customer Block One -->
                        <div class="customer-block_one col-lg-4 col-md-6 col-sm-12">
                            <div class="customer-block_one-inner wow fadeInUp" data-wow-delay="0ms"
                                data-wow-duration="1500ms">
                                <div class="customer-block_one-bg"
                                    style="background-image:url(assets/images/background/choose-one_bg.jpg)"></div>
                                <!-- <div class="customer-block_one-number">02</div> -->
                                <div class="customer-block_one-icon">
                                    <img src="assets/images/icons/customer-2.svg" alt="" style="width: 60px;" />
                                </div>
                                <h3 class="customer-block_one-title" style="font-size: 25px;"><a href="#">Industrial &
                                        Educational Building
                                        Construction
                                    </a></h3>
                                <div class="customer-block_one-text">We provide turnkey construction services for
                                    industrial and educational facilities. This encompasses the development of robust
                                    industrial structures</div>
                                <!-- <a class="customer-block_one-more" href="#">Read More <i
                                        class="fa-classic fa-solid fa-plus fa-fw"></i></a> -->
                            </div>
                        </div>

                        <!-- Customer Block One -->
                        <div class="customer-block_one col-lg-4 col-md-6 col-sm-12">
                            <div class="customer-block_one-inner wow fadeInRight" data-wow-delay="0ms"
                                data-wow-duration="1500ms">
                                <div class="customer-block_one-bg"
                                    style="background-image:url(assets/images/background/choose-one_bg.jpg)"></div>
                                <!-- <div class="customer-block_one-number">03</div> -->
                                <div class="customer-block_one-icon">
                                    <img src="assets/images/icons/customer-3.svg" alt="" style="width: 60px;" />
                                </div>
                                <h3 class="customer-block_one-title" style="font-size: 25px;"><a href="#">Bridges &
                                        Flyovers
                                    </a>
                                </h3>
                                <div class="customer-block_one-text">We deliver engineering excellence in the
                                    construction of bridges and flyovers. Our solutions are designed to alleviate
                                    traffic congestion and optimize transit efficiency. We integrate innovative design
                                </div>
                                <!-- <a class="customer-block_one-more" href="#">Read More <i
                                        class="fa-classic fa-solid fa-plus fa-fw"></i></a> -->
                            </div>
                        </div>

                        <!-- Customer Block One -->
                        <div class="customer-block_one col-lg-4 col-md-6 col-sm-12">
                            <div class="customer-block_one-inner wow fadeInLeft" data-wow-delay="0ms"
                                data-wow-duration="1500ms">
                                <div class="customer-block_one-bg"
                                    style="background-image:url(assets/images/background/choose-one_bg.jpg)"></div>
                                <!-- <div class="customer-block_one-number">04</div> -->
                                <div class="customer-block_one-icon">
                                    <img src="assets/images/icons/customer-1.svg" alt="" style="width: 60px;" />
                                </div>
                                <h3 class="customer-block_one-title" style="font-size: 25px;"><a href="#">Grade
                                        Separators
                                    </a></h3>
                                <div class="customer-block_one-text">To enhance traffic flow and minimize intersection
                                    delays, we design and construct precision-engineered grade separators. Our focus is
                                    on reducing accident risks and improving commuter convenience</div>
                                <!-- <a class="customer-block_one-more" href="#">Read More <i
                                        class="fa-classic fa-solid fa-plus fa-fw"></i></a> -->
                            </div>
                        </div>

                        <!-- Customer Block One -->
                        <div class="customer-block_one col-lg-4 col-md-6 col-sm-12">
                            <div class="customer-block_one-inner wow fadeInUp" data-wow-delay="0ms"
                                data-wow-duration="1500ms">
                                <div class="customer-block_one-bg"
                                    style="background-image:url(assets/images/background/choose-one_bg.jpg)"></div>
                                <!-- <div class="customer-block_one-number">05</div> -->
                                <div class="customer-block_one-icon">
                                    <img src="assets/images/icons/customer-2.svg" alt="" style="width: 60px;" />
                                </div>
                                <h3 class="customer-block_one-title" style="font-size: 25px;"><a href="#"> Sports
                                        Infrastructure Development
                                    </a></h3>
                                <div class="customer-block_one-text">We specialize in the construction of
                                    high-performance sports facilities, ranging from stadiums to comprehensive sports
                                    complexes. Our projects are designed to meet international standards</div>
                                <!-- <a class="customer-block_one-more" href="#">Read More <i
                                        class="fa-classic fa-solid fa-plus fa-fw"></i></a> -->
                            </div>
                        </div>

                        <!-- Customer Block One -->
                        <div class="customer-block_one col-lg-4 col-md-6 col-sm-12">
                            <div class="customer-block_one-inner wow fadeInRight" data-wow-delay="0ms"
                                data-wow-duration="1500ms">
                                <div class="customer-block_one-bg"
                                    style="background-image:url(assets/images/background/choose-one_bg.jpg)"></div>
                                <!-- <div class="customer-block_one-number">06</div> -->
                                <div class="customer-block_one-icon">
                                    <img src="assets/images/icons/customer-3.svg" alt="" style="width: 60px;" />
                                </div>
                                <h3 class="customer-block_one-title" style="font-size: 25px;"><a href="#">Residential
                                        Construction
                                    </a>
                                </h3>
                                <div class="customer-block_one-text">Our residential construction services focus on
                                    developing homes that prioritize comfort, safety, and enduring value.We undertake
                                    diverse residential projects, from independent villas to large-scale apartment
                                    complexes.
                                </div>
                                <!-- <a class="customer-block_one-more" href="#">Read More <i
                                        class="fa-classic fa-solid fa-plus fa-fw"></i></a> -->
                            </div>
                        </div>

                        <div class="customer-block_one col-lg-4 col-md-6 col-sm-12">
                            <div class="customer-block_one-inner wow fadeInRight" data-wow-delay="0ms"
                                data-wow-duration="1500ms">
                                <div class="customer-block_one-bg"
                                    style="background-image:url(assets/images/background/choose-one_bg.jpg)"></div>
                                <!-- <div class="customer-block_one-number">06</div> -->
                                <div class="customer-block_one-icon">
                                    <img src="assets/images/icons/customer-3.svg" alt="" style="width: 60px;" />
                                </div>
                                <h3 class="customer-block_one-title" style="font-size: 25px;"><a href="#">Commercial
                                        Construction

                                    </a>
                                </h3>
                                <div class="customer-block_one-text">We deliver high-performance commercial spaces,
                                    including modern office buildings, retail centers, malls, and business hubs.Our
                                    projects emphasize delivering aesthetically appealing</div>
                                <!-- <a class="customer-block_one-more" href="#">Read More <i
                                        class="fa-classic fa-solid fa-plus fa-fw"></i></a> -->
                            </div>
                        </div>


                        <div class="customer-block_one col-lg-4 col-md-6 col-sm-12">
                            <div class="customer-block_one-inner wow fadeInRight" data-wow-delay="0ms"
                                data-wow-duration="1500ms">
                                <div class="customer-block_one-bg"
                                    style="background-image:url(assets/images/background/choose-one_bg.jpg)"></div>
                                <!-- <div class="customer-block_one-number">06</div> -->
                                <div class="customer-block_one-icon">
                                    <img src="assets/images/icons/customer-3.svg" alt="" style="width: 60px;" />
                                </div>
                                <h3 class="customer-block_one-title" style="font-size: 25px;"><a href="#">Civil Turnkey
                                        Projects


                                    </a>
                                </h3>
                                <div class="customer-block_one-text">We manage civil turnkey projects with complete
                                    accountability, from initial concept to final handover.Our comprehensive services
                                    include design, execution, and timely delivery.</div>
                                <!-- <a class="customer-block_one-more" href="#">Read More <i
                                        class="fa-classic fa-solid fa-plus fa-fw"></i></a> -->
                            </div>
                        </div>


                        <div class="customer-block_one col-lg-4 col-md-6 col-sm-12">
                            <div class="customer-block_one-inner wow fadeInRight" data-wow-delay="0ms"
                                data-wow-duration="1500ms">
                                <div class="customer-block_one-bg"
                                    style="background-image:url(assets/images/background/choose-one_bg.jpg)"></div>
                                <!-- <div class="customer-block_one-number">06</div> -->
                                <div class="customer-block_one-icon">
                                    <img src="assets/images/icons/customer-3.svg" alt="" style="width: 60px;" />
                                </div>
                                <h3 class="customer-block_one-title" style="font-size: 25px;"><a href="#">PEB Turnkey
                                        Projects
                                    </a>
                                </h3>
                                <div class="customer-block_one-text">Our Pre-Engineered Building (PEB) solutions offer
                                    rapid construction, cost-efficiency, and design flexibility. We provide complete
                                    turnkey execution, encompassing design, fabrication, </div>
                                <!-- <a class="customer-block_one-more" href="#">Read More <i
                                        class="fa-classic fa-solid fa-plus fa-fw"></i></a> -->
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>
        <!-- End Customer One -->







        <!-- Main Footer -->
        <?php include_once 'footer.php'; ?>
        <!-- End Main Footer -->




    </div>
    <!-- End PageWrapper -->

    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/parallax.min.js"></script>
    <script src="assets/js/tilt.jquery.min.js"></script>
    <script src="assets/js/jquery.paroller.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/backtotop.js"></script>
    <script src="assets/js/odometer.js"></script>
    <script src="assets/js/parallax-scroll.js"></script>

    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/SplitText.min.js"></script>
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <script src="assets/js/ScrollToPlugin.min.js"></script>
    <script src="assets/js/ScrollSmoother.min.js"></script>

    <script src="assets/js/jquery.marquee.min.js"></script>
    <script src="assets/js/validate.js"></script>
    <script src="assets/js/typeit.js"></script>
    <script src="assets/js/jquery.marquee.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/nav-tool.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/element-in-view.js"></script>
    <script src="assets/js/color-settings.js"></script>
    <script src="assets/js/script.js"></script>

</body>

</html>