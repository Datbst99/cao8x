@extends('layouts.auth')

@section('content')
    <div class="login-logo">
        <b class="text-main-color">Đăng nhập</b>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <div class="mb-2">
                @error('phone')
                <span class="invalid-feedback d-block" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
                @error('password')
                <span class="invalid-feedback d-block" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" name="phone" class="form-control" placeholder="Số điện thoại" value="{{ old('phone') }}" >
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-phone"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Mật khẩu">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-7">
                        <div class="icheck-primary">
                            <input  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label for="remember">
                                Nhớ mật khẩu
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-5">
                        <button type="submit" class="btn btn-default btn-block">Đăng nhập</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

{{--            <div class="social-auth-links text-center mb-3">--}}
{{--                <p>- OR -</p>--}}
{{--                <a href="#" class="btn btn-block btn-primary">--}}
{{--                    <i class="fab fa-facebook mr-2"></i> Sign in using Facebook--}}
{{--                </a>--}}
{{--                <a href="#" class="btn btn-block btn-danger">--}}
{{--                    <i class="fab fa-google-plus mr-2"></i> Sign in using Google+--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <!-- /.social-auth-links -->--}}
            <p class="mb-0">
                @if (Route::has('register'))
                    <a class="text-center" href="{{ route('register') }}">Đăng ký</a>
                @endif
            </p>
            <p class="mb-1">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        Lấy lại mật khẩu
                    </a>
                @endif
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>

@endsection
