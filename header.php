<header class="main-header header-style-one">

    <!-- Header Lower -->
    <div class="header-lower">
        <div class="auto-container">
            <div class="inner-container">
                <div class="d-flex justify-content-between align-items-center">

                    <div class="logo-box">
                        <div class="logo"><a href="index.php"><img src="assets/images/Bhagwant Logo.png" alt=""
                                    title="Constrc" width="200"></a></div>
                    </div>

                    <div class="nav-outer d-flex flex-wrap">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class=" has-mega-menu"><a href="index.php">Home</a>

                                    </li>
                                    <li class=""><a href="about.php">About Us</a>

                                    </li>
                                    <li class=""><a href="services.php">Services</a>

                                    </li>
                                    <li class=""><a href="projects.php">projects</a>

                                    </li>
                                    <li class=""><a href="career.php">Career</a>

                                    </li>
                                    <li class=""><a href="product.php">Products</a>

                                    </li>

                                    <li class=""><a href="contact.php">Contact Us</a>

                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>

                    <!-- Main Menu End-->
                    <div class="outer-box d-flex align-items-center flex-wrap">

                        <!-- Search Btn -->
                        <!-- <div class="search-box-btn search-box-outer"><span class="icon fa fa-search"></span></div> -->

                        <!-- Button Box -->
                        <div class="main-header_button">
                            <button type="button" class="theme-btn btn-style-three" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                <span class="btn-wrap">
                                    <span class="text-one">Enquire Now <i><img src="assets/images/icons/arrow-1.svg"
                                                alt="" /></i></span>
                                    <span class="text-two">Enquire Now <i><img src="assets/images/icons/arrow-1.svg"
                                                alt="" /></i></span>
                                </span>
                            </button>
                        </div>


                        <!-- About Widget -->
                        <!-- <span class="about-widget">
                            <span class="hamburger">
                                <span class="top-bun"></span>
                                <span class="meat"></span>
                                <span class="bottom-bun"></span>
                            </span>
                        </span> -->

                        <!-- Mobile Navigation Toggler -->
                        <div class="mobile-nav-toggler"><span class="icon fa-classic fa-solid fa-bars fa-fw"></span>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--End Header Lower-->


    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon fa-xmark"></span></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="index.php"><img src="assets/images/Bhagwant Logo.png" alt="" title=""
                        width="150"></a>
            </div>
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
        </nav>
    </div>
    <!-- End Mobile Menu -->

</header>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Enquire Now</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="contact-form">
                    <form method="post" action="send.php">
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
                                <button class="theme-btn btn-style-three" type="submit">
                                    <span class="btn-wrap">
                                        <span class="text-one">Submit Now <i><img src="assets/images/icons/arrow-1.svg"
                                                    alt="" /></i></span>
                                        <span class="text-two">Submit Now <i><img src="assets/images/icons/arrow-1.svg"
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