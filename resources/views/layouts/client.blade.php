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
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <!-- Stylesheets -->
    {!! Html::style('assets/plugins/fontawesome/css/all.css') !!}
{{--    {!! Html::style('assets/plugins/slick/slick.css') !!}--}}
    {!! Html::style('assets/plugins/carousel/carousel.css') !!}
    {{--    {!! Html::style('assets/plugins/jquery-ui/jquery-ui.css') !!}--}}
    @yield('plugin_style')

    {!! Html::style('assets/plugins/flaticon/css/flaticon.css') !!}
    {!! Html::style(mix('assets/client/css/app.css')) !!}
    @yield('style')

</head>
<body>

    @include('includes.client.header')


    <div>
        @yield('content')
    </div>


@include('includes.client.footer')

<!--====== Javascripts & Jquery ======-->
@include('includes.partials.params')



    {!! Html::script('assets/plugins/jquery/jquery.min.js') !!}
    {!! Html::script('assets/plugins/carousel/carousel.js') !!}
    @yield('plugin_script')
    {{--{!! Html::script('assets/plugins/jquery/jquery.zoom.min.js') !!}--}}
    {{--{!! Html::script('assets/plugins/jquery-ui/jquery-ui.js') !!}--}}
{!! Html::script(mix('assets/client/js/theme.js')) !!}
{!! Html::script(mix('js/app.js')) !!}
@yield('script')

</body>
</html>
