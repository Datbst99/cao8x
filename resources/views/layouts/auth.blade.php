<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <title>@yield('title', 'Dashboard')</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="/assets/plugins/awesome/css/all.min.css">
    <link rel="stylesheet" href="{{mix('assets/admin/css/lte3x.css')}}">
    <link rel="stylesheet" href="{{mix('assets/admin/css/auth.css')}}">
    @yield('before-style')
    @yield('after-style')
</head>
<body class="hold-transition login-page custom-auth">
<div class="login-box">


    @yield('content')
</div>


<script src="{!! mix('assets/admin/js/lte3x.js') !!}"></script>

@yield('before-script')
@yield('after-script')

</body>
</html>
