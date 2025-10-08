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
                <h2>Career</h2>
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li>Career</li>
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

                <div class="row clearfix">


                    <!-- Content Column -->

                    <div class="contact-three_form-column col-lg-8 col-md-8 col-sm-12 m-auto">
                        <div class="contact-three_form-outer" style="    background: #bf8e2f36;padding: 36px;">
                            <!-- Sec Title -->
                            <div class="sec-title">

                                <h3 class="">Career Form</h3>
                            </div>

                            <!-- Contact Form -->
                            <div class="contact-form">
                                <form method="post" action="careerform.php" enctype="multipart/form-data">
                                    <div class="row clearfix">

                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <input type="text" name="name" placeholder="Full Name" required>
                                        </div>

                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <input type="tel" name="phone" placeholder="Contact Number"
                                                oninput="this.value = this.value.replace(/[^0-9]/g, '');"
                                                class="form-control" maxlength="10" pattern="[0-9]{10}" required>
                                        </div>

                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <input type="email" name="email" placeholder="Email address" required>
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <input type="text" name="address" placeholder="Address" required>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <input type="text" name="position" placeholder="Position" required>
                                        </div>

                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <input type="file" name="resume" class="form-control" placeholder="Services"
                                                required
                                                style="height: 60px; background: none rgb(245, 245, 245);border-radius: 50px;    padding: 16px  30px;">
                                        </div>

                                        <!-- <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <textarea class="" name="message" placeholder="Your Massage"></textarea>
                                        </div> -->

                                        <div class="form-group">
                                            <!-- Button Box -->
                                            <button class="theme-btn btn-style-three" type="submit">
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