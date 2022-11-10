@extends('layouts.admin')

@section('title', 'Chỉnh sửa thông tin khách hàng')

@section('breadcrumbs')
    {{ Breadcrumbs::render('admin.user.edit') }}
@endsection
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                {!! Form::open(['method' => 'post']) !!}
                <div class="form-group">
                    <label for="">Tên người dùng</label>
                    <input type="text" name="name" class="form-control" placeholder="Nhập tên người dùng" value="{{old('name')?? $user->name}}">
                </div>
                <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" name="phone" class="form-control" placeholder="Nhập số điện thoại" value="{{old('index') ?? $user->phone}}">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Nhập email" value="{{old('email') ?? $user->email}}">
                </div>
                <div class="form-group">
                    <label for="">Mật khẩu mới</label>
                    <input type="text" name="password" class="form-control" placeholder="Nhập mật khẩu mới" value="{{old('password')}}">
                </div>
                <div>
                    <a href="{{route('admin.user')}}" class="btn btn-secondary">Hủy</a>
                    <button class="btn btn-success" type="submit">Xác nhận</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
