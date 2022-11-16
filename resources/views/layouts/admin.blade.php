<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <!-- favicon -->

    {!! Html::style('assets/plugins/awesome/css/all.css') !!}
    {!! Html::style(mix('assets/admin/app.css')) !!}

    @yield('style')
</head>
<body>
<div class="be-wrapper">
    @include('includes.admin.navbar')
    @include('includes.admin.sidebar')

    <div class="content-wrapper p-3">
        @include('includes.partials.flash_message')
        @yield('content')
    </div>
</div>
@include('includes.partials.params')
{!! Html::script('assets/plugins/jquery/jquery.min.js') !!}
{!! Html::script(mix('js/app.js')) !!}
{!! Html::script(mix('assets/admin/js/main.js')) !!}


@yield('script')

<script type="text/javascript">
    $(document).ready(function(){
        //-initialize the javascript
        App.init();
    });

</script>
</body>
</html>
