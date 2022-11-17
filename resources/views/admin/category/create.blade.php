@extends('layouts.admin')

@section('title', 'Thêm danh mục')

@section('breadcrumbs')
    {{ Breadcrumbs::render('admin.category.create') }}
@endsection
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                {!! Form::open(['url' => route('admin.category.store'), 'method' => 'post']) !!}
                <div class="form-group">
                    <label for="">Tên danh mục</label>
                    <input type="text" name="title" class="form-control" placeholder="Nhập tên danh mục" value="{{old('title')}}">
                </div>
                <div class="form-group">
                    <label for="">Thứ tự hiển thị</label>
                    <input type="number" name="index" class="form-control" placeholder="Nhập thứ tự hiển thị" value="{{old('index')}}">
                </div>
                <div class="form-group">
                    <label for="">Chọn danh mục cha</label>
                    {!! Form::select('parent_id', $categories, old('parent_id'), ['class' => 'form-control', 'placeholder' => '--Chọn danh mục cha--']) !!}
                </div>
                <div class="form-group">
                    <label for="">Seo title</label>
                    {!! Form::text('seo_title', null, ['class' => 'form-control', 'placeholder' => 'Seo title']) !!}
                </div>
                <div class="form-group">
                    <label for="">Seo keywords</label>
                    {!! Form::text('seo_keywords', null, ['class' => 'form-control', 'placeholder' => 'Seo keywords']) !!}
                </div>
                <div class="form-group">
                    <label for="">Seo description</label>
                    {!! Form::text('seo_description', null, ['class' => 'form-control', 'placeholder' => 'Seo description']) !!}
                </div>
                <div class="form-group">
                    <label for="">Hiển thị danh mục</label>
                    {!! Form::select('status', [1 => 'Hiển thị', 2 => 'Tạm ẩn'], old('status'), ['class' => 'form-control']) !!}
                </div>
                <div>
                    <a href="{{route('admin.category')}}" class="btn btn-secondary">Hủy</a>
                    <button class="btn btn-success" type="submit">Xác nhận</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
