<?php

session_start();
if(isset($_SESSION['user_id'])) {
    $connection = mysqli_connect('localhost', 'root', '', 'group-52');
    $stat = "select * from users where id = $_SESSION[user_id]";
    $query = mysqli_query($connection, $stat);
    $data = mysqli_fetch_assoc($query);
}

if(isset($_POST['logout'])) {
    session_destroy();

    header('location:index.php');
}

?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Rasalina - Personal Portfolio HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/default.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>

    <!-- preloader-start -->
    <div id="preloader">
        <div class="rasalina-spin-box"></div>
    </div>
    <!-- preloader-end -->

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area -->
    <header>
        <div id="sticky-header" class="menu__area transparent-header">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-12">
                        <div class="mobile__nav__toggler"><i class="fas fa-bars"></i></div>
                        <div class="menu__wrap">
                            <nav class="menu__nav">
                                <div class="logo">
                                    <a href="index.html" class="logo__black"><img src="assets/img/logo/logo_black.png"
                                            alt=""></a>
                                    <a href="index.html" class="logo__white"><img src="assets/img/logo/logo_white.png"
                                            alt=""></a>
                                </div>
                                <div class="navbar__wrap main__menu d-none d-xl-flex">
                                    <ul class="navigation">
                                        <li class="active"><a href="index.html">Home</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="services-details.html">Services</a></li>
                                        <li class="menu-item-has-children"><a href="#">Portfolio</a>
                                            <ul class="sub-menu">
                                                <li><a href="portfolio.html">Portfolio</a></li>
                                                <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#">Our Blog</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog.html">Our News</a></li>
                                                <li><a href="blog-details.html">News Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">contact me</a></li>
                                    </ul>
                                </div>
                                <div class="header__btn d-none d-md-block">
                                    <?php if(isset($_SESSION['user_id'])): ?>
                                        <!-- <a href="../logout.php" class="btn">Logout</a> -->
                                        <form action="" method="post">
                                            <button name="logout" class="btn">logout</button>
                                        </form>
                                    <?php else : ?>
                                    <a href="../login.php" class="btn">Login</a>
                                    <a href="../register.php" class="btn">Register</a>
                                    <?php endif ?>
                                </div>
                            </nav>
                        </div>
                        <!-- Mobile Menu  -->
                        <div class="mobile__menu">
                            <nav class="menu__box">
                                <div class="close__btn"><i class="fal fa-times"></i></div>
                                <div class="nav-logo">
                                    <a href="index.html" class="logo__black"><img src="assets/img/logo/logo_black.png"
                                            alt=""></a>
                                    <a href="index.html" class="logo__white"><img src="assets/img/logo/logo_white.png"
                                            alt=""></a>
                                </div>
                                <div class="menu__outer">
                                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                </div>
                                <div class="social-links">
                                    <ul class="clearfix">
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                        <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                        <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="menu__backdrop"></div>
                        <!-- End Mobile Menu -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-area-end -->

    <!-- main-area -->
    <main>

        <!-- banner-area -->
        <section class="banner">
            <div class="container custom-container">
                <div class="row align-items-center justify-content-center justify-content-lg-between">
                    <div class="col-lg-6 order-0 order-lg-2">
                        <div class="banner__img text-center text-xxl-end">
                            <img src="../uploads/profile/<?= $data['image'] ?? 'default.png' ?>" alt="">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="banner__content">
                            <h2 class="title wow fadeInUp" data-wow-delay=".2s"><span>I will give you Best</span> <br>
                                Product in the shortest time.</h2>
                            <p class="wow fadeInUp" data-wow-delay=".4s">I'm a Rasalina based product design & visual
                                designer focused on crafting clean & user‑friendly experiences</p>
                            <a href="about.html" class="btn banner__btn wow fadeInUp" data-wow-delay=".6s">more about
                                me</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="scroll__down">
                <a href="#aboutSection" class="scroll__link">Scroll down</a>
            </div>
            <div class="banner__video">
                <a href="https://www.youtube.com/watch?v=XHOmBV4js_E" class="popup-video"><i
                        class="fas fa-play"></i></a>

        </section>
        <!-- banner-area-end -->

        <!-- about-area -->
        <section id="aboutSection" class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <ul class="about__icons__wrap">
                            <li>
                                <img class="light" src="assets/img/icons/xd_light.png" alt="XD">
                                <img class="dark" src="assets/img/icons/xd.png" alt="XD">
                            </li>
                            <li>
                                <img class="light" src="assets/img/icons/skeatch_light.png" alt="Skeatch">
                                <img class="dark" src="assets/img/icons/skeatch.png" alt="Skeatch">
                            </li>
                            <li>
                                <img class="light" src="assets/img/icons/illustrator_light.png" alt="Illustrator">
                                <img class="dark" src="assets/img/icons/illustrator.png" alt="Illustrator">
                            </li>
                            <li>
                                <img class="light" src="assets/img/icons/hotjar_light.png" alt="Hotjar">
                                <img class="dark" src="assets/img/icons/hotjar.png" alt="Hotjar">
                            </li>
                            <li>
                                <img class="light" src="assets/img/icons/invision_light.png" alt="Invision">
                                <img class="dark" src="assets/img/icons/invision.png" alt="Invision">
                            </li>
                            <li>
                                <img class="light" src="assets/img/icons/photoshop_light.png" alt="Photoshop">
                                <img class="dark" src="assets/img/icons/photoshop.png" alt="Photoshop">
                            </li>
                            <li>
                                <img class="light" src="assets/img/icons/figma_light.png" alt="Figma">
                                <img class="dark" src="assets/img/icons/figma.png" alt="Figma">
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="about__content">
                            <div class="section__title">
                                <span class="sub-title">01 - About me</span>
                                <h2 class="title">I have transform your ideas into remarkable digital products</h2>
                            </div>
                            <div class="about__exp">
                                <div class="about__exp__icon">
                                    <img src="assets/img/icons/about_icon.png" alt="">
                                </div>
                                <div class="about__exp__content">
                                    <p>20+ Years Experience In this game, Means <br> Product Designing</p>
                                </div>
                            </div>
                            <p class="desc">I love to work in User Experience & User Interface designing. Because I love
                                to solve the design problem and find easy and better solutions to solve it. I always try
                                my best to make good user interface with the best user experience. I have been working
                                as a UX Designer</p>
                            <a href="about.html" class="btn">Download my resume</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->

        <!-- services-area -->
        <section class="services">
            <div class="container">
                <div class="services__title__wrap">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-5 col-lg-6 col-md-8">
                            <div class="section__title">
                                <span class="sub-title">02 - my Services</span>
                                <h2 class="title">Creates amazing digital experiences</h2>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 col-md-4">
                            <div class="services__arrow"></div>
                        </div>
                    </div>
                </div>
                <div class="row gx-0 services__active">
                    <div class="col-xl-3">
                        <div class="services__item">
                            <div class="services__thumb">
                                <a href="services-details.html"><img src="assets/img/images/services_img01.jpg"
                                        alt=""></a>
                            </div>
                            <div class="services__content">
                                <div class="services__icon">
                                    <img class="light" src="assets/img/icons/services_light_icon01.png" alt="">
                                    <img class="dark" src="assets/img/icons/services_icon01.png" alt="">
                                </div>
                                <h3 class="title"><a href="services-details.html">Business Strategy</a></h3>
                                <p>Strategy is a forward-looking plan for your brand’s behavior. Strategy is a
                                    forward-looking plan.</p>
                                <ul class="services__list">
                                    <li>Research & Data</li>
                                    <li>Branding & Positioning</li>
                                    <li>Business Consulting</li>
                                    <li>Go To Market</li>
                                </ul>
                                <a href="services-details.html" class="btn border-btn">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="services__item">
                            <div class="services__thumb">
                                <a href="services-details.html"><img src="assets/img/images/services_img02.jpg"
                                        alt=""></a>
                            </div>
                            <div class="services__content">
                                <div class="services__icon">
                                    <img class="light" src="assets/img/icons/services_light_icon02.png" alt="">
                                    <img class="dark" src="assets/img/icons/services_icon02.png" alt="">
                                </div>
                                <h3 class="title"><a href="services-details.html">Brand Strategy</a></h3>
                                <p>Strategy is a forward-looking plan for your brand’s behavior. Strategy is a
                                    forward-looking plan.</p>
                                <ul class="services__list">
                                    <li>User Research & Testing</li>
                                    <li>UX Design</li>
                                    <li>Visual Design</li>
                                    <li>Information Architecture</li>
                                </ul>
                                <a href="services-details.html" class="btn border-btn">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="services__item">
                            <div class="services__thumb">
                                <a href="services-details.html"><img src="assets/img/images/services_img03.jpg"
                                        alt=""></a>
                            </div>
                            <div class="services__content">
                                <div class="services__icon">
                                    <img class="light" src="assets/img/icons/services_light_icon03.png" alt="">
                                    <img class="dark" src="assets/img/icons/services_icon03.png" alt="">
                                </div>
                                <h3 class="title"><a href="services-details.html">Product Design</a></h3>
                                <p>Strategy is a forward-looking plan for your brand’s behavior. Strategy is a
                                    forward-looking plan.</p>
                                <ul class="services__list">
                                    <li>User Research & Testing</li>
                                    <li>UX Design</li>
                                    <li>Visual Design</li>
                                    <li>Information Architecture</li>
                                </ul>
                                <a href="services-details.html" class="btn border-btn">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="services__item">
                            <div class="services__thumb">
                                <a href="services-details.html"><img src="assets/img/images/services_img04.jpg"
                                        alt=""></a>
                            </div>
                            <div class="services__content">
                                <div class="services__icon">
                                    <img class="light" src="assets/img/icons/services_light_icon04.png" alt="">
                                    <img class="dark" src="assets/img/icons/services_icon04.png" alt="">
                                </div>
                                <h3 class="title"><a href="services-details.html">Visual Design</a></h3>
                                <p>Strategy is a forward-looking plan for your brand’s behavior. Strategy is a
                                    forward-looking plan.</p>
                                <ul class="services__list">
                                    <li>User Research & Testing</li>
                                    <li>UX Design</li>
                                    <li>Visual Design</li>
                                    <li>Information Architecture</li>
                                </ul>
                                <a href="services-details.html" class="btn border-btn">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="services__item">
                            <div class="services__thumb">
                                <a href="services-details.html"><img src="assets/img/images/services_img03.jpg"
                                        alt=""></a>
                            </div>
                            <div class="services__content">
                                <div class="services__icon">
                                    <img class="light" src="assets/img/icons/services_light_icon02.png" alt="">
                                    <img class="dark" src="assets/img/icons/services_icon02.png" alt="">
                                </div>
                                <h3 class="title"><a href="services-details.html">Web Development</a></h3>
                                <p>Strategy is a forward-looking plan for your brand’s behavior. Strategy is a
                                    forward-looking plan.</p>
                                <ul class="services__list">
                                    <li>User Research & Testing</li>
                                    <li>UX Design</li>
                                    <li>Visual Design</li>
                                    <li>Information Architecture</li>
                                </ul>
                                <a href="services-details.html" class="btn border-btn">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- services-area-end -->

        <!-- work-process-area -->
        <section class="work__process">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section__title text-center">
                            <span class="sub-title">03 - Working Process</span>
                            <h2 class="title">A clear product design process is the basis of success</h2>
                        </div>
                    </div>
                </div>
                <div class="row work__process__wrap">
                    <div class="col">
                        <div class="work__process__item">
                            <span class="work__process_step">Step - 01</span>
                            <div class="work__process__icon">
                                <img class="light" src="assets/img/icons/wp_light_icon01.png" alt="">
                                <img class="dark" src="assets/img/icons/wp_icon01.png" alt="">
                            </div>
                            <div class="work__process__content">
                                <h4 class="title">Discover</h4>
                                <p>Initial ideas or inspiration & Establishment of user needs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="work__process__item">
                            <span class="work__process_step">Step - 02</span>
                            <div class="work__process__icon">
                                <img class="light" src="assets/img/icons/wp_light_icon02.png" alt="">
                                <img class="dark" src="assets/img/icons/wp_icon02.png" alt="">
                            </div>
                            <div class="work__process__content">
                                <h4 class="title">Define</h4>
                                <p>Interpretation & Alignment of findings to project objectives.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="work__process__item">
                            <span class="work__process_step">Step - 03</span>
                            <div class="work__process__icon">
                                <img class="light" src="assets/img/icons/wp_light_icon03.png" alt="">
                                <img class="dark" src="assets/img/icons/wp_icon03.png" alt="">
                            </div>
                            <div class="work__process__content">
                                <h4 class="title">Develop</h4>
                                <p>Design-Led concept and Proposals hearted & assessed</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="work__process__item">
                            <span class="work__process_step">Step - 04</span>
                            <div class="work__process__icon">
                                <img class="light" src="assets/img/icons/wp_light_icon04.png" alt="">
                                <img class="dark" src="assets/img/icons/wp_icon04.png" alt="">
                            </div>
                            <div class="work__process__content">
                                <h4 class="title">Deliver</h4>
                                <p>Process outcomes finalised & Implemented</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- work-process-area-end -->

        <!-- portfolio-area -->
        <section class="portfolio">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section__title text-center">
                            <span class="sub-title">04 - Portfolio</span>
                            <h2 class="title">All creative work</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-12">
                        <ul class="nav nav-tabs portfolio__nav" id="portfolioTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all"
                                    type="button" role="tab" aria-controls="all" aria-selected="true">All</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="website-tab" data-bs-toggle="tab" data-bs-target="#website"
                                    type="button" role="tab" aria-controls="website"
                                    aria-selected="false">website</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="apps-tab" data-bs-toggle="tab" data-bs-target="#apps"
                                    type="button" role="tab" aria-controls="apps" aria-selected="false">mobile
                                    apps</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="dashboard-tab" data-bs-toggle="tab"
                                    data-bs-target="#dashboard" type="button" role="tab" aria-controls="dashboard"
                                    aria-selected="false">Dashboard</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="landing-tab" data-bs-toggle="tab" data-bs-target="#landing"
                                    type="button" role="tab" aria-controls="landing" aria-selected="false">landing
                                    page</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="branding-tab" data-bs-toggle="tab"
                                    data-bs-target="#branding" type="button" role="tab" aria-controls="branding"
                                    aria-selected="false">Branding</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="graphic-tab" data-bs-toggle="tab" data-bs-target="#graphic"
                                    type="button" role="tab" aria-controls="graphic" aria-selected="false">Graphic
                                    Design</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-content" id="portfolioTabContent">
                <div class="tab-pane show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                    <div class="container">
                        <div class="row gx-0 justify-content-center">
                            <div class="col">
                                <div class="portfolio__active">
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="assets/img/portfolio/portfolio_img01.jpg" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Apps Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="assets/img/portfolio/portfolio_img02.jpg" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="assets/img/portfolio/portfolio_img03.jpg" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>UX/UI Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="assets/img/portfolio/portfolio_img04.jpg" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="assets/img/portfolio/portfolio_img05.jpg" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="assets/img/portfolio/portfolio_img06.jpg" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="assets/img/portfolio/portfolio_img07.jpg" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="website" role="tabpanel" aria-labelledby="website-tab">
                    <div class="container">
                        <div class="row gx-0 justify-content-center">
                            <div class="col">
                                <div class="portfolio__active">
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="assets/img/portfolio/portfolio_img07.jpg" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Nature of Business
                                                    Strategy System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="assets/img/portfolio/portfolio_img06.jpg" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="assets/img/portfolio/portfolio_img01.jpg" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Apps Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="assets/img/portfolio/portfolio_img02.jpg" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="assets/img/portfolio/portfolio_img03.jpg" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>UX/UI Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="assets/img/portfolio/portfolio_img04.jpg" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="assets/img/portfolio/portfolio_img05.jpg" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="apps" role="tabpanel" aria-labelledby="apps-tab">
                    <div class="container">
                        <div class="row gx-0 justify-content-center">
                            <div class="col">
                                <div class="portfolio__active">
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="assets/img/portfolio/portfolio_img06.jpg" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Product Design and
                                                    Development</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="assets/img/portfolio/portfolio_img01.jpg" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Apps Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="assets/img/portfolio/portfolio_img02.jpg" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="assets/img/portfolio/portfolio_img03.jpg" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>UX/UI Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="assets/img/portfolio/portfolio_img04.jpg" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="assets/img/portfolio/portfolio_img05.jpg" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="assets/img/portfolio/portfolio_img07.jpg" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                    <div class="container">
                        <div class="row gx-0 justify-content-center">
                            <div class="col">
                                <div class="portfolio__active">
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="assets/img/portfolio/portfolio_img05.jpg" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Brand strategy System
                                                    Management</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="assets/img/portfolio/portfolio_img01.jpg" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Apps Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="assets/img/portfolio/portfolio_img02.jpg" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="assets/img/portfolio/portfolio_img03.jpg" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>UX/UI Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="assets/img/portfolio/portfolio_img04.jpg" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="assets/img/portfolio/portfolio_img06.jpg" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="assets/img/portfolio/portfolio_img07.jpg" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="landing" role="tabpanel" aria-labelledby="landing-tab">
                    <div class="container">
                        <div class="row gx-0 justify-content-center">
                            <div class="col">
                                <div class="portfolio__active">
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="assets/img/portfolio/portfolio_img04.jpg" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Visual Design System
                                                    Management</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="assets/img/portfolio/portfolio_img01.jpg" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Apps Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="assets/img/portfolio/portfolio_img02.jpg" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="assets/img/portfolio/portfolio_img03.jpg" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>UX/UI Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="assets/img/portfolio/portfolio_img05.jpg" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="assets/img/portfolio/portfolio_img06.jpg" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="assets/img/portfolio/portfolio_img07.jpg" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="branding" role="tabpanel" aria-labelledby="branding-tab">
                    <div class="container">
                        <div class="row gx-0 justify-content-center">
                            <div class="col">
                                <div class="portfolio__active">
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="assets/img/portfolio/portfolio_img03.jpg" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>UX/UI Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Animation Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="assets/img/portfolio/portfolio_img01.jpg" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Apps Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="assets/img/portfolio/portfolio_img02.jpg" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="assets/img/portfolio/portfolio_img04.jpg" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="assets/img/portfolio/portfolio_img05.jpg" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="assets/img/portfolio/portfolio_img06.jpg" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="assets/img/portfolio/portfolio_img07.jpg" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="graphic" role="tabpanel" aria-labelledby="graphic-tab">
                    <div class="container">
                        <div class="row gx-0 justify-content-center">
                            <div class="col">
                                <div class="portfolio__active">
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="assets/img/portfolio/portfolio_img02.jpg" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Graphic Design Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="assets/img/portfolio/portfolio_img01.jpg" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Apps Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="assets/img/portfolio/portfolio_img03.jpg" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>UX/UI Design</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="assets/img/portfolio/portfolio_img04.jpg" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="assets/img/portfolio/portfolio_img05.jpg" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="assets/img/portfolio/portfolio_img06.jpg" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item">
                                        <div class="portfolio__thumb">
                                            <img src="assets/img/portfolio/portfolio_img07.jpg" alt="">
                                        </div>
                                        <div class="portfolio__overlay__content">
                                            <span>Web Development</span>
                                            <h4 class="title"><a href="portfolio-details.html">Banking Management
                                                    System</a></h4>
                                            <a href="portfolio-details.html" class="link">Case Study</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- portfolio-area-end -->

        <!-- partner-area -->
        <section class="partner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <ul class="partner__logo__wrap">
                            <li>
                                <img class="light" src="assets/img/icons/partner_light01.png" alt="">
                                <img class="dark" src="assets/img/icons/partner_01.png" alt="">
                            </li>
                            <li>
                                <img class="light" src="assets/img/icons/partner_light02.png" alt="">
                                <img class="dark" src="assets/img/icons/partner_02.png" alt="">
                            </li>
                            <li>
                                <img class="light" src="assets/img/icons/partner_light03.png" alt="">
                                <img class="dark" src="assets/img/icons/partner_03.png" alt="">
                            </li>
                            <li>
                                <img class="light" src="assets/img/icons/partner_light04.png" alt="">
                                <img class="dark" src="assets/img/icons/partner_04.png" alt="">
                            </li>
                            <li>
                                <img class="light" src="assets/img/icons/partner_light05.png" alt="">
                                <img class="dark" src="assets/img/icons/partner_05.png" alt="">
                            </li>
                            <li>
                                <img class="light" src="assets/img/icons/partner_light06.png" alt="">
                                <img class="dark" src="assets/img/icons/partner_06.png" alt="">
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="partner__content">
                            <div class="section__title">
                                <span class="sub-title">05 - partners</span>
                                <h2 class="title">I proud to have collaborated with some awesome companies</h2>
                            </div>
                            <p>I'm a bit of a digital product junky. Over the years, I've used hundreds of web and
                                mobile apps in different industries and verticals. Eventually, I decided that it would
                                be a fun challenge to try designing and building my own.</p>
                            <a href="contact.html" class="btn">Start a conversation</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- partner-area-end -->

        <!-- testimonial-area -->
        <section class="testimonial">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6 order-0 order-lg-2">
                        <ul class="testimonial__avatar__img">
                            <li><img src="assets/img/images/testi_img01.png" alt=""></li>
                            <li><img src="assets/img/images/testi_img02.png" alt=""></li>
                            <li><img src="assets/img/images/testi_img03.png" alt=""></li>
                            <li><img src="assets/img/images/testi_img04.png" alt=""></li>
                            <li><img src="assets/img/images/testi_img05.png" alt=""></li>
                            <li><img src="assets/img/images/testi_img06.png" alt=""></li>
                            <li><img src="assets/img/images/testi_img07.png" alt=""></li>
                        </ul>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="testimonial__wrap">
                            <div class="section__title">
                                <span class="sub-title">06 - Client Feedback</span>
                                <h2 class="title">Happy clients feedback</h2>
                            </div>
                            <div class="testimonial__active">
                                <div class="testimonial__item">
                                    <div class="testimonial__icon">
                                        <i class="fas fa-quote-left"></i>
                                    </div>
                                    <div class="testimonial__content">
                                        <p>We are motivated by the satisfaction of our clients. Put your trust in us
                                            &share in our H.Spond Asset Management is made up of a team of expert,
                                            committed and experienced people with a passion for financial markets. Our
                                            goal is to achieve continuous.</p>
                                        <div class="testimonial__avatar">
                                            <span>Rasalina De Wiliamson</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial__item">
                                    <div class="testimonial__icon">
                                        <i class="fas fa-quote-left"></i>
                                    </div>
                                    <div class="testimonial__content">
                                        <p>We are motivated by the satisfaction of our clients. Put your trust in us
                                            &share in our H.Spond Asset Management is made up of a team of expert,
                                            committed and experienced people with a passion for financial markets. Our
                                            goal is to achieve continuous.</p>
                                        <div class="testimonial__avatar">
                                            <span>Rasalina De Wiliamson</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial__arrow"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-area-end -->

        <!-- blog-area -->
        <section class="blog">
            <div class="container">
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-9">
                        <div class="blog__post__item">
                            <div class="blog__post__thumb">
                                <a href="blog-details.html"><img src="assets/img/blog/blog_post_thumb01.jpg" alt=""></a>
                                <div class="blog__post__tags">
                                    <a href="blog.html">Story</a>
                                </div>
                            </div>
                            <div class="blog__post__content">
                                <span class="date">13 january 2021</span>
                                <h3 class="title"><a href="blog-details.html">Facebook design is dedicated to what's new
                                        in design</a></h3>
                                <a href="blog-details.html" class="read__more">Read mORe</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-9">
                        <div class="blog__post__item">
                            <div class="blog__post__thumb">
                                <a href="blog-details.html"><img src="assets/img/blog/blog_post_thumb02.jpg" alt=""></a>
                                <div class="blog__post__tags">
                                    <a href="blog.html">Social</a>
                                </div>
                            </div>
                            <div class="blog__post__content">
                                <span class="date">13 january 2021</span>
                                <h3 class="title"><a href="blog-details.html">Make communication Fast and
                                        Effectively.</a></h3>
                                <a href="blog-details.html" class="read__more">Read mORe</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-9">
                        <div class="blog__post__item">
                            <div class="blog__post__thumb">
                                <a href="blog-details.html"><img src="assets/img/blog/blog_post_thumb03.jpg" alt=""></a>
                                <div class="blog__post__tags">
                                    <a href="blog.html">Work</a>
                                </div>
                            </div>
                            <div class="blog__post__content">
                                <span class="date">13 january 2021</span>
                                <h3 class="title"><a href="blog-details.html">How to increase your productivity at work
                                        - 2021</a></h3>
                                <a href="blog-details.html" class="read__more">Read mORe</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog__button text-center">
                    <a href="blog.html" class="btn">more blog</a>
                </div>
            </div>
        </section>
        <!-- blog-area-end -->

        <!-- contact-area -->
        <section class="homeContact">
            <div class="container">
                <div class="homeContact__wrap">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="section__title">
                                <span class="sub-title">07 - Say hello</span>
                                <h2 class="title">Any questions? Feel free <br> to contact</h2>
                            </div>
                            <div class="homeContact__content">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some form</p>
                                <h2 class="mail"><a href="mailto:Info@webmail.com">Info@webmail.com</a></h2>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="homeContact__form">
                                <form action="#">
                                    <input type="text" placeholder="Enter name*">
                                    <input type="email" placeholder="Enter mail*">
                                    <input type="number" placeholder="Enter number*">
                                    <textarea name="message" placeholder="Enter Massage*"></textarea>
                                    <button type="submit">Send Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-area-end -->

    </main>
    <!-- main-area-end -->



    <!-- Footer-area -->
    <footer class="footer">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-4">
                    <div class="footer__widget">
                        <div class="fw-title">
                            <h5 class="sub-title">Contact us</h5>
                            <h4 class="title">+81383 766 284</h4>
                        </div>
                        <div class="footer__widget__text">
                            <p>There are many variations of passages of lorem ipsum
                                available but the majority have suffered alteration
                                in some form is also here.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="footer__widget">
                        <div class="fw-title">
                            <h5 class="sub-title">my address</h5>
                            <h4 class="title">AUSTRALIA</h4>
                        </div>
                        <div class="footer__widget__address">
                            <p>Level 13, 2 Elizabeth Steereyt set <br> Melbourne, Victoria 3000</p>
                            <a href="mailto:noreply@envato.com" class="mail">noreply@envato.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="footer__widget">
                        <div class="fw-title">
                            <h5 class="sub-title">Follow me</h5>
                            <h4 class="title">socially connect</h4>
                        </div>
                        <div class="footer__widget__social">
                            <p>Lorem ipsum dolor sit amet enim. <br> Etiam ullamcorper.</p>
                            <ul class="footer__social__list">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright__wrap">
                <div class="row">
                    <div class="col-12">
                        <div class="copyright__text text-center">
                            <p>Copyright @ Theme_Pure 2021 All right Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer-area-end -->




    <!-- JS here -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/element-in-view.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>