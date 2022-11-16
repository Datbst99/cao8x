<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="description" content=" Divisima | eCommerce Template">
    <meta name="keywords" content="divisima, eCommerce, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="192x192"  href="/favicon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700&family=Nunito:ital,wght@0,300;0,400;0,500;0,600;0,700;1,500;1,700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>freetest.com</title>

    {!! Html::style('assets/plugins/awesome/css/all.css') !!}
    {!! Html::style('assets/plugins/carousel/carousel.css') !!}
    {!! Html::style(mix('assets/client/css/landing_op_1.css')) !!}
</head>
<body>
<div class="landing-1">
    <div class="header">
        <div class="header-top">
            <nav class="navbar navbar-expand-lg navbar-light fixed-top sticky" id="navbar">
                <div class="container">
                    <!-- LOGO -->
                    <a class="navbar-brand logo text-uppercase" href="">
                        <img src="/assets/images/zodin_text.PNG" class="logo-dark" alt="logo-dark" height="30">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="far fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav navbar-center ml-auto">
                            <li class="nav-item">
                                <a href="#home" class="nav-link  scrollTo">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="#service" class="nav-link scrollTo">Service</a>
                            </li>
                            <li class="nav-item">
                                <a href="#process" class="nav-link scrollTo">Process</a>
                            </li>
                            <li class="nav-item">
                                <a href="#testimonial" class="nav-link scrollTo">Testimonial</a>
                            </li>
                            <li class="nav-item">
                                <a href="#portfolio" class="nav-link scrollTo">Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a href="#pricing" class="nav-link scrollTo">Pricing</a>
                            </li>
                            <li class="nav-item">
                                <a href="#blog" class="nav-link scrollTo">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="#contact" class="nav-link scrollTo">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <!--end navabar-collapse-->
                </div>
                <!--end container-->
            </nav>
        </div>
        <section class="bg-home4 overflow-hidden" id="home">
            <div class="container">
                <div class="position-relative" style="z-index: 1;">
                    <div class="row align-items-center">
                        <div class="col-xl-6">
                            <div>
                                <h6 class="sub-title mb-3">zoric Template</h6>
                                <h1 class="mb-4">Help your  <span class="text-main">Startup</span> Growth up to high level</h1>
                                <p class="text-black-50 fs-17">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap v5 html page.</p>
                                <div class="mt-4 pt-2">
                                    <a href="#" class="btn btn-main">Get Started</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="mt-4 mt-lg-0">
                                <img src="/assets/images/bg_intro.png" alt="home-4" class="home-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="position-relative">
            <div class="shape">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="1440" height="150" preserveAspectRatio="none" viewBox="0 0 1440 250">
                    <g mask="url(&quot;#SvgjsMask1036&quot;)" fill="none">
                        <path d="M 0,214 C 96,194 288,120.8 480,114 C 672,107.2 768,201.4 960,180 C 1152,158.6 1344,41.6 1440,7L1440 250L0 250z" fill="rgba(255, 255, 255, 1)"></path>
                    </g>
                    <defs>
                        <mask id="SvgjsMask1036">
                            <rect width="1440" height="250" fill="#ffffff"></rect>
                        </mask>
                    </defs>
                </svg>
            </div>
        </div>
    </div>
    <div class="content">
        <section class="section" id="service">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="header-title text-center">
                            <p class="text-uppercase text-muted mb-2">Services We're Provided</p>
                            <h3>We do all Creative Services</h3>
                            <div class="title-border mt-3"></div>
                            <p class="text-muted mt-3">We craft digital, graphic and dimensional thinking, to create category leading brand experiences that have meaning and add a value.</p>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-box text-center mt-4">
                            <img src="/assets/images/img-01.png" alt="" class="img-fluid">
                            <h5 class="fs-18 mt-4">Web design</h5>
                            <div class="lighlight-border mt-3"></div>
                            <p class="text-muted mt-3">Those who do not know how to pursue pleasure rationally encounter
                                consequences that are extremely painful.</p>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-lg-4 col-md-6">
                        <div class="service-box text-center mt-4 box-shadow">
                            <img src="/assets/images/img-02.png" alt="" class="img-fluid">
                            <h5 class="fs-18 mt-4">Development</h5>
                            <div class="lighlight-border mt-3"></div>
                            <p class="text-muted mt-3 mb-0">Due to its widespread use as filler text for layouts,
                                non-readability is of great importance.</p>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-lg-4 col-md-6">
                        <div class="service-box text-center mt-4">
                            <img src="/assets/images/img-03.png" alt="" class="img-fluid">
                            <h5 class="fs-18 mt-4">Branding</h5>
                            <div class="lighlight-border mt-3"></div>
                            <p class="text-muted mt-3 mb-0">There are many variations of passages of available, but the majority alteration in some form.</p>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-lg-4 col-md-6">
                        <div class="service-box text-center mt-4 box-shadow">
                            <img src="/assets/images/img-04.png" alt="" class="img-fluid">
                            <h5 class="fs-18 mt-4">Easy to customize</h5>
                            <div class="lighlight-border mt-3"></div>
                            <p class="text-muted mt-3 mb-0">The generated Lorem Ipsum is therefore always free from repetition, injected humour.</p>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-lg-4 col-md-6">
                        <div class="service-box text-center mt-4">
                            <img src="/assets/images/img-05.png" alt="" class="img-fluid">
                            <h5 class="fs-18 mt-4">Unrivaled Quality</h5>
                            <div class="lighlight-border mt-3"></div>
                            <p class="text-muted mt-3 mb-0">It is a long established fact that a reader will be distracted
                                by the readable content of a page.</p>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-lg-4 col-md-6">
                        <div class="service-box text-center mt-4 box-shadow">
                            <img src="/assets/images/img-06.png" alt="" class="img-fluid">
                            <h5 class="fs-18 mt-4">Online Marketing</h5>
                            <div class="lighlight-border mt-3"></div>
                            <p class="text-muted mt-3 mb-0">This is required when, for example, the is not yet available.
                                Dummy text is also known as 'fill text'.</p>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
        <section class="section bg-light">
            <div class="container">
                <div class="row align-items-center g-3 g-lg-0">
                    <div class="col-lg-6">
                        <div class="skill-box bg-white p-4 rounded box-shadow">
                            <p class="text-uppercase mb-1">About Agency</p>
                            <h3 class="mb-2">Leading Digital Agency for Business Solution.</h3>
                            <p class="text-muted">When a good idea comes, you know, part of my job is to move it around,
                                just see what people think, get people talking about it.</p>
                            <div class="skills">
                                <div class="mt-4">
                                    <p class="fw-bold mb-2">Web Design</p>
                                    <div class="progress">
                                        <div class="progress-bar rounded" style="width:80%;">
                                            <p class="progress-value fs-15 fw-bold">80%</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <p class="fw-bold mb-2">Development</p>
                                    <div class="progress">
                                        <div class="progress-bar rounded" style="width:60%;">
                                            <div class="progress-value fs-15 fw-bold">60%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <p class="fw-bold mb-2">Branding</p>
                                    <div class="progress">
                                        <div class="progress-bar rounded" style="width:40%;">
                                            <div class="progress-value fs-15 fw-bold">40%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <p class="fw-bold mb-2">Code</p>
                                    <div class="progress">
                                        <div class="progress-bar rounded" style="width:75%;">
                                            <div class="progress-value fs-15 fw-bold">75%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-lg-6 about-img">
                        <img src="/assets/images/about.jpg" class="img-fluid rounded box-shadow" alt="">
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
        <section class="bg-process section" id="process">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="header-title text-center">
                            <h3>Our Process</h3>
                            <div class="title-border mt-3"></div>
                            <p class="title-desc text-muted mt-3">We craft digital, graphic and dimensional thinking, to
                                create category leading brand experiences that have meaning and add a value.</p>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

                <div class="row mt-5 pt-2">
                    <div class="col-lg-3 col-md-6">
                        <div class="process-box process-border text-center">
                            <div class="process-count text-white mt-4">
                                <h3 class="process-number">01</h3>
                            </div>

                            <div class="process-content bg-light mt-5 rounded p-4">
                                <h5 class="fs-18">Concept</h5>
                                <p class="text-muted mb-0">It is a long established fact that a reader at its layout.</p>
                            </div>
                        </div>
                        <!--end process-box-->
                    </div>
                    <!--end col-->

                    <div class="col-lg-3 col-md-6">
                        <div class="process-box process-border text-center">
                            <div class="process-count text-white mt-4">
                                <h3 class="process-number">02</h3>
                            </div>

                            <div class="process-content bg-light mt-5 rounded p-4">
                                <h5 class="fs-18">Plan</h5>
                                <p class="text-muted mb-0">It is a long established fact that a reader at its layout.</p>
                            </div>
                        </div>
                        <!--end process-box-->
                    </div>
                    <!--end col-->

                    <div class="col-lg-3 col-md-6">
                        <div class="process-box process-border text-center">
                            <div class="process-count text-white mt-4">
                                <h3 class="process-number">03</h3>
                            </div>

                            <div class="process-content bg-light mt-5 rounded p-4">
                                <h5 class="fs-18">Design</h5>
                                <p class="text-muted mb-0">It is a long established fact that a reader at its layout.</p>
                            </div>
                        </div>
                        <!--end process-box-->
                    </div>
                    <!--end col-->

                    <div class="col-lg-3 col-md-6">
                        <div class="process-box text-center">
                            <div class="process-count text-white mt-4">
                                <h3 class="process-number">04</h3>
                            </div>

                            <div class="process-content bg-light mt-5 rounded p-4">
                                <h5 class="fs-18">Development</h5>
                                <p class="text-muted mb-0">It is a long established fact that a reader at its layout.</p>
                            </div>
                        </div>
                        <!--end process-box-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
        <section class="section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="counter-box">
                            <h4>Our Achivements</h4>
                            <p class="text-muted mt-2">You can combine all the zoric You can combine all the zoric templates
                                into a single one, you can take a component from the Application theme and use it in the
                                Website. It seems that only fragments of the original text remain in only fragments the Lorem Ipsum texts used today.</p>

                            <div class="mt-4 mb-5">
                                <div class="row" id="counter">

                                    <div class="col-md-6">
                                        <div class="counter-box mt-4">
                                            <div class="d-flex">
                                                <div class="counter-icon">
                                                    <i class="fas fa-heart"></i>
                                                </div>
                                                <div class="flex-grow-1 ml-3">
                                                    <h4 class="counter_value" data-target="485">485</h4>
                                                    <p class="text-muted">Happy Clients</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end counter-box-->
                                    </div>
                                    <!-- END COL -->

                                    <div class="col-md-6">
                                        <div class="counter-box mt-4">
                                            <div class="d-flex">
                                                <div class="counter-icon">
                                                    <i class="fas fa-layer-group"></i>
                                                </div>
                                                <div class="flex-grow-1 ml-3">
                                                    <h4 class="counter_value" data-target="536">536</h4>
                                                    <p class="text-muted">Projects Completed</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end counter-box-->
                                    </div>
                                    <!-- END COL -->
                                </div>
                                <!-- END ROW -->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="counter-box mt-4">
                                            <div class="d-flex">
                                                <div class="counter-icon">
                                                    <i class="fas fa-cloud-download-alt"></i>
                                                </div>
                                                <div class="flex-grow-1 ml-3">
                                                    <h4 class="counter_value" data-target="1652">1652</h4>
                                                    <p class="text-muted mb-0">Files Downloaded</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end counter-box-->
                                    </div>
                                    <!-- END COL -->
                                    <div class="col-md-6">
                                        <div class="counter-box mt-4">
                                            <div class="d-flex">
                                                <div class="counter-icon">
                                                    <i class="far fa-file-code"></i>
                                                </div>
                                                <div class="flex-grow-1 ml-3">
                                                    <h4 class="counter_value" data-target="14652">14652</h4>
                                                    <p class="text-muted mb-0">Liens Of Code</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end counter-box-->
                                    </div>
                                    <!-- END COL -->
                                </div>
                                <!-- END ROW -->
                            </div>
                        </div>
                    </div>
                    <!-- END COL -->

                    <div class="col-lg-6">
                        <div class="img">
                            <img src="/assets/images/achivements.jpg" class="img-fluid box-shadow-lg rounded" alt="">
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
        <section class="section" id="portfolio">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="header-title text-center">
                            <p class="text-uppercase text-muted mb-2">Portfolio</p>
                            <h3>Our Works</h3>
                            <div class="title-border mt-3"></div>
                            <p class="title-desc text-muted mt-3">We craft digital, graphic and dimensional thinking, to
                                create category leading brand experiences that have meaning and add a value.</p>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

                <div class="row my-4 pt-2">
                    <div class="col-lg-12">
                        <div class="filters-group">
                            <ul class="nav filter-options list-unstyled list-inline justify-content-center">
                                <li data-group="all" class="nav-link list-inline-item mt-2 active">
                                    Tất cả</li>
                                @foreach($categories as $category)
                                    <li data-group="project" class="nav-link list-inline-item mt-2">
                                        {{$category->name}}
                                    </li>
                                @endforeach

                            </ul>
                            <!--end portfolio-list-->
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container-fluid mt-5">
                <div class="row g-2 shuffle" id="grid" style="position: relative; overflow: hidden; height: 758px; transition: height 250ms cubic-bezier(0.4, 0, 0.2, 1) 0s;">
                    @foreach($products as $product)
                        <div class="col-lg-3 col-md-6 picture-item shuffle-item shuffle-item--visible" >
                            <div class="portfolio-box rounded">
                                <img class="img-fluid" src="{{$product->thumbnail}}" alt="{{$product->name}}">
                                <div class="portfolio-content">
                                    <div class="img-view">
                                        <a href="javascript:void(0)" onclick="addCart({{$product->id}})" class="text-muted image-popup"><i class="far fa-plus"></i></a>
                                    </div>
                                    <div class="portfolio-caption">
                                        <a href="#" class="text-primary">
                                            <h5 class="mb-1 fs-18">{{$product->name}}</h5>
                                        </a>
                                        <p class="mb-0">{{$product->category->name}}</p>
                                    </div>
                                </div>
                            </div>
                            <!--end portfolio-box-->
                        </div>
                    @endforeach


                </div><!--end row-->
            </div><!--end container-fluid-->
        </section>
        <section class="section bg-light" id="pricing">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="header-title text-center mb-4">
                            <p class="text-uppercase text-muted mb-2">Offers</p>
                            <h3>Choose Your Best Plan</h3>
                            <div class="title-border mt-3"></div>
                            <p class="title-desc text-muted mt-3">We craft digital, graphic and dimensional thinking, to
                                create category leading brand experiences that have meaning and add a value.</p>
                        </div>
                    </div><!--end col-->
                </div>
                <!--end row-->

                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-box bg-white box-shadow text-center p-5 mt-5 rounded">
                            <p class="price-title mb-4 pb-3">Classic</p>
                            <h1 class="mb-0 price">$34.99</h1>
                            <div class="pricing-features mt-4 pt-4">
                                <p>Customizad Plans</p>
                                <p>Billing Report</p>
                                <p>Access to Asana</p>
                            </div>
                            <div class="mt-5">
                                <a href="#" class="btn btn-main w-100">Purchase Now</a>
                            </div>
                        </div><!--end pricing-box-->
                    </div>
                    <!--end col-->

                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-box bg-white box-shadow text-center p-5 mt-5 rounded">
                            <div class="pricing-label">
                                <h5 class="text-white fs-16">Sale</h5>
                            </div>

                            <p class="price-title mb-4 pb-3">Popular</p>
                            <h1 class="mb-0 price">$49.99</h1>
                            <div class="pricing-features mt-4 pt-4">
                                <p>Customizad Plans</p>
                                <p>Billing Report</p>
                                <p>Access to Asana</p>
                                <p>Unlimited themes</p>
                            </div>
                            <div class="mt-5">
                                <a href="#" class="btn btn-main w-100">Purchase Now</a>
                            </div>
                        </div>
                        <!--end pricing-box-->
                    </div>
                    <!--end col-->

                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-box bg-white box-shadow text-center p-5 mt-5 rounded">
                            <p class="price-title mb-4 pb-3">Ultimate</p>
                            <h1 class="mb-0 price">$89.99</h1>
                            <div class="pricing-features mt-4 pt-4">
                                <p>Customizad Plans</p>
                                <p>Billing Report</p>
                                <p>Access to Asana</p>
                            </div>
                            <div class="mt-5">
                                <a href="#" class="btn btn-main w-100">Purchase Now</a>
                            </div>
                        </div>
                        <!--end pricing-box-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
        <section class="section" id="blog">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="header-title text-center mb-5">
                            <p class="text-uppercase text-muted mb-2">News</p>
                            <h3>Latest Articles And News</h3>
                            <div class="title-border mt-3"></div>
                            <p class="title-desc text-muted mt-3">We craft digital, graphic and dimensional thinking, to
                                create category leading brand experiences that have meaning and add a value.</p>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

                <div class="row">
                    <div class="col-lg-4">
                        <div class="blog-box box-shadow rounded mt-4 p-3">
                            <div class="blog-img">
                                <img src="/assets/images/user_1.jpg" class="img-fluid rounded" alt="">
                                <div class="read-more">
                                    <a href="#"><i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="mt-4">
                                <a href="#" class="primary-link">
                                    <h5 class="fs-19 mb-1">How to be appreciated for your hard work as a developer</h5>
                                </a>
                                <p class="text-muted mt-2">The final text is not yet available. Dummy texts have Internet
                                    tend been in use by typesetters since the 16th century.</p>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img src="images/users/img-5.jpg" alt="" height="45" class="rounded-circle me-2">
                                        <p class="text-muted mb-0">admin</p>
                                    </div>
                                    <p class="mb-0 float-end text-muted"><i class="fal fa-clock align-middle me-1 text-primary"></i> 24
                                        min</p>
                                </div>
                            </div>
                        </div>
                        <!--end blog-->
                    </div><!-- end col -->

                    <div class="col-lg-4">
                        <div class="blog-box box-shadow rounded mt-4 p-3">
                            <div class="blog-img">
                                <img src="/assets/images/user_2.jpg" class="img-fluid rounded" alt="">
                                <div class="read-more">
                                    <a href="#"><i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="mt-4">
                                <a href="#" class="primary-link">
                                    <h5 class="fs-19 mb-1">Developers watch out for these burnout symptoms</h5>
                                </a>
                                <p class="text-muted mt-2">Allegedly, a Latin scholar established the origin of the
                                    established text Internet by compiling unusual word.</p>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img src="images/users/img-6.jpg" alt="" height="45" class="rounded-circle me-2">
                                        <p class="text-muted mb-0">admin</p>
                                    </div>
                                    <p class="mb-0 float-end text-muted"><i class="fal fa-clock align-middle me-1 text-primary"></i> 32
                                        min</p>
                                </div>
                            </div>
                        </div>
                        <!--end blog-->
                    </div><!-- end col -->

                    <div class="col-lg-4">
                        <div class="blog-box box-shadow rounded mt-4 p-3">
                            <div class="blog-img">
                                <img src="/assets/images/user_3.jpg" class="img-fluid rounded" alt="Blog">
                                <div class="read-more">
                                    <a href="#"><i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="mt-4">
                                <a href="#" class="primary-link">
                                    <h5 class="fs-19 mb-1">How designers and developers can collaborate better</h5>
                                </a>
                                <p class="text-muted mt-2">It seems that only fragments of the original text remain in only
                                    fragments the Lorem Ipsum texts used today.</p>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img src="images/users/img-7.jpg" alt="" height="45" class="rounded-circle me-2">
                                        <p class="text-muted mb-0">admin</p>
                                    </div>
                                    <p class="mb-0 float-end text-muted"><i class="fal fa-clock align-middle me-1 text-primary"></i> 45
                                        min</p>
                                </div>
                            </div>
                        </div>
                        <!--end blog-->
                    </div><!-- end col -->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
        <section class="bg-cta">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="header-title text-center">
                            <h2>Become a part of zoric bussiness community today</h2>
                            <p class="title-desc text-muted mt-3"> Start working with zoric that can provide everything you
                                need to generate awareness, drive traffic, connect. </p>
                            <div class="mt-4">
                                <a href="#" class="btn btn-main mt-2">Get Started</a>
                            </div>
                        </div>

                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
        <section class="section" id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="text-center mb-4">
                            <p class="text-uppercase text-muted mb-2">Contact</p>
                            <h3 class="text-uppercase">Get In Touch</h3>
                            <div class="title-border mt-3"></div>
                            <p class="title-desc text-muted mt-3">We craft digital, graphic and dimensional thinking, to
                                create category leading brand experiences that have meaning and add a value.</p>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="contact-info text-center mt-5">
                            <div class="icon">
                                <i class="fas fa-map-marker-alt text-primary fs-20 m-0"></i>
                            </div>
                            <div class="mt-4 pt-2">
                                <h6 class="fs-17">Main Office</h6>
                                <p class="text-muted mb-0">2276 Lynn Ogden Lane Beaumont Lodgeville Road TX 77701</p>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-3 col-md-6">
                        <div class="contact-info text-center mt-5">
                            <div class="icon">
                                <i class="fas fa-phone-alt text-primary fs-20 m-0"></i>
                            </div>
                            <div class="mt-4 pt-2">
                                <h6 class="fs-17">Phone &amp; Email</h6>
                                <p class="text-muted mb-0">Phone: +71 612-234-4023</p>
                                <p class="text-muted mb-0">Fax: +954-627-9727</p>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-3 col-md-6">
                        <div class="contact-info text-center mt-5">
                            <div class="icon">
                                <i class="fas fa-envelope text-primary fs-20 m-0"></i>
                            </div>
                            <div class="mt-4 pt-2">
                                <h6 class="fs-17">Contact</h6>
                                <p class="text-muted mb-0"> www.exampledesign.com</p>
                                <p class="text-muted mb-0"> example@design.com</p>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-3 col-md-6">
                        <div class="contact-info text-center mt-5">
                            <div class="icon">
                                <i class="far fa-calendar text-primary fs-20 m-0"></i>
                            </div>
                            <div class="mt-4 pt-2">
                                <h6 class="fs-17">Working Hours</h6>
                                <p class="text-muted mb-0"> Monday-friday: 9:00- 06:00</p>
                                <p class="text-muted mb-0"> Saturday-Sunday: Holiday</p>

                            </div>
                        </div>
                    </div><!--end col-->

                </div><!--end row-->

                <div class="row mt-5 pt-2 justify-content-center">

                    <div class="col-lg-9">
                        <div class="custom-form">
                            <form method="post" action="{{route('client.add')}}" name="myForm" >
                                @csrf
                                <p id="error-msg"></p>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name* :</label>
                                            <input name="name" id="name" type="text" class="form-control" placeholder="Enter your name">
                                        </div>
                                    </div><!--end col-->
                                </div>
                                <!-- end row -->

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email address* :</label>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
                                        </div>
                                    </div>
                                    <!-- end col -->

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="number" class="form-label">Phone number* :</label>
                                            <input type="number" class="form-control" name="number" id="number" placeholder="Enter your number">
                                        </div>
                                    </div>
                                    <!-- end col -->

                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="comments" class="form-label">Comments :</label>
                                            <textarea class="form-control" placeholder="Leave a comment here" name="comments" id="comments" style="height: 100px"></textarea>
                                        </div>
                                    </div>
                                    <!-- end col -->

                                </div>
                                <!-- end row -->

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mt-3 text-right">
                                            <input type="submit" id="submit" name="send" class="submitBnt btn btn-main" value="Send Message">
                                            <div id="simple-msg"></div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->
                            </form>
                            <!-- end form -->
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
    </div>
    <div class="footer">
        <footer class="bg-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="mt-4">
                            <a href=""><img src="/assets/images/zodin_text.PNG" alt="" height="30"></a>
                            <p class="text-white-50 mt-3 pt-2 mb-0 ">It is a long established fact that a reader will be of
                                a page reader will be of at its layout.</p>
                            <div class="mt-4">
                                <ul class="list-inline footer-social">
                                    <li class="list-inline-item">
                                        <a href="#">
                                            <i class="fab fa-facebook"></i>
                                        </a>
                                    </li>

                                    <li class="list-inline-item">
                                        <a href="#">
                                            <i class="fab fa-linkedin"></i>
                                        </a>
                                    </li>

                                    <li class="list-inline-item">
                                        <a href="#">
                                            <i class="fab fa-pinterest"></i>
                                        </a>
                                    </li>

                                    <li class="list-inline-item">
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-lg-3 col-md-6">
                        <div class="mt-4 ps-0 ps-lg-5">
                            <h6 class="text-white text-uppercase fs-16">Resources</h6>
                            <ul class="list-unstyled footer-link mt-3 mb-0">
                                <li><a href="#">Company History</a></li>
                                <li><a href="#">Documentation</a></li>
                                <li><a href="#">Term &amp; Service</a></li>
                                <li><a href="#">Components</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-lg-2 col-md-6">
                        <div class="mt-4">
                            <h6 class="text-white text-uppercase fs-16">Help</h6>
                            <ul class="list-unstyled footer-link mt-3 mb-0">
                                <li><a href="#">Sign Up </a></li>
                                <li><a href="#">Login</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-lg-4">
                        <div class="mt-4">
                            <h6 class="text-white text-uppercase fs-16">Latest news</h6>
                            <div class="mt-3 mb-0">
                                <div class="d-flex">
                                    <i class="fab fa-twitter text-white-50 float-start"></i>
                                    <div class="flex-grow-1">
                                        <p class="text-white-50 pl-3">Pleasures have to repudiated annoyances accepted
                                            therefore always holds chooses enjoy a pleasure consequences.</p>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <div class="d-flex">
                                        <i class="fab fa-twitter text-white-50 float-start"></i>
                                        <div class="flex-grow-1">
                                            <p class="text-white-50 pl-3">Greater pleasures el esndures pains avoid welcomed
                                                avoided pariatu</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </footer>
        <div class="footer-alt py-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="text-white-50 mb-0">
                                2022 © Zodin - Landing Page Template by Datbst </a>
                            </p>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </div>
    </div>
</div>
{!! Html::script('assets/plugins/jquery/jquery.min.js') !!}
{!! Html::script('assets/plugins/carousel/carousel.js') !!}
<script>
    $(window).scroll(function (event) {
        var scroll = $(window).scrollTop();
        if(scroll > 0) {
            $('.navbar').addClass('nav-sticky')
        } else {
            $('.navbar').removeClass('nav-sticky')
        }

    });

    function addCart(id){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/cart',
            type: 'POST',
            data: {id}
        }).done(function (res) {
            console.log(res.message)
        }).fail(function (xhr) {
            console.log(xhr)
        })
    }

    $(document).ready(function () {
        $('.scrollTo').click(function(){
            $('html, body').animate({
                scrollTop: $( $(this).attr('href') ).offset().top
            }, 900);
            return false;
        });

        $('.icon-menu').click(function () {
            $('.category-responsive').slideToggle();
        });



    });
</script>
</body>
</html>
