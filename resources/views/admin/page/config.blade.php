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
                <label for="">Background hiển thị</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button class="btn btn-secondary" id="btn_file_add" type="button">Chọn file</button>
                    </div>
                    <input type="text" class="form-control" readonly id="file_name_add" name="background" placeholder="Tên file" value="{{$page->path_background?? ''}}">
                </div>
            </div>
            <div class="form-group">
                <label for="">Nội dung hiển thị cho danh mục</label>
                <div class="border" style="min-height: 100px">
                    <div id="textareaContent">
                        {!! $page->content ?? '' !!}
                    </div>
                </div>
            </div>

            <div>
                <button class="btn btn-primary" id="save" type="button" onclick="pushData({{$id}})">Xác nhận</button>
{{--                <button class="btn btn-primary" type="button">Xem trước</button>--}}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
@section('before-script')
{!! Html::script('assets/plugins/ckeditor5.1/build/ckeditor.js') !!}
{!! Html::script('assets/plugins/ckfinder/ckfinder.js') !!}
<script src="{!! mix('assets/admin/js/edit-tor.js') !!}"></script>

<script>
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
