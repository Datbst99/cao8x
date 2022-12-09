@extends('layouts.admin')

@section('title', 'Danh sách danh mục')

@section('breadcrumbs')
    {{ Breadcrumbs::render('admin.category') }}
@endsection
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="text-right">
                    <a href="{{route('admin.category.create')}}" class="btn btn-primary btn-sm"><i class="far fa-plus"></i> Thêm danh mục</a>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead >
                        <tr class="table-light">
                            <th class="text-nowrap">Tên danh mục</th>
                            <th class="text-nowrap">Thứ tự</th>
                            <th class="text-nowrap">Trạng thái</th>
                            <th class="text-nowrap">Cấu hình nội dung</th>
                            <th style="width: 8%">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td class="text-nowrap">{{$category->title}}</td>
                            <td class="text-nowrap">{{$category->index}}</td>
                            <td class="text-nowrap">{!!  $category->htmlStatus() !!}</td>
                            <td class="text-nowrap">{!! $category->htmlPageConfig() !!}</td>
                            <td class="text-nowrap">
                                <a href="{{$category->linkConfigPage()}}" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Cấu hình nội dung"><i class="far fa-cogs"></i></a>
                                <a href="{{$category->linkEdit()}}" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Chỉnh sửa"><i class="fas fa-pen"></i></a>
                                <a href="{{$category->linkDelete()}}" class="btn btn-danger btn-xs" onclick="return confirm(`Bạn có chắc chắn muốn danh mục {{$category->title}} không?`);" data-toggle="tooltip" data-placement="top" title="Xóa"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                            @foreach($category->children as $child)
                                <tr>
                                    <td class="text-nowrap"><span class=" ml-2">-- {{$child->title}}</span></td>
                                    <td class="text-nowrap">{{$category->index .' - '. $child->index}}</td>
                                    <td class="text-nowrap">{!!  $child->htmlStatus() !!}</td>
                                    <td class="text-nowrap">{!! $child->htmlPageConfig() !!}</td>
                                    <td class="text-nowrap">
                                        <a href="{{$child->linkConfigPage()}}" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Cấu hình nội dung"><i class="far fa-cogs"></i></a>
                                        <a href="{{$child->linkEdit()}}" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Chỉnh sửa"><i class="fas fa-pen"></i></a>
                                        <a href="{{$child->linkDelete()}}" class="btn btn-danger btn-xs" onclick="return confirm(`Bạn có chắc chắn muốn danh mục {{$child->title}} không?`);" data-toggle="tooltip" data-placement="top" title="Xóa"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
