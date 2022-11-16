@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
    <div>
        @include('includes.admin.breadcrumbs', ['title' => 'Dashboard', 'name' => 'dashboard'])
        <div class="main-content container-fluid">
           <div class="card">
               <div class="card-header">
                   <h2>Xin chào {{auth()->user()->name}}</h2>
               </div>
               <div class="card-body">
                   Chào mừng bạn đã tới trang quản trị hệ thống bán hàng trực tuyến của {{env('APP_NAME')}}
               </div>
           </div>
        </div>
    </div>
@endsection
