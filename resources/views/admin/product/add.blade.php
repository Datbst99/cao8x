@extends('layouts.admin')
@section('title', 'Thêm sản phẩm')
@section('style')
    {!! Html::style('assets/plugins/beagle/bootstrap-slider/css/bootstrap-slider.min.css') !!}
    <style>
        .ck-editor__editable {
            min-height: 500px;
        }
    </style>
@endsection
@section('content')
    @include('includes.admin.breadcrumbs', ['title' => 'Thêm sản phẩm', 'name' => 'product.add'])
    <div class="card">
        <div class="card-body">
            <div>
                {!! Form::open(['method' => 'post', 'url' => route('admin.product.store')]) !!}
                <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'Nhập tên sản phẩm']) !!}
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Giá bán</label>
                            {!! Form::number('price', old('price'), ['class' => 'form-control', 'placeholder' => 'Nhập giá bán']) !!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Giá khuyến mại</label>
                            {!! Form::number('sale_price', old('sale_price'), ['class' => 'form-control', 'placeholder' => 'Nhập giá khuyến mại']) !!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Danh mục</label>
                    {!! Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder' => '-- Chọn danh mục --']) !!}
                </div>
                <label for="">Thêm hình ảnh</label> <br>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-secondary" id="btn_file_add" type="button">Chọn file</button>
                    </div>
                    <input type="text" class="form-control" id="file_name_add" name="thumbnail" placeholder="Tên file" multiple value="{{old('img_post')}}">
                </div>
                <div class="form-group">
                    <label for="">Seo title </label>
                    {!! Form::text('meta_title', old('meta_title'), ['class' => 'form-control', 'placeholder' => 'Seo title']) !!}
                </div>
                <div class="form-group">
                    <label for="">Seo keyword</label>
                    {!! Form::text('meta_keyword', old('meta_keyword'), ['class' => 'form-control', 'placeholder' => 'Seo keyword']) !!}
                </div>
                <div class="form-group">
                    <label for="">Seo description </label>
                    {!! Form::text('meta_description', old('meta_description'), ['class' => 'form-control', 'placeholder' => 'Seo description']) !!}
                </div>
                <div class="form-group">
                    <label for="">Hiển thị sản phẩm</label> <br>
                    <div class="d-flex">
                        <div class="form-check mr-2">
                            {!! Form::radio('status', true, true, ['class' => 'form-check-input', 'id' => 'status_active']) !!}
                            <label class="form-check-label" for="status_active">
                                Có
                            </label>
                        </div>
                        <div class="form-check">
                            {!! Form::radio('status', false, false, ['class' => 'form-check-input', 'id' => 'status_init']) !!}
                            <label class="form-check-label" for="status_init">
                                Không
                            </label>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <a href="{{route('admin.product')}}" class="btn btn-danger" >Hủy</a>
                    <button class="btn btn-success" type="submit">Xác nhận</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@section('script')
    {!! Html::script('assets/plugins/ckeditor/ckeditor.js') !!}
    {!! Html::script('ckfinder/ckfinder.js') !!}
    {!! Html::script(mix('assets/admin/js/main.js'))!!}
<script>
    CKEDITOR.replace('ckeditor', {
        filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
        filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
    });

    var button1 = document.getElementById('btn_file_add');
    button1.onclick = function() {
        selectFileWithCKFinder('file_name_add');
    };

    function selectFileWithCKFinder( elementId ) {
        CKFinder.modal({
            chooseFiles: true,
            width: 800,
            height: 600,
            onInit: function (finder) {
                finder.on('files:choose', function (evt) {
                    var url = '';
                    for (i = 0; i < evt.data.files.models.length; i++) {
                        var file = evt.data.files.models[i];
                        var tempurl = file.getUrl();
                        url += tempurl;
                    }
                    var output = document.getElementById(elementId);
                    output.value = url;
                });
                finder.on('file:choose:resizedImage', function (evt) {
                    var url = '';
                    for (i = 0; i < evt.data.files.models.length; i++) {
                        var file = evt.data.files.models[i];
                        var tempurl = file.getUrl();
                        url += tempurl;
                    }
                    var output = document.getElementById(elementId);
                    output.value = url;
                });
            }
        })
    }
</script>
@endsection
