@extends('layouts.admin')
@section('title', 'Quản lý quyền truy cập')
@section('content')
    <div class="">
        @include('includes.admin.breadcrumbs', ['title' => 'Quản lý quyền', 'name' => 'role'])
{{--        <div class="d-flex justify-content-end pb-3">--}}
{{--            <a href="" class="btn btn-sm btn-primary mr-3"><i class="fas fa-plus"></i> Thêm role</a>--}}
{{--            <a href="" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Thêm permission</a>--}}
{{--        </div>--}}
        <div class="card">
            <div class="card-header">
                Quản lý quyền truy cập
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th class="text-nowrap">Role</th>
                            <th class="text-nowrap">Permission</th>
                            <th class="text-nowrap">User</th>
                            <th class="text-nowrap" style="width: 5%">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $role)
                                <tr>
                                    <td class="text-nowrap">{{$role->name}}</td>
                                    <td class="text-nowrap">
                                        <ul class="m-0">
                                            @foreach($role->permissions as $permission)
                                                <li>{{$permission->name}}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td class="text-nowrap">
                                        {{$role->users()->count()}}
                                    </td>
                                    <td class="text-nowrap">
                                        <div class="d-flex">
                                            <a href="" class="btn btn-xs btn-primary">
                                                <i class="fa fa-pencil" ></i>
                                            </a>
                                            <a href="" class="btn btn-xs btn-danger" disabled>
                                                <i class="far fa-trash-alt"></i>
                                            </a>
                                        </div>
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
