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
                <h2>Contact Us</h2>
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- End Page Title -->

        <!-- Contact Three -->
        <section class="contact-three">
            <div class="page-top_pattern" style="background-image:url(assets/images/background/pattern-13.png)"></div>
            <div class="auto-container">
                <div class="row clearfix">

                    <!-- Form Column -->
                    <div class="contact-three_form-column col-lg-7 col-md-6 col-sm-12">
                        <div class="contact-three_form-outer">
                            <!-- Sec Title -->
                            <div class="sec-title">
                                <div class="sec-title_title">
                                    Keep In Touch
                                </div>
                                <h3 class="sec-title_heading">Get in touch with our <br> lovely team </h3>
                            </div>

                            <!-- Contact Form -->
                            <div class="contact-form">
                                <form method="post" action="mail.php">
                                    <div class="row clearfix">

                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <input type="text" name="username" placeholder="First Name" required>
                                        </div>

                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <input type="text" name="lastname" placeholder="Last Name" required>
                                        </div>

                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <input type="email" name="email" placeholder="Email address" required>
                                        </div>

                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <input type="text" name="services" placeholder="Services" required>
                                        </div>

                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <textarea class="" name="message" placeholder="Your Massage"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <!-- Button Box -->
                                            <button class="theme-btn btn-style-three">
                                                <span class="btn-wrap">
                                                    <span class="text-one">Submit Now <i><img
                                                                src="assets/images/icons/arrow-1.svg"
                                                                alt="" /></i></span>
                                                    <span class="text-two">Submit Now <i><img
                                                                src="assets/images/icons/arrow-1.svg"
                                                                alt="" /></i></span>
                                                </span>
                                            </button>
                                        </div>

                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>

                    <!-- Info Column -->
                    <div class="contact-three_info-column col-lg-5 col-md-6 col-sm-12">
                        <div class="contact-three_info-outer">
                            <h3 class="mb-5">Contact <br> Information</h3>
                            <!-- <div class="contact-info_text">We’ve grown up with the internet revolution, <br> and we know
                                how to deliver on its</div> -->

                            <!-- Info Block -->
                            <div class="contact-info_block">
                                <div class="contact-info_block-inner">
                                    <div class="contact-info_block-icon">
                                        <i class="fa-classic fa-solid fa-location-dot fa-fw"></i>
                                    </div>
                                    <h4>Location</h4>
                                    <p>CTS No.4702, Building-A, 2nd Floor, Office No-210, Bramha Sky Uzuri, Near Dr.
                                        Babasaheb Ambedkar Chowk, Pimpri, Pune-411018.
                                    </p>
                                </div>
                            </div>

                            <!-- Info Block -->
                            <div class="contact-info_block">
                                <div class="contact-info_block-inner">
                                    <div class="contact-info_block-icon">
                                        <i class="fa-classic fa-solid fa-phone fa-fw"></i>
                                    </div>
                                    <h4>Phone</h4>
                                    <p>+91 9921489499 <br> bhagwant.construction@gmail.com</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Faq One -->

        <!-- Map One -->
        <section class="map-one">
            <div class="auto-container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60483.06058757997!2d73.78601600294922!3d18.655410269021075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b99016b6fd6f%3A0xafc09d5f7c8262ab!2sDr%20Babasaheb%20Ambedkar%20chowk!5e0!3m2!1sen!2sin!4v1754462751123!5m2!1sen!2sin"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
        <!-- End Map One -->




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