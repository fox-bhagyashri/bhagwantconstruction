<?php
include_once 'conn.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
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
        .gallery img {
            width: 100%;
            border-radius: 10px;
            cursor: pointer;
            transition: transform 0.2s;
        }

        .gallery img:hover {
            transform: scale(1.05);
        }

        /* Modal Styles */
        .modal-custom {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
        }

        .modal-content-custom {
            max-width: 90%;
            max-height: 80%;
            border-radius: 10px;
        }

        .close-custom {
            position: absolute;
            top: 20px;
            right: 30px;
            font-size: 40px;
            font-weight: bold;
            color: white;
            cursor: pointer;
        }
        </style>


        <!-- Page Title -->
        <section class="page-title overlay-section"
            style="background-image:url(assets/images/construction-worker-silhouette-work-place.jpg)">
            <div class="auto-container">
                <h2>Our Projects</h2>
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li>Our Projects</li>
                    </ul>
                </div>
            </div>
        </section>



        <!-- Project Four -->
        <section class="about-one" style="    padding: 94px 0px 70px;">

            <div class="container py-4">

                <div class="row gallery g-3">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="    justify-content: center;">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true" style="font-size: 18px;">Ravet</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false" style="font-size: 18px;">Talegoan</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                                aria-selected="false" style="font-size: 18px;">Hinjawadi</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contactt-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-contactt" type="button" role="tab" aria-controls="pills-contactt"
                                aria-selected="false" style="font-size: 18px;">Pimpri Chinchwad</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-pune-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-pune" type="button" role="tab" aria-controls="pills-pune"
                                aria-selected="false" style="font-size: 18px;">Pune Division</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-Mawal-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-Mawal" type="button" role="tab" aria-controls="pills-Mawal"
                                aria-selected="false" style="font-size: 18px;">Mawal</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-Ambale-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-Ambale" type="button" role="tab" aria-controls="pills-Ambale"
                                aria-selected="false" style="font-size: 18px;">Ambale</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">

                            <div class="row">
                                <?php 
                                           
                                           $sql = "SELECT * FROM projects WHERE site_name='Ravet'";
                                           $result = $conn->query($sql);
                                           if ($result->num_rows > 0) {
                                             // output data of each row
                                                $srno = 1;
                                             while($row = $result->fetch_assoc()) {
                                           ?>

                                <div class="col-6 col-md-4 col-lg-3 mb-3">
                                    <img src="admin/<?php echo $row["image"] ?>" alt="Image 1">

                                </div>
                                <?php
                                             }
                                            }
                                            ?>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">

                            <div class="row">
                                <?php 
                                           
                                           $sql = "SELECT * FROM projects WHERE site_name='Talegoan'";
                                           $result = $conn->query($sql);
                                           if ($result->num_rows > 0) {
                                             // output data of each row
                                                $srno = 1;
                                             while($row = $result->fetch_assoc()) {
                                           ?>

                                <div class="col-6 col-md-4 col-lg-3 mb-3">
                                    <img src="admin/<?php echo $row["image"] ?>" alt="Image 1">

                                </div>
                                <?php
                                             }
                                            }
                                            ?>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">

                            <div class="row">
                                <?php 
                                           
                                           $sql = "SELECT * FROM projects WHERE site_name='Hinjawadi'";
                                           $result = $conn->query($sql);
                                           if ($result->num_rows > 0) {
                                             // output data of each row
                                                $srno = 1;
                                             while($row = $result->fetch_assoc()) {
                                           ?>

                                <div class="col-6 col-md-4 col-lg-3 mb-3">
                                    <img src="admin/<?php echo $row["image"] ?>" alt="Image 1">

                                </div>
                                <?php
                                             }
                                            }
                                            ?>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="pills-contactt" role="tabpanel"
                            aria-labelledby="pills-contactt-tab">

                            <div class="row">
                                <?php 
                                           
                                           $sql = "SELECT * FROM projects WHERE site_name='Pimpri Chinchwad'";
                                           $result = $conn->query($sql);
                                           if ($result->num_rows > 0) {
                                             // output data of each row
                                                $srno = 1;
                                             while($row = $result->fetch_assoc()) {
                                           ?>

                                <div class="col-6 col-md-4 col-lg-3 mb-3">
                                    <img src="admin/<?php echo $row["image"] ?>" alt="Image 1">

                                </div>
                                <?php
                                             }
                                            }
                                            ?>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="pills-pune" role="tabpanel" aria-labelledby="pills-pune-tab">

                            <div class="row">
                                <?php 
                                           
                                           $sql = "SELECT * FROM projects WHERE site_name='Pune Division'";
                                           $result = $conn->query($sql);
                                           if ($result->num_rows > 0) {
                                             // output data of each row
                                                $srno = 1;
                                             while($row = $result->fetch_assoc()) {
                                           ?>

                                <div class="col-6 col-md-4 col-lg-3 mb-3">
                                    <img src="admin/<?php echo $row["image"] ?>" alt="Image 1">

                                </div>
                                <?php
                                             }
                                            }
                                            ?>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="pills-Mawal" role="tabpanel" aria-labelledby="pills-Mawal-tab">

                            <div class="row">
                                <?php 
                                           
                                           $sql = "SELECT * FROM projects WHERE site_name='Mawal'";
                                           $result = $conn->query($sql);
                                           if ($result->num_rows > 0) {
                                             // output data of each row
                                                $srno = 1;
                                             while($row = $result->fetch_assoc()) {
                                           ?>

                                <div class="col-6 col-md-4 col-lg-3 mb-3">
                                    <img src="admin/<?php echo $row["image"] ?>" alt="Image 1">

                                </div>
                                <?php
                                             }
                                            }
                                            ?>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="pills-Ambale" role="tabpanel" aria-labelledby="pills-Ambale-tab">

                            <div class="row">
                                <?php 
                                           
                                           $sql = "SELECT * FROM projects WHERE site_name='Ambale'";
                                           $result = $conn->query($sql);
                                           if ($result->num_rows > 0) {
                                             // output data of each row
                                                $srno = 1;
                                             while($row = $result->fetch_assoc()) {
                                           ?>

                                <div class="col-6 col-md-4 col-lg-3 mb-3">
                                    <img src="admin/<?php echo $row["image"] ?>" alt="Image 1">

                                </div>
                                <?php
                                             }
                                            }
                                            ?>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </section>
        <!-- End Project Four -->
        <!-- Modal -->
        <!-- Modal -->
        <div id="myModal" class="modal-custom">
            <span class="close-custom">&times;</span>
            <img class="modal-content-custom" id="popupImg">
        </div>

        <script>
        const modal = document.getElementById("myModal");
        const modalImg = document.getElementById("popupImg");
        const closeBtn = document.querySelector(".close-custom");

        // Add click event to gallery images
        document.querySelectorAll(".gallery img").forEach(img => {
            img.addEventListener("click", () => {
                modal.style.display = "flex";
                modalImg.src = img.src;
            });
        });

        // Close modal when clicking X
        closeBtn.addEventListener("click", () => {
            modal.style.display = "none";
        });

        // Close modal when clicking outside image
        modal.addEventListener("click", (e) => {
            if (e.target === modal) {
                modal.style.display = "none";
            }
        });
        </script>


        <!-- Main Footer -->
        <?php include_once 'footer.php'; ?>
        <!-- End Main Footer -->

        <!-- Search Popup -->

        <!-- End Search Popup -->


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