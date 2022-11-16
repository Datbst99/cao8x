@extends('layouts.guest')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <a href="/">
                    <img src="assets/images/zodin_pink.png" alt="Trang chủ">
                </a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="wrap d-md-flex">
                    <div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
                        <div class="text w-100">
                            <h2>Chào mừng bạn tới với trang đăng ký</h2>
                            <p>Nếu bạn đã có tài khoản?</p>
                            <a href="{{route('login')}}" class="btn btn-white btn-outline-white">Đăng nhập ngay</a>
                        </div>
                    </div>
                    <div class="login-wrap p-4 p-lg-5">
                        <div class="d-flex">
                            <div class="w-100">
                                <h3 class="mb-4">Đăng ký</h3>
                            </div>
                            <div class="w-100">
                                <p class="social-media d-flex justify-content-end">
                                    <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                                    <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a>
                                </p>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('register') }}" class="signin-form">
                            @csrf
                            <div class="form-group mb-3">
                                <label class="label" for="name">Tên đăng nhập</label>
                                <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Tên đăng nhập" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="email">Email</label>
                                <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="Email đăng nhập" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="password">Mật khẩu</label>
                                <input type="password" name="password" class="form-control" placeholder="Mật khẩu" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="password_confirmation">Nhập lại mật khẩu</label>
                                <input type="password" name="password_confirmation" class="form-control" placeholder="Nhập lại mật khẩu" required>
                            </div>
                            <div>
                                @foreach ($errors->all() as $error)
                                    <li class="text-danger mb-2">{{ $error }}</li>
                                @endforeach
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Đăng ký</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
