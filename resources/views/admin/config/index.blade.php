@extends('layouts.admin')

@section('title', 'Cấu hình hệ thống')

@section('breadcrumbs')
    {{ Breadcrumbs::render('admin.config') }}
@endsection
@section('content')
   <div class="container">
       {!! Form::open(['method' => 'post']) !!}
       <div class="d-flex">
           <div class="item-config">
               <div class="title">Banner trái</div>
               <div class="push-item banner text-banner" onclick="selectFileWithCKFinder(this)">
                   <div class="text-change">
                       200 x 400
                   </div>
                   <div class="wp-push @if($bannerLeft && $bannerLeft->value) d-block @endif">
                       <img src="" alt="" class="image-banner">
                       <input type="text" class="file-img d-none" name="banner-left">
                   </div>
               </div>
           </div>
           <div class="item-config">
               <div class="title">Banner giữ</div>
               <div class="push-item banner-modal text-banner" onclick="selectFileWithCKFinder(this)">
                   <div class="text-change" >
                       350 x 350
                   </div>
                   <div class="wp-push">
                       <img src="" alt="" class="image-banner">
                       <input type="text" class="file-img d-none" name="banner-modal">
                   </div>
               </div>
           </div>
           <div class="item-config">
               <div class="title">Banner phải</div>
               <div class="push-item banner text-banner" onclick="selectFileWithCKFinder(this)">
                   <div class="text-change">
                       200 x 400
                   </div>
                   <div class="wp-push">
                       <img src="" alt="" class="image-banner">
                       <input type="text" class="file-img d-none" name="banner-right">
                   </div>
               </div>
           </div>

       </div>
       <div class="mt-4">
           <button class="btn btn-primary" type="submit">Cập nhật</button>
       </div>
       {!! Form::close() !!}
   </div>
@stop

@section('before-script')
    {!! Html::script('assets/plugins/ckfinder/ckfinder.js') !!}
@endsection

@section('after-script')
    <script>
        function selectFileWithCKFinder( obj ) {
            var url = '';
            CKFinder.modal({
                chooseFiles: true,
                width: 800,
                height: 600,
                onInit: function (finder) {
                    finder.on('files:choose', function (evt) {
                        for (i = 0; i < evt.data.files.models.length; i++) {
                            var file = evt.data.files.models[i];
                            var tempurl = file.getUrl();
                            url += tempurl;
                        }
                        $(obj).find('.wp-push').css('display' , 'block')
                        $(obj).find('.text-change').css('display' , 'none')
                        $(obj).find('.image-banner').attr('src', url)
                        $(obj).find('.file-img').val(url)
                    });
                    finder.on('file:choose:resizedImage', function (evt) {
                        for (i = 0; i < evt.data.files.models.length; i++) {
                            var file = evt.data.files.models[i];
                            var tempurl = file.getUrl();
                            url += tempurl;
                        }
                        $(obj).find('.wp-push').css('display' , 'block')
                        $(obj).find('.text-change').css('display' , 'none')
                        $(obj).find('.image-banner').attr('src', url)
                        $(obj).find('.file-img').val(url)
                    });

                }
            })
        }
    </script>
@stop
