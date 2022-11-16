<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Biyoki.com</title>
    <link rel="stylesheet" href="/client/css/lightgallery.min.css">
    <link rel="stylesheet" href="/client/css/animate.css">
    @yield('plugins-style')

    <link rel="stylesheet" id="fagsfacf-public-style-css" href="/client/css/fagsfacf-public-css.css" type="text/css" media="all">
    <link rel="stylesheet" id="responsive-lightbox-tosrus-css" href="client/css/jquery.tosrus.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="megamenu-css" href="/client/css/style_en_gb.css" type="text/css" media="all">
    <link rel="stylesheet" id="dashicons-css" href="/client/css/dashicons.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="flatsome-icons-css" href="/client/css/fl-icons.css" type="text/css" media="all">
    <link rel="stylesheet" id="flatsome-main-css" href="/client/css/flatsome.css" type="text/css" media="all">

    <link rel="stylesheet" id="flatsome-style-css" href="/client/css/style.css" type="text/css" media="all">
    <link rel="stylesheet" id="flatsome-googlefonts-css" href="//fonts.googleapis.com/css?family=Montserrat%3Aregular%2C700%2Cregular%2C700%7CDancing+Script%3Aregular%2C400&amp;display=swap&amp;ver=3.9" type="text/css" media="all">
    <link  rel="stylesheet" href="/client/css/custom.css">
    @yield('after-style')
</head>
<body data-rsssl="1" class="home page-template page-template-chili-homepage page-template-chili-homepage-php page page-id-327 mega-menu-primary boxed lightbox nav-dropdown-has-arrow">


<?php
$bannerLeft  = \App\Models\ConfigSystem::where('key', \App\Models\ConfigSystem::BANNER_LEFT)->first();
$bannerRight  = \App\Models\ConfigSystem::where('key', \App\Models\ConfigSystem::BANNER_RIGHT)->first();
?>
@if($bannerLeft && $bannerLeft->value)
    <div class="banner-left">
        <a href="{{$bannerLeft->link}}">
            <img src="{{$bannerLeft->value}}" alt="{{$bannerLeft->title}}">
        </a>
    </div>
@endif

@if($bannerRight && $bannerRight->value)
    <div class="banner-right">
        <a href="{{$bannerRight->link}}">
            <img src="{{$bannerRight->value}}" alt="{{$bannerRight->title}}">
        </a>
    </div>
@endif

<div id="wrapper">

    @include('client.includes._header')

    @yield('content')


    @include('client.includes._footer')
</div>


@yield('modal')





<script type="text/javascript" src="/assets/plugins/clone/jquery.js"></script>
<script type="text/javascript" src="/assets/plugins/clone/flatsome-live-search.js"></script>
<script type="text/javascript" src="/assets/plugins/clone/hoverIntent.min.js"></script>
<script type="text/javascript">
    var flatsomeVars = {"rtl":"","sticky_height":"70","lightbox":{"close_markup":"<button title=\"%title%\" type=\"button\" class=\"mfp-close\"><svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"><\/line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"><\/line><\/svg><\/button>","close_btn_inside":false},"user":{"can_edit_pages":false},"i18n":{"mainMenu":"Main Menu"},"options":{"cookie_notice_version":"1"}};
</script>
<script type="text/javascript" src="/assets/plugins/clone/flatsome.js"></script>
<script src="/assets/plugins/clone/lightgallery-all.min.js"></script>
<script src='https://caokidsplay.com/wp-content/themes/chili-theme/chili-framework/assets/js/wow.min.js'></script>
<script src="/assets/plugins/clone/wowjs-repeat-animation.js"></script>
<script src="/assets/plugins/clone/scrollspy.js"></script>
@yield('plugins-script')
@yield('after-script')
<script>
    jQuery(document).ready(function($) {
        $('.slider').slick({
            arrows: true,
            autoplay: true,
            prevArrow: "<button class=\"flickity-button flickity-prev-next-button previous\" type=\"button\" aria-label=\"Previous\"><svg class=\"flickity-button-icon\" viewBox=\"0 0 100 100\"><path d=\"M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z\" class=\"arrow\"></path></svg></button>",
            nextArrow: "<button class=\"flickity-button flickity-prev-next-button next\" type=\"button\" aria-label=\"Next\"><svg class=\"flickity-button-icon\" viewBox=\"0 0 100 100\"><path d=\"M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z\" class=\"arrow\" transform=\"translate(100, 100) rotate(180) \"></path></svg></button>"
        });

        var sizeFullScreen = $(this).width()
        var elementLeft = $('.banner-left')
        var elementRight = $('.banner-right')
        if(sizeFullScreen > 992) {
            elementLeft.css('display', 'block')
            elementRight.css('display', 'block')
            var sizeContainer = $('#wrapper').width()
            var sizeBannerLeft = elementLeft.width() + 1
            var sizeBannerRight = elementRight.width() + 1
            var positionLeft = (sizeFullScreen - sizeContainer) / 2 - sizeBannerLeft
            var positionRight = (sizeFullScreen - sizeContainer) / 2 - sizeBannerRight

            elementLeft.css('left', positionLeft + 'px')
            elementRight.css('right', positionRight + 'px')
        } else {
            elementLeft.css('display', 'none')
            elementRight.css('display', 'none')
        }

        $(window).resize(function (){
            var sizeFullScreen = $(this).width()
            var elementLeft = $('.banner-left')
            var elementRight = $('.banner-right')
            if(sizeFullScreen > 992) {
                elementLeft.css('display', 'block')
                elementRight.css('display', 'block')

                var sizeContainer = $('#wrapper').width()
                var sizeBannerLeft = elementLeft.width() + 1
                var sizeBannerRight = elementRight.width() + 1
                var positionLeft = (sizeFullScreen - sizeContainer) / 2 - sizeBannerLeft
                var positionRight = (sizeFullScreen - sizeContainer) / 2 - sizeBannerRight

                elementLeft.css('left', positionLeft + 'px')
                elementRight.css('right', positionRight + 'px')
            } else {
                elementLeft.css('display', 'none')
                elementRight.css('display', 'none')
            }

        })
    });



</script>
</body>
</html>
