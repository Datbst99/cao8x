<!DOCTYPE html><html lang="en"><head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A carefully-crafted product landing page template specially for the digital watch showcase and promotion. HTML5 and Bootstrap integrated SEO friendly landing page website template.">
    <meta name="keywords" content>
    <meta name="author" content="Awaiken">
    <!-- Page Title -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Aura Beaty Clinic</title>
    <!-- Google Fonts css-->
    <!-- Bootstrap css -->
    <link href="/landing/v2/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="/landing/v2/css/bootsnav.css" rel="stylesheet" media="screen">
    <!-- Font Awesome icon css-->
    <link href="/landing/v2/css/font-awesome.min.css" rel="stylesheet" media="screen">
    <link href="/landing/v2/css/flaticon.css" rel="stylesheet" media="screen">
    <!-- Swiper's CSS -->
    <link rel="stylesheet" href="/landing/v2/css/swiper.min.css">
    <!-- Animated css -->
    <link href="/landing/v2/css/animate.css" rel="stylesheet">
    <!-- Magnific Popup CSS -->
    <link href="/landing/v2/css/magnific-popup.css" rel="stylesheet">
    <!-- Main custom css -->
    <link href="/landing/v2/css/custom.css" rel="stylesheet" media="screen">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- Preloader starts -->
<div class="preloader">
		<span class="loader">
			<span class="loader-inner"></span>
		</span>
</div>
<!-- Preloader Ends -->

<!-- Header Section Starts-->
<header>
    <nav class="navbar navbar-default navbar-fixed-top navbar-scrollspy bootsnav" data-minus-value-desktop="68" data-minus-value-mobile="66" data-speed="1000">
        <div class="container">
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <a class="navbar-brand" href="#"><img src="/landing/v2/images/logo.png" class="logo" alt></a>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">

                <ul class="nav navbar-nav navbar-right">
                    <li class="active scroll"><a href="#home">Trang chủ</a></li>
                    <li class="scroll"><a href="#features">Giới thiệu</a></li>
                    <li class="scroll"><a href="#about">Dịch vụ</a></li>
                    <li class="scroll"><a href="#endow">Ưu đãi</a></li>
                    <li class="scroll"><a href="#images">Hình ảnh</a></li>
                    <li class="scroll"><a href="#contact">Liên hệ</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
</header>
<!-- Header Section Ends-->

<!-- Banner Section Starts -->
<section class="banner parallaxie" id="home">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="header-content wow fadeInUp">
                    <h2><span>Aura Beauty Clinic</span> <br>Tạo hình khuôn mặt rạng rỡ cùng Filler</h2>
                    <p>
                        Filler là liệu pháp làm đầy giúp cải thiện một số nhược điểm trên gương mặt như: má quá hóp, rãnh sâu mũi - má, cằm ngắn, tạo hình môi, nâng mũi,... mang lại khuôn mặt trẻ trung, tự nhiên chuẩn tỉ lệ vàng mà không cần phẫu thuật xâm lấn!
                    </p>
                    <div class="buy-button">
                        <a href="#add-contact" class="btn-buynow">Đặt hẹn ngay</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-6">
                <div class="slider-image wow fadeInRight">
                    <img src="/landing/v2/images/hari-1.jpg" alt="hari" height="400px">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section Ends -->

{{--<!-- Step Section starts -->--}}
{{--<div class="step-section">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--                <div class="step-container">--}}
{{--                    <div class="row">--}}
{{--                        <!-- Step start -->--}}
{{--                        <div class="col-md-4 col-sm-4">--}}
{{--                            <div class="step-single wow fadeInUp" data-wow-delay="0.2s">--}}
{{--                                <div class="icon-box">--}}
{{--                                    <i class="flaticon-login"></i>--}}
{{--                                </div>--}}
{{--                                <h3>Create a Account</h3>--}}
{{--                                <p>The alien mothership is in orbit here. If we can hit that bullseye.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Step end -->--}}

{{--                        <!-- Step start -->--}}
{{--                        <div class="col-md-4 col-sm-4">--}}
{{--                            <div class="step-single wow fadeInUp" data-wow-delay="0.4s">--}}
{{--                                <div class="icon-box">--}}
{{--                                    <i class="flaticon-login-1"></i>--}}
{{--                                </div>--}}
{{--                                <h3>Login in Website</h3>--}}
{{--                                <p>The alien mothership is in orbit here. If we can hit that bullseye.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Step end -->--}}

