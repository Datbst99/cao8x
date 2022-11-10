@extends('layouts.admin')

@section('title', 'Dashboard')

@section('breadcrumbs')
    {{ Breadcrumbs::render('dashboard') }}
@endsection
@section('content')
    <div>
        <div class="alert alert-success" role="alert">
            Chào mừng bạn đến với trang quản trị hệ thống.
        </div>
    </div>
@stop
