@extends('layouts.admin')

@section('title', 'Quản lý khách hàng')

@section('breadcrumbs')
    {{ Breadcrumbs::render('admin.user') }}
@endsection
@section('content')
    <div class="">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead >
                        <tr class="table-light">
                            <th class="text-nowrap">Tên khách hàng</th>
                            <th class="text-nowrap">Số điện thoại</th>
                            <th class="text-nowrap">Email</th>
                            <th class="text-nowrap">Quyền truy cập</th>
                            <th class="text-nowrap">Ngày tạo</th>
                            <th class="text-nowrap">Trạng thái</th>
                            <th style="width: 8%">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td class="text-nowrap">{{$user->name}}</td>
                                <td class="text-nowrap">{{$user->phone}}</td>
                                <td class="text-nowrap">{{$user->email}}</td>
                                <td class="text-nowrap">{{$user->roles()->first()->name}}</td>
                                <td class="text-nowrap">{{$user->created_at}}</td>
                                <td class="text-nowrap">{!! $user->htmlStatus() !!}</td>
                                <td class="text-nowrap">
                                    <a href="{{$user->linkEdit()}}" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Chỉnh sửa"><i class="fas fa-pen"></i></a>
{{--                                    <a href="{{$user->linkDelete()}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Xóa"><i class="fas fa-trash"></i></a>--}}
                                </td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