{{--                        <!-- Step start -->--}}
{{--                        <div class="col-md-4 col-sm-4">--}}
{{--                            <div class="step-single wow fadeInUp" data-wow-delay="0.6s">--}}
{{--                                <div class="icon-box">--}}
{{--                                    <i class="flaticon-shopping-cart"></i>--}}
{{--                                </div>--}}
{{--                                <h3>Purchase Now</h3>--}}
{{--                                <p>The alien mothership is in orbit here. If we can hit that bullseye.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Step end -->--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<!-- Step Section ends -->--}}

<!-- Features section starts -->
<section class="features" id="features">
    <div class="container">
        <!-- Section Title start -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInUp">
{{--                    <p>Explore the Awesome</p>--}}
                    <h2>Cấy Ha</h2>
                </div>
            </div>
        </div>
        <!-- Section Title end -->

        <div class="row">
            <div class="col-md-4">
                <!-- Feature single start -->
                <div class="feature-single feature-right wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="icon-box">
                        <i class="flaticon-cpu"></i>
                    </div>

                    <h3>Tạo hình các vị trí trên gương mặt một cách tự nhiên, hài hòa, chuẩn tỉ lệ vàng</h3>
{{--                    <p>Tạo hình các vị trí trên gương mặt môi cách tự nhiên, hài hòa, tạo hình gương mặt chuẩn tị lệ vàng</p>--}}
                </div>
                <!-- Feature single end -->

                <!-- Feature single start -->
                <div class="feature-single feature-right wow fadeInLeft" data-wow-delay="0.6s">
                    <div class="icon-box">
                        <i class="flaticon-gold-medal"></i>
                    </div>

                    <h3>Tạo mũi cao thanh tú, môi căng mọng quyến rũ, cân chỉnh ngũ quan khuôn mặt</h3>
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>--}}
                </div>
                <!-- Feature single end -->

                <!-- Feature single start -->
                <div class="feature-single feature-right wow fadeInLeft" data-wow-delay="0.8s">
                    <div class="icon-box">
                        <i class="flaticon-loupe"></i>
                    </div>

                    <h3>Làm đấy má hóp, cằm lẹm, hõm thái dương, hõm mặt,... tạo điểm nhấn cho gương mặt</h3>
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>--}}
                </div>
                <!-- Feature single end -->

                <!-- Feature single start -->
                <div class="feature-single feature-right wow fadeInLeft" data-wow-delay="1s">
                    <div class="icon-box">
                        <i class="flaticon-sensor"></i>
                    </div>

                    <h3>Loại bỏ các dấu hiệu tuổi tác duy trì nét đẹp, tươi trẻ cho gương mặt</h3>
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>--}}
                </div>
                <!-- Feature single end -->
            </div>

            <div class="col-md-4">
                <div class="feature-image wow fadeInUp">
                    <img src="/landing/v2/images/hari-center-section.jpg" alt="hari">
                </div>
            </div>

            <div class="col-md-4">
                <!-- Feature single start -->
                <div class="feature-single feature-left wow fadeInRight" data-wow-delay="0.2s">
                    <div class="icon-box">
                        <i class="flaticon-torch-top-view"></i>
                    </div>

                    <h3>Phương pháp làm đẹp không xâm lấn, an toàn tuyệt đối, độ bền cao</h3>
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>--}}
                </div>
                <!-- Feature single end -->

                <!-- Feature single start -->
                <div class="feature-single feature-left wow fadeInRight" data-wow-delay="0.4s">
                    <div class="icon-box">
                        <i class="flaticon-eye"></i>
                    </div>

                    <h3>Bác sĩ chuyên môn dày dặn kinh nghiệm trực tiếp thực hiện trị liệu</h3>
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>--}}
                </div>
                <!-- Feature single end -->

                <!-- Feature single start -->
                <div class="feature-single feature-left wow fadeInRight" data-wow-delay="0.6s">
                    <div class="icon-box">
                        <i class="flaticon-speaker"></i>
                    </div>

                    <h3>Sử dụng các dòng Filler cao cấp: Juvederm, Restylane, Belotero, EPTQ,...</h3>
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>--}}
                </div>
                <!-- Feature single end -->

                <!-- Feature single start -->
                <div class="feature-single feature-left wow fadeInRight" data-wow-delay="1s">
                    <div class="icon-box">
                        <i class="flaticon-wifi"></i>
                    </div>

                    <h3>Thời gian thực hiện nhanh chóng chỉ với 10 phút, không mất thời gian nghỉ dưỡng</h3>
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>--}}
                </div>
                <!-- Feature single end -->
            </div>
        </div>
    </div>
