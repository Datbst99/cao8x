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
                <label for="">Nội dung hiển thị cho danh mục</label>
                {{--                <textarea name="" id="textareaContent"></textarea>--}}
                <div class="border" style="min-height: 100px">
                    <div id="textareaContent">
                        {!! $page->content ?? '' !!}
                    </div>
                </div>
            </div>

            <div>
                <button class="btn btn-primary" id="save" type="button" onclick="pushData({{$id}})">Xác nhận</button>
                <button class="btn btn-primary" type="button">Xem trước</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
@section('before-script')
{!! Html::script('assets/plugins/ckeditor5.1/build/ckeditor.js') !!}
{!! Html::script('assets/plugins/ckfinder/ckfinder.js') !!}
<script src="{!! mix('assets/admin/js/edit-tor.js') !!}"></script>
@endsection
