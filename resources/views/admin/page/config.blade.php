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
{{--                <textarea name="" id="editor"></textarea>--}}
                <div id="textareaContent">
                    <p>The editor content goes here.</p>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
@section('before-script')
{{--    <script src="https://cdn.ckeditor.com/4.4.5.1/full-all/ckeditor.js"></script>--}}
{!! Html::script('assets/plugins/ckeditor5.1/build/ckeditor.js') !!}
<script src="{!! mix('assets/admin/js/edit-tor.js') !!}"></script>
@endsection

@section('after-script')
{{--    <script>--}}
{{--        Editor.create( document.querySelector( '#editor' ) )--}}
{{--            .then( editor => {--}}
{{--                console.log( editor );--}}
{{--            } )--}}
{{--            .catch( error => {--}}
{{--                console.error( error );--}}
{{--            } );--}}
{{--    </script>--}}
@endsection