</section>
<!-- Features section ends -->

<!-- About Product section starts -->
<section class="about-product" id="about">
    <div class="container">
        <!-- Section Title start -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInUp">
                    <p>Beauty meets functionality</p>
                    <h2>Các Loại Filler</h2>
                </div>
            </div>
        </div>
        <!-- Section Title end -->

        <div class="row">
            <div class="col-md-12">
                <div class="about-product-single">
                    <div class="row">
                        <div class="col-md-7 col-sm-7 pull-right">
                            <div class="about-entry">
                                <h4>Kiến tạo vẻ đẹp</h4>
                                <h3>Juvederm</h3>
                                <p>Filler cao cấp nhất - được nhập khẩu, chứng nhận lưu hành toàn thế giới. Là sản phẩm được phân phối bởi Allergan - top 5 tập đoàn hàng đầu tại Mỹ về chăm sóc sức khỏe. Filler hoàn toàn an toàn lên form cực đẹp và mềm mại, không gây tác dụng phụ.
                                    <br>
                                    - Giúp nâng cao sống mũi, cân chỉnh cằm, làm đầy môi, tạo hình tai phong thủy, căng đẩy vùng trán.
                                    <br>
                                    - Làm đầy má hóp và rãnh mũi má,...

                                </p>
                                <a href="#add-contact" class="btn-buynow">Liên hệ tư vấn</a>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-5">
                            <div class="about-image wow fadeInRight" data-wow-delay="0.2s">
                                <img src="/landing/v2/images/hari-juve.jpg" alt>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="about-product-single">
                    <div class="row">
                        <div class="col-md-7 col-sm-7">
                            <div class="about-entry">
                                <h4>Tạo hình xu hướng</h4>
                                <h3>E.P.T.Q</h3>
                                <p>Filler Hàn Quốc đầu tiên được Bộ Y Tế cấp phép lưu hành tại Việt Nam hoàn toàn an toàn với cơ thể, tạo hình gương mặt mềm mại, độ bền ổn định.
                                    <br>
                                    - Giúp tạo hình gương mặt chuẩn tỉ lệ vàng, nâng mũi cao tây, mũi S-line, tạo dáng môi baby, môi trái tim, môi tây...
                                    <br>
                                    - Cải thiện nếp nhăn trên khuôn mặt
                                </p>
                                <a href="#add-contact" class="btn-buynow">Liên hệ tư vấn</a>
                            </div>
                        </div>

                        <div class="col-md-5 col-sm-5">
                            <div class="about-image wow fadeInLeft" data-wow-delay="0.4s">
                                <img src="/landing/v2/images/hari-etq.jpg" alt>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Product section ends -->

<!-- About Facts starts -->
<section class="about-facts parallaxie">
    <div class="container">
        <!-- Section Title start -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInUp">
                    <p>User Experience</p>
                    <h2>The Facts about</h2>
                </div>
            </div>
        </div>
        <!-- Section Title end -->

        <div class="row">
            <!-- Fact single start -->
            <div class="col-md-3 col-sm-6">
                <div class="facts-single">
                    <h3 class="counter">2485</h3>
                    <p>People Buy</p>
                </div>
            </div>
            <!-- Fact single end -->

            <!-- Fact single start -->
            <div class="col-md-3 col-sm-6">
                <div class="facts-single">
                    <h3 class="counter">458</h3>
                    <p>Users</p>
                </div>
            </div>
            <!-- Fact single end -->

            <!-- Fact single start -->
            <div class="col-md-3 col-sm-6">
                <div class="facts-single">
                    <h3 class="counter">885</h3>
                    <p>Comments</p>
                </div>
            </div>
            <!-- Fact single end -->

            <!-- Fact single start -->
            <div class="col-md-3 col-sm-6">
                <div class="facts-single">
                    <h3 class="counter">561</h3>
                    <p>Premium Users</p>
                </div>
            </div>
            <!-- Fact single end -->
        </div>
    </div>
