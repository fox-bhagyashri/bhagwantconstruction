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

    <link rel="shortcut icon" href="assets/images/Bhagwant Logo.png" type="image/x-icon">
    <link rel="icon" href="assets/images/Bhagwant Logo.png" type="image/x-icon">

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
                <h2>About Us</h2>
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- End Page Title -->

        <!-- About One -->
        <section class="about-one">
            <div class="about-one_pattern-layer" style="background-image:url(assets/images/background/pattern-1.png)">
            </div>
            <div class="about-one_cap" style="background-image:url(assets/images/icons/about-cap.png)"></div>
            <div class="auto-container">
                <div class="sec-title title-anim">
                    <div class="sec-title_title">WHO WE ARE</div>
                    <h2 class="sec-title_heading" style="left: 0px;">About <span
                            style="color: rgb(191 142 47);">Bhagwant
                            Construction</span></h2>
                </div>

                <div class="row clearfix">

                    <!-- Image Column -->
                    <!-- <div class="about-one_image-column col-lg-7 col-md-12 col-sm-12">
                        <div class="about-one_image-outer">
                            <div class="row clearfix">
                                <div class="column col-lg-4 col-md-12 col-sm-12">
                                    <div class="image">
                                        <img src="assets/images/company/WhatsApp Image 2025-07-26 at 4.42.06 PM (12).jpeg"
                                            alt="" />
                                      
                                    </div>



                                </div>
                                <div class="column col-lg-8 col-md-12 col-sm-12">
                                    <div class="image">
                                        <img src="assets/images/company/WhatsApp Image 2025-07-26 at 4.42.06 PM (3).jpeg"
                                            alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- Content Column -->
                    <div class="about-one_content-column col-lg-12 col-md-12 col-sm-12">
                        <div class="about-one_content-outer" style="    margin-top: 68px;">

                            <!-- Feature Block One -->
                            <div class="feature-block_one">
                                <!-- <h4 class="feature-block_one-title">Our vision</h4> -->
                                <div class="feature-block_one-text">Established in 2005, we have grown into a leading
                                    force in the engineering and construction sector, renowned for delivering complex
                                    and impactful projects across India. With over a decade of dedicated service, we
                                    have built a reputation for excellence, reliability, and innovation. We are
                                    <b>government civil contractors with 20 years of experience.</b>
                                </div><br>

                                <div class="feature-block_one-text">Our expertise spans a diverse portfolio, from
                                    critical infrastructure like roads and highways to specialized constructions such as
                                    industrial facilities, educational institutions, and residential complexes. We are
                                    driven by a commitment to contribute to national development by building sustainable
                                    and future-ready infrastructure that enhances connectivity, supports economic
                                    growth, and improves quality of life. </div><br>


                                <div class="feature-block_one-text"> Our success is founded on a strong foundation of
                                    technical proficiency, a highly skilled workforce, and an unwavering dedication to
                                    client satisfaction.
                                </div>


                            </div>




                        </div>
                    </div>

                </div>



                <div class="row clearfix">

                    <div class="about-one_content-column col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="image" style="padding: 34px;">
                                    <img src="assets/images/company/WhatsApp Image 2025-08-25 at 1.07.08 PM (1).jpeg"
                                        alt="" class="shadow p-3 mb-5 bg-body rounded" />

                                    <h6 class="text-center mt-4">Sachin Jadhav</h6>
                                    <h4 class="text-center " style="    color: #0d66ad;">Founder</h4>


                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="about-one_content-outer" style="    margin-top: 64px;">

                                    <!-- Feature Block One -->
                                    <div class="feature-block_one" style="padding: 34px;">
                                        <h4 class="feature-block_one-title" style="font-size: 32px;">About <span
                                                style="color:rgb(47 127 191);">Director
                                            </span></h4>
                                        <div class="feature-block_one-text"> With over <strong>20 years of
                                                experience</strong> in the construction industry,
                                            <strong>Sachin Jadhav</strong> has built a reputation for excellence,
                                            innovation,
                                            and trust. His vision is to lead projects that not only meet the highest
                                            standards
                                            of engineering and construction but also create a lasting positive impact on
                                            communities and infrastructure development.
                                        </div>


                                    </div>




                                </div>

                            </div>
                        </div>

                    </div>

                    <!-- Image Column -->
                    <div class="about-one_content-column col-lg-12 col-md-12 col-sm-12" style="background: #4296da1a;">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="image" style="padding: 34px;">
                                    <img src="assets/images/sl_012322_48100_15.jpg" alt="" />
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="about-one_content-outer" style="    margin-top: 64px;">

                                    <!-- Feature Block One -->
                                    <div class="feature-block_one" style="padding: 34px;">
                                        <h4 class="feature-block_one-title" style="font-size: 32px;">Our <span
                                                style="color:rgb(47 127 191);">Vision
                                            </span></h4>
                                        <div class="feature-block_one-text">To be the preeminent and most trusted
                                            engineering
                                            and construction company, recognized for our innovative approach, advanced
                                            methodologies, and the transformative impact of our projects on communities
                                            and
                                            infrastructure development.
                                        </div>


                                    </div>




                                </div>

                            </div>
                        </div>

                    </div>

                    <!-- Content Column -->
                    <div class="about-one_content-column col-lg-12 col-md-12 col-sm-12" style="background: #4296da1a;">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="image" style="padding: 34px;">
                                    <img src="assets/images/2922242_26964 (1).jpg" alt="" />
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="about-one_content-outer" style="    margin-top: 64px;">

                                    <!-- Feature Block One -->
                                    <div class="feature-block_one" style="padding: 34px;">
                                        <h4 class="feature-block_one-title" style="font-size: 32px;">Our <span
                                                style="color:rgb(47 127 191);">Mission
                                            </span></h4>
                                        <div class="feature-block_one-text">To consistently deliver superior engineering
                                            and construction solutions that exceed client expectations in quality,
                                            safety, and timely completion. We are committed to fostering innovation,
                                            embracing sustainable practices, and building lasting relationships through
                                            integrity and collaborative partnerships.
                                        </div>


                                    </div>




                                </div>

                            </div>
                        </div>

                    </div>




                </div>

            </div>
        </section>
        <!-- End About One -->



        <!-- Main Footer -->
        <?php include 'footer.php'; ?>
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