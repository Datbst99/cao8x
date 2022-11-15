<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
    <title>@yield('title', 'Dashboard')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="/assets/plugins/awesome/css/all.min.css">
    <link rel="stylesheet" href="{{mix('assets/admin/css/lte3x.css')}}">
    <link rel="stylesheet" href="{{mix('assets/admin/css/main.css')}}">
    @yield('before-style')
    @yield('after-style')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

@include('admin.includes._navbar')

@include('admin.includes._sidebar')


<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">@yield('title', 'Dashboard')</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        @yield('breadcrumbs')
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="mb-3">
                    @include('admin.includes._error')
                </div>
                @yield('content')
            </div>
        </section>
    </div>

    @include('admin.includes._footer')

</div>

<script src="{!! mix('assets/admin/js/lte3x.js') !!}"></script>

@yield('before-script')
@yield('after-script')

</body>
</html>