</section>
<!-- About Facts ends -->

<!-- Product Section starts -->
<section class="products" id="images">
    <div class="container">
        <!-- Section Title start -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInUp">
                    <p>Our Most Popular</p>
                    <h2>Hình ảnh khách hàng</h2>
                </div>
            </div>
        </div>
        <!-- Section Title end -->

        <div class="row">
            <!-- Product single start -->
            <div class="col-md-4 col-sm-6">
                <div class="product-single">
                    <div class="product-box">
                        <div class="front">
                            <img src="/landing/v2/images/client-left.jpg" alt="client">
{{--                            <h3>$240 <del>$349</del></h3>--}}
                        </div>
                        <div class="back">
                            <img src="/landing/v2/images/client-left.jpg" alt="client">
{{--                            <div class="product-info">--}}
{{--                                <h3>Blue Apple Watch</h3>--}}
{{--                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>--}}
{{--                                <a href="#" class="btn-ordernow">Order Now</a>--}}
{{--                               --}}

{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product single end -->

            <!-- Product single start -->
            <div class="col-md-4 col-sm-6">
                <div class="product-single">
                    <div class="product-box">
                        <div class="front">
                            <img src="/landing/v2/images/client-center.jpg" alt="client">
{{--                            <h3>$140</h3>--}}
                        </div>
                        <div class="back">
                            <img src="/landing/v2/images/client-center.jpg" alt="client">
{{--                            <div class="product-info">--}}
{{--                                <h3>Blue Apple Watch</h3>--}}
{{--                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>--}}
{{--                                <a href="#" class="btn-ordernow">Order Now</a>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product single end -->

            <!-- Product single start -->
            <div class="col-md-4 col-sm-6">
                <div class="product-single">
                    <div class="product-box">
                        <div class="front">
                            <img src="/landing/v2/images/client-right.jpg" alt="client">
{{--                            <h3>$240</h3>--}}
                        </div>
                        <div class="back">
                            <img src="/landing/v2/images/client-right.jpg" alt="client">
{{--                            <div class="product-info">--}}
{{--                                <h3>Blue Apple Watch</h3>--}}
{{--                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>--}}
{{--                                <a href="#" class="btn-ordernow">Order Now</a>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product single end -->

            <!-- Product single start -->
{{--            <div class="col-md-3 col-sm-6">--}}
{{--                <div class="product-single">--}}
{{--                    <div class="product-box">--}}
{{--                        <div class="front">--}}
{{--                            <img src="/landing/v2/images/product-4.png" alt>--}}
{{--                            <h3>$260</h3>--}}
{{--                        </div>--}}
{{--                        <div class="back">--}}
{{--                            <div class="product-info">--}}
{{--                                <h3>Blue Apple Watch</h3>--}}
{{--                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>--}}
{{--                                <a href="#" class="btn-ordernow">Order Now</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <!-- Product single end -->
        </div>
    </div>
</section>
<!-- Product Section ends -->

<!-- Testimonials starts -->
<section class="testimonials parallaxie" id="testimonial">
    <div class="container">
        <!-- Section Title start -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInUp">
                    <p>Feedback</p>
                    <h2>Phản hồi khách hàng</h2>
                </div>
            </div>
        </div>
        <!-- Section Title end -->

        <div class="row">
            <div class="col-md-12">
                <div class="swiper-container testimonials-slider">
                    <div class="swiper-wrapper">
                        <!-- Client Review slide start -->
                        <div class="swiper-slide">
                            <div class="testimonial-slide">
                                <img src="/landing/v2/images/feedback-left.jpg" alt="feedback">
{{--                                <div class="author-info">--}}
{{--                                    <img src="/landing/v2/images/author-1.jpg" alt>--}}
{{--                                </div>--}}

{{--                                <div class="testimonial-entry">--}}
{{--                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>--}}

{{--                                    <h4>Harshad Patel <span>/ Web Designer</span></h4>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                        <!-- Client Review slide end -->

                        <!-- Client Review slide start -->
                        <div class="swiper-slide">
                            <div class="testimonial-slide">
                                <img src="/landing/v2/images/feedback-center.jpg" alt="feedback">
{{--                                <div class="author-info">--}}
{{--                                    <img src="/landing/v2/images/author-2.jpg" alt>--}}
{{--                                </div>--}}

{{--                                <div class="testimonial-entry">--}}
{{--                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>--}}

{{--                                    <h4>Jasmin Joshph <span>/ Front end</span></h4>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                        <!-- Client Review slide end -->

                        <!-- Client Review slide start -->
                        <div class="swiper-slide">
                            <div class="testimonial-slide">
                                <img src="/landing/v2/images/feedback-right.jpg" alt="feedback">
{{--                                <div class="author-info">--}}
{{--                                    <img src="/landing/v2/images/author-3.jpg" alt>--}}
{{--                                </div>--}}

{{--                                <div class="testimonial-entry">--}}
{{--                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>--}}

{{--                                    <h4>Sweta Silva <span>/ Back end</span></h4>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                        <!-- Client Review slide end -->

{{--                        <!-- Client Review slide start -->--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="testimonial-slide">--}}
{{--                                <div class="author-info">--}}
{{--                                    <img src="/landing/v2/images/author-1.jpg" alt>--}}
{{--                                </div>--}}

{{--                                <div class="testimonial-entry">--}}
{{--                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>--}}

{{--                                    <h4>Harshad Patel <span>/ Web Designer</span></h4>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Client Review slide end -->--}}

{{--                        <!-- Client Review slide start -->--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="testimonial-slide">--}}
{{--                                <div class="author-info">--}}
{{--                                    <img src="/landing/v2/images/author-2.jpg" alt>--}}
{{--                                </div>--}}

{{--                                <div class="testimonial-entry">--}}
{{--                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>--}}

{{--                                    <h4>Jasmin Joshph <span>/ Front end</span></h4>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Client Review slide end -->--}}

{{--                        <!-- Client Review slide start -->--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="testimonial-slide">--}}
{{--                                <div class="author-info">--}}
{{--                                    <img src="/landing/v2/images/author-3.jpg" alt>--}}
{{--                                </div>--}}

{{--                                <div class="testimonial-entry">--}}
{{--                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>--}}

{{--                                    <h4>Sweta Silva <span>/ Back end</span></h4>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Client Review slide end -->--}}

                    </div>

                    <div class="testimonial-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonials ends -->

<!-- Pricing Section Starts -->
<section class="pricing" id="pricing">
    <div class="container">
        <!-- Section Title start -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInUp">
                    <p>Our Affordable Best</p>
                    <h2>Ưu đãi hấp dẫn</h2>
                </div>
            </div>
        </div>
        <!-- Section Title end -->

        <div class="row">
            <!-- Pricing box start -->
            <div class="col-md-4">
                <div class="pricing-single wow fadeInUp" data-wow-delay="0.2s">
                    <img src="/landing/v2/images/hari-left-section.jpg" alt="endow">
{{--                    <div class="pricing-header">--}}
{{--                        <div class="icon-box">--}}
{{--                            <i class="flaticon-tea-time"></i>--}}
{{--                        </div>--}}
{{--                        <h3>Beginner Package</h3>--}}
{{--                        <p>$9</p>--}}
{{--                        <a href="#" class="btn-buynow">Order Now</a>--}}
{{--                    </div>--}}

{{--                    <div class="pricing-body">--}}
{{--                        <ul>--}}
{{--                            <li><span>Maximum</span> converting layout</li>--}}
{{--                            <li><span>Pre made</span> signup forms</li>--}}
{{--                            <li><span>Best support</span> options</li>--}}
{{--                            <li><span>No coding</span> experience needed</li>--}}
{{--                            <li><span>More pre-made</span> elements</li>--}}
{{--                            <li><span>Additional</span> demo layouts</li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}

                </div>
            </div>
            <!-- Pricing box end -->

            <!-- Pricing box start -->
            <div class="col-md-4">
                <div class="pricing-single wow fadeInUp" data-wow-delay="0.4s">
                    <img src="/landing/v2/images/hari-center-section.jpg" alt="endow">
{{--                    <div class="pricing-header">--}}
{{--                        <div class="icon-box">--}}
{{--                            <i class="flaticon-gold-medal"></i>--}}
{{--                        </div>--}}
{{--                        <h3>Premium Package</h3>--}}
{{--                        <p>$19</p>--}}
{{--                        <a href="#" class="btn-buynow">Order Now</a>--}}
{{--                    </div>--}}

{{--                    <div class="pricing-body">--}}
{{--                        <ul>--}}
{{--                            <li><span>Maximum</span> converting layout</li>--}}
{{--                            <li><span>Pre made</span> signup forms</li>--}}
{{--                            <li><span>Best support</span> options</li>--}}
{{--                            <li><span>No coding</span> experience needed</li>--}}
{{--                            <li><span>More pre-made</span> elements</li>--}}
{{--                            <li><span>Additional</span> demo layouts</li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
                </div>
            </div>
            <!-- Pricing box end -->

            <!-- Pricing box start -->
            <div class="col-md-4">
                <div class="pricing-single wow fadeInUp" data-wow-delay="0.6s">
                    <img src="/landing/v2/images/hari-right-section.jpg" alt="endow">
{{--                    <div class="pricing-header">--}}
{{--                        <div class="icon-box">--}}
{{--                            <i class="flaticon-package"></i>--}}
{{--                        </div>--}}
{{--                        <h3>Unlimited Package</h3>--}}
{{--                        <p>$49</p>--}}
{{--                        <a href="#" class="btn-buynow">Order Now</a>--}}
{{--                    </div>--}}

{{--                    <div class="pricing-body">--}}
{{--                        <ul>--}}
{{--                            <li><span>Maximum</span> converting layout</li>--}}
{{--                            <li><span>Pre made</span> signup forms</li>--}}
{{--                            <li><span>Best support</span> options</li>--}}
{{--                            <li><span>No coding</span> experience needed</li>--}}
{{--                            <li><span>More pre-made</span> elements</li>--}}
{{--                            <li><span>Additional</span> demo layouts</li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
                </div>
            </div>
            <!-- Pricing box end -->
        </div>
    </div>
</section>
<!-- Pricing Section ends -->

<!-- Buy Now infobar section starts -->
<div class="buynow-infobar parallaxie" id="endow">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-8">
                <div class="section-title wow fadeInUp">
{{--                    <p>Get it Today</p>--}}
                    <h2>Ưu đãi đặc biệt</h2>
                </div>

                <div class="buynow-entry">
                    <p>
                        <span class="text-uppercase">
                            Mừng sự kiện Hari won trở thành đại sứ thương hiệu cho aura.
                        </span>
                        <br>
                        Tặng ngay 1 suất chăm sóc tái tạo da cao cấp cho 10 khách hàng đăng ký đầu tiên
                    </p>

                    <a href="#" class="btn-buynow">Liên hệ ngay</a>
                </div>
            </div>

            <div class="col-md-6 col-sm-4">
                <div class="buynow-video">
{{--                    <a href="http://www.youtube.com/watch?v=JrbJ8dXzmnE" class="popup-video"><i class="flaticon-play-button"></i></a>--}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Buy Now infobar section ends -->

<!-- Newsletter & Feature info section starts -->
<section class="newsletter-feature" id="contact">
    <div class="container">
        <!-- Section Title start -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInUp">
                    <p>Aura Beauty Clinic</p>
                    <h2>Thông tin liên hệ</h2>

                </div>
            </div>
        </div>
        <!-- Section Title end -->

        <!-- Newsletter Form start -->
        <div class="row">
            <div class="col-md-12">
                <div class="newsletter-form">
                    <p>
                        <h4>AURA BEAUTY CLINIC</h4>
                        <ul>
                            <li>Chi nhánh 1:  R1-96 Bùi Bằng Đoàn, Khu Hưng Gia 2, Phường Tâm Phong, Q.7</li>
                            <li>Hotline: 089 668 8018 - 089 669 8018</li>
                            <li>Mở cửa: Thứ 2 đến Chủ nhật (09:30 - 19:00) </li>
                            <li>Đóng cửa: Thứ 4 hằng tuần</li>
                        </ul>
                    </p>

                    <form action="" class="form-inline">
                        <div class="form-group">
                            <input class="form-control" name="add-phone" id="add-phone" type="text" placeholder="Nhập số điện thoại của bạn" required>
                            <button class="btn-subscribe" type="button" onclick="addPhone()">Yêu cầu gọi lại</button>
                        </div>
                    </form>
                    <p  style="margin-top: 15px;color: #a94442" id="message-phone"></p>

                </div>
            </div>
        </div>
        <!-- Newsletter Form end -->

        <!-- Small General Features start -->
        <div class="row">
            <div class="col-md-2 col-sm-4">
                <div class="small-feature-single wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-box">
                        <i class="flaticon-package-1"></i>
                    </div>
                    <p>Unlimited Installs and Updates</p>
                </div>
            </div>

            <div class="col-md-2 col-sm-4">
                <div class="small-feature-single wow fadeInUp" data-wow-delay="0.2s">
                    <div class="icon-box">
                        <i class="flaticon-cpu"></i>
                    </div>
                    <p>With its dual-core processor</p>
                </div>
            </div>

            <div class="col-md-2 col-sm-4">
                <div class="small-feature-single wow fadeInUp" data-wow-delay="0.3s">
                    <div class="icon-box">
                        <i class="flaticon-users"></i>
                    </div>
                    <p>Unlimited Team Members and Projects</p>
                </div>
            </div>

            <div class="col-md-2 col-sm-4">
                <div class="small-feature-single wow fadeInUp" data-wow-delay="0.4s">
                    <div class="icon-box">
                        <i class="flaticon-bluetooth"></i>
                    </div>
                    <p>Bluetooth & Wi-Fi Messenger</p>
                </div>
            </div>

            <div class="col-md-2 col-sm-4">
                <div class="small-feature-single wow fadeInUp" data-wow-delay="0.5s">
                    <div class="icon-box">
                        <i class="flaticon-support"></i>
                    </div>
                    <p>Premium Support and Help Desk</p>
                </div>
            </div>

            <div class="col-md-2 col-sm-4">
                <div class="small-feature-single wow fadeInUp" data-wow-delay="0.6s">
                    <div class="icon-box">
                        <i class="flaticon-video-camera"></i>
                    </div>
                    <p>Hight Quality Camera support</p>
                </div>
            </div>
        </div>
        <!-- Small General Features end -->
    </div>
</section>
<!-- Newsletter & Feature info section ends -->

<!-- Our Clients Section starts -->
<div class="our-clients">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="swiper-container ourclient-slider">
                    <div class="swiper-wrapper">
                        <!-- Client Logo start -->
                        <div class="swiper-slide">
                            <div class="client-logo">
                                <img src="/landing/v2/images/client1.png" alt>
                            </div>
                        </div>
                        <!-- Client Logo end -->

                        <!-- Client Logo start -->
                        <div class="swiper-slide">
                            <div class="client-logo">
                                <img src="/landing/v2/images/client2.png" alt>
                            </div>
                        </div>
                        <!-- Client Logo end -->

                        <!-- Client Logo start -->
                        <div class="swiper-slide">
                            <div class="client-logo">
                                <img src="/landing/v2/images/client3.png" alt>
                            </div>
                        </div>
                        <!-- Client Logo end -->

                        <!-- Client Logo start -->
                        <div class="swiper-slide">
                            <div class="client-logo">
                                <img src="/landing/v2/images/client4.png" alt>
                            </div>
                        </div>
                        <!-- Client Logo end -->

                        <!-- Client Logo start -->
                        <div class="swiper-slide">
                            <div class="client-logo">
                                <img src="/landing/v2/images/client5.png" alt>
                            </div>
                        </div>
                        <!-- Client Logo end -->

                        <!-- Client Logo start -->
                        <div class="swiper-slide">
                            <div class="client-logo">
                                <img src="/landing/v2/images/client1.png" alt>
                            </div>
                        </div>
                        <!-- Client Logo end -->

                        <!-- Client Logo start -->
                        <div class="swiper-slide">
                            <div class="client-logo">
                                <img src="/landing/v2/images/client2.png" alt>
                            </div>
                        </div>
                        <!-- Client Logo end -->

                        <!-- Client Logo start -->
                        <div class="swiper-slide">
                            <div class="client-logo">
                                <img src="/landing/v2/images/client3.png" alt>
                            </div>
                        </div>
                        <!-- Client Logo end -->

                        <!-- Client Logo start -->
                        <div class="swiper-slide">
                            <div class="client-logo">
                                <img src="/landing/v2/images/client4.png" alt>
                            </div>
                        </div>
                        <!-- Client Logo end -->

                        <!-- Client Logo start -->
                        <div class="swiper-slide">
                            <div class="client-logo">
                                <img src="/landing/v2/images/client5.png" alt>
                            </div>
                        </div>
                        <!-- Client Logo end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our Clients Section ends -->

<!-- Contact us & Footer section starts -->
<section class="contactus" id="add-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="section-title wow fadeInUp">
                    <p>Aura Beauty Clinic</p>
                    <h2>Đặt lịch tư vấn</h2>
                </div>

                <!-- Contact Form start -->
                <div class="contact-form">
                    <form id="contactForm" action="#" method="post" data-toggle="validator">
                        <div class="row">
                            <div class="form-group col-md-6 col-sm-6">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Tên của bạn" required>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                                <input type="text" name="add_phone" id="phone" class="form-control" placeholder="Số điện thoại của bạn" required>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-12 col-sm-12">
                                <input type="text" name="subject" id="subject" class="form-control" placeholder="Vấn đề của bạn..." required>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-12 col-sm-12">
                                <textarea rows="8" name="message" id="message" class="form-control" placeholder="Tôi có thể giúp bạn..." required></textarea>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <button type="submit" class="btn-contact" >Tư vấn ngay</button>
                                <div id="msgSubmit" class="h3 text-left hidden"></div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Contact Form end -->
            </div>

            <div class="col-md-4">
                <div class="footer-info">
                    <img src="/landing/v2/images/logo.png" alt>
                    <h5 style="font-size: 16px; color: white; text-transform: uppercase">Viện thẩm mỹ hàn quốc Aura Clinic </h5>
                    <p>Chúng tôi mong muốn khách hàng sở hữu ánh hòa quang của riêng mình sau khi sử dụng dịch vụ tại Aura Clinic</p>

                    <div class="contactinfo-single">
                        <i class="fa fa-phone"></i>
                        <h3>Hotline</h3>
                        <p> 089 668 8018 - 089 669 8018</p>
                    </div>

                    <div class="contactinfo-single">
                        <i class="fa fa-envelope "></i>
                        <h3>Email </h3>
                        <p>info@auraclinic.vn</p>
                    </div>

                    <div class="contactinfo-single">
                        <i class="fa fa-map-marker"></i>
                        <h3>Địa chỉ</h3>
                        <p>Chi nhánh 1: R1-96 Bùi Bằng Đoàn, Khu Hưng Gia 2, Phường Tâm Phong, Q.7
                            <br>
                            Mở cửa: Thứ 2 đến Chủ nhật (09:30 - 19:00) <br>
                            Đóng cửa: Thứ 4 hằng tuần
                        </p>
                    </div>

                    <div class="footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
{{--                        <a href="#"><i class="fa fa-twitter"></i></a>--}}
{{--                        <a href="#"><i class="fa fa-linkedin"></i></a>--}}
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-commenting-o"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact us & Footer section ends -->

<!-- Footer section starts -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumptotop" id="back-to-top">
                    <a href="#"><i class="fa fa-chevron-up"></i></a>
                </div>
                <div class="footer-siteinfo">
                    <p>Copyright © 2022, Aura beauty clinic</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer section ends -->

<!-- Jquery Library File -->
<script src="/landing/v2/js/jquery-1.12.4.min.js"></script>
<!-- Bootstrap js file -->
<script src="/landing/v2/js/bootstrap.min.js"></script>
<script src="/landing/v2/js/bootsnav.js"></script>
<!-- Bootstrap form validator -->
<script src="/landing/v2/js/validator.min.js"></script>
<!-- Counterup js file -->
<script src="/landing/v2/js/jquery.waypoints.min.js"></script>
<script src="/landing/v2/js/jquery.counterup.min.js"></script>
<!-- Wow js file -->
<script src="/landing/v2/js/wow.js"></script>
<!-- Swiper Carousel js file -->
<script src="/landing/v2/js/swiper.min.js"></script>
<!-- Magnific Popup core JS file -->
<script src="/landing/v2/js/jquery.magnific-popup.min.js"></script>
<!-- Parallaxie js file -->
<script src="/landing/v2/js/parallaxie.js"></script>
<!-- SmoothScroll -->
<script src="/landing/v2/js/SmoothScroll.js"></script>
<!-- Main Custom js file -->
<script src="/landing/v2/js/function.js"></script>
<script>
    function addPhone(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/phone',
            type: 'POST',
            data: {phone: $("input[name='add-phone']").val()}
        }).done(function (res) {
           if(res.success) {
               $("#message-phone").text(res.message)
               console.log(res.message)
           }
        }).fail(function (xhr) {
            console.log(xhr)
        })
    }
    </script>
</body></html>
