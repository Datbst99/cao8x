@extends('layouts.admin')
@section('title', 'Chỉnh sửa thông tin')
@section('content')
    <div class="">
        @include('includes.admin.breadcrumbs', ['title' => 'Chỉnh sửa thông tin', 'name' => 'user.edit'])
        <div class="card">
            <div class="card-header">
                Chỉnh sửa thông tin người dùng
            </div>
            <div class="card-body">
               {!! Form::open(['url' => route('admin.user.update', ['id' => $user->id]), 'method' => 'post']) !!}
                    <div class="form-group">
                        <div class="row">
                            <label class="col-xl-2">
                                Tên người dùng
                            </label>
                            <div class="col-xl-10">
                                {!! Form::text('name', $user->name, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-xl-2">
                                Email
                            </label>
                            <div class="col-xl-10">
                                {!! Form::text('email', $user->email, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <label class="col-xl-2">
                                Mật khẩu mới
                            </label>
                            <div class="col-xl-10">
                                {!! Form::password('pass', ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group d-none">
                        <div class="row">
                            <label class="col-xl-2">
                                Trạng thái người dùng
                            </label>
                            <div class="col-xl-10">
                                <label for="status">
                                    {!! Form::checkbox('status', $user->status, $user->status == \App\Models\User::ENABLE_STATUS ,['id' => 'status']) !!}
                                    Kích hoạt
                                </label>
                            </div>
                        </div>
                    </div>

                <div class="mt-5">
                    <a href="{{route('admin.user')}}" class="btn btn-danger" >Hủy</a>
                    <button class="btn btn-success" type="submit">Xác nhận</button>
                </div>
               {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
