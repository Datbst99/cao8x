@extends('layouts.admin')
@section('title', 'Thêm danh mục')
@section('content')
    <div class="">
        @include('includes.admin.breadcrumbs', ['title' => 'Quản lý danh mục', 'name' => 'category.add'])
        <div class="container">
            <div class="card">
                <div class="card-body">
                    {!! Form::open(['url' => route('admin.category.store'), 'method' => 'post']) !!}
                        <div class="form-group">
                            <label for="">Tên danh mục</label>
                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nhập tên danh mục...']) !!}
                        </div>
{{--                        <div class="form-group">--}}
{{--                            <label for="">Danh mục cha</label>--}}
{{--                            {!! Form::select('parent', $categories, null,['class' => 'form-control', 'placeholder' => 'Chọn danh mục cha...']) !!}--}}
{{--                        </div>--}}
                        <div class="form-group">
                            <label for="">SEO title</label>
                            {!! Form::text('meta_title', null, ['class' => 'form-control', 'placeholder' => 'Seo title...']) !!}
                        </div>
                        <div class="form-group">
                            <label for="">SEO keyword</label>
                            {!! Form::text('meta_keyword', null, ['class' => 'form-control', 'placeholder' => 'Seo keyword...']) !!}
                        </div>
                        <div class="form-group">
                            <label for="">SEO description</label>
                            {!! Form::textarea('meta_description', null, ['class' => 'form-control', 'placeholder' => 'Seo description...'])!!}
                        </div>
                        <div class="form-group d-none">
                            <label for="status">
                                {!! Form::checkbox('status', \App\Models\Category::STATUS_ACTIVE, true, ['id'=> 'status'])!!}
                                Hiển thị
                            </label>

                        </div>
                        <div class="mt-3">
                            <a href="{{route('admin.category')}}" class="btn btn-danger" >Hủy</a>
                            <button class="btn btn-success" type="submit">Lưu</button>
                        </div>
                    {!! Form::close() !!}


                </div>
            </div>
        </div>
    </div>
@endsection
