@extends('layouts.admin')

@section('title', 'Cấu hình nội dung hiển thị')

@section('breadcrumbs')
    {{ Breadcrumbs::render('admin.category.page') }}
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open() !!}
            <div class="form-group">
                <label for="">Seo title</label>
                {!! Form::text('seo_title', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                <label for="">Seo keywords</label>
                {!! Form::text('seo_keywords', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                <label for="">Seo description</label>
                {!! Form::text('seo_description', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                <label for="">Nội dung hiển thị cho danh mục</label>
                <textarea name="" id="summary-ckeditor"></textarea>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
@section('before-script')
    <script src="https://cdn.ckeditor.com/4.4.5.1/full-all/ckeditor.js"></script>

@endsection

@section('after-script')
    <script>
        CKEDITOR.replace( 'summary-ckeditor');
    </script>
@endsection
