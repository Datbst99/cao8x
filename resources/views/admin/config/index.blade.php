@extends('layouts.admin')

@section('title', 'Cấu hình hệ thống')

@section('breadcrumbs')
    {{ Breadcrumbs::render('admin.config') }}
@endsection
@section('content')
   <div class="container">
       <div class="d-flex justify-content-center">
           <div class="item-config">
               <div class="title">Banner trái</div>
               <div class="push-item banner text-banner">
                  <div class="w-100 h-100 d-flex justify-content-center align-items-center" onclick="selectFileWithCKFinder(this)">
                      <div class="text-change text-center @if($bannerLeft && $bannerLeft->value) d-none @endif">
                          <span class="d-block">200 x 400</span>
                          <span style="font-weight: 500"><i class="fas fa-cloud-upload"></i> Upload file </span>
                      </div>
                      <div class="wp-push @if($bannerLeft && $bannerLeft->value) d-block @endif">
                          <img src="{{$bannerLeft ? $bannerLeft->value : ''}}" alt="" class="image-banner">
                          <input type="text" class="file-img d-none" name="banner-left">
                      </div>
                  </div>
                   @if($bannerLeft && $bannerLeft->value)
                      <div class="action">
                          <div class="add-link mr-3" data-toggle="modal" data-target="#exampleModal" data-config="{{$bannerLeft->id}}" data-link="{{$bannerLeft->link}}" data-title="{{$bannerLeft->title}}">
                              <i class="far fa-link"></i>
                          </div>
                          <div class="deleteFile" onclick="deleteFile(this)">
                              <i class="fas fa-trash"></i>
                          </div>
                      </div>
                   @endif
               </div>
           </div>
           <div class="item-config">
               <div class="title">Banner giữ</div>
               <div class="push-item banner-modal text-banner" >
                   <div class="w-100 h-100 d-flex justify-content-center align-items-center" onclick="selectFileWithCKFinder(this)">
                       <div class="text-change text-center @if($bannerModal && $bannerModal->value) d-none @endif" >
                           <span class="d-block">350 x 350</span>
                           <span style="font-weight: 500"><i class="fas fa-cloud-upload"></i> Upload file </span>
                       </div>
                       <div class="wp-push @if($bannerModal && $bannerModal->value) d-block @endif">
                           <img src="{{$bannerModal ? $bannerModal->value : ''}}" alt="" class="image-banner">
                           <input type="text" class="file-img d-none" name="banner-modal">
                       </div>
                   </div>
                   @if($bannerModal && $bannerModal->value)
                       <div class="action">
                           <div class="add-link mr-3" data-toggle="modal" data-target="#exampleModal" data-config="{{$bannerModal->id}}" data-link="{{$bannerModal->link}}" data-title="{{$bannerModal->title}}">
                               <i class="far fa-link"></i>
                           </div>
                           <div class="deleteFile" onclick="deleteFile(this)">
                               <i class="fas fa-trash"></i>
                           </div>
                       </div>
                   @endif
               </div>
           </div>
           <div class="item-config">
               <div class="title">Banner phải</div>
               <div class="push-item banner text-banner">
                  <div class="w-100 h-100 d-flex justify-content-center align-items-center"  onclick="selectFileWithCKFinder(this)">
                      <div class="text-change text-center @if($bannerRight && $bannerRight->value) d-none @endif">
                          <span class="d-block">200 x 400</span>
                          <span style="font-weight: 500"><i class="fas fa-cloud-upload"></i> Upload file </span>
                      </div>
                      <div class="wp-push @if($bannerRight && $bannerRight->value) d-block @endif">
                          <img src="{{$bannerRight ? $bannerRight->value : ''}}" alt="" class="image-banner">
                          <input type="text" class="file-img d-none" name="banner-right">
                      </div>
                  </div>
                   @if($bannerRight && $bannerRight->value)
                       <div class="action">
                           <div class="add-link mr-3" data-toggle="modal" data-target="#exampleModal" data-config="{{$bannerRight->id}}" data-link="{{$bannerRight->link}}" data-title="{{$bannerRight->title}}">
                               <i class="far fa-link"></i>
                           </div>
                           <div class="deleteFile" onclick="deleteFile(this)">
                               <i class="fas fa-trash"></i>
                           </div>
                       </div>
                   @endif
               </div>
           </div>

       </div>
   </div>

   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
           <form method="post" action="{{route('admin.config.link')}}">
               @csrf
               <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title" id="exampleModalLabel">Thêm đường dẫn</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <div class="modal-body">
                       <div class="form-group">
                           <label for="" class="col-form-label">Link</label>
                           <input type="text" class="link form-control" name="link">
                       </div>
                       <div class="form-group">
                           <label for="" class="col-form-label">Tiêu đề</label>
                           <input type="text" class="title form-control" name="title">
                       </div>
                       <input type="text" class="key d-none" name="key" value="">
                   </div>
                   <div class="modal-footer">
                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                       <button type="submit" class="btn btn-primary">Cập nhật</button>
                   </div>
               </div>
           </form>
       </div>
   </div>
@stop

@section('before-script')
    {!! Html::script('assets/plugins/ckfinder/ckfinder.js') !!}
@endsection

@section('after-script')
    <script>
        function selectFileWithCKFinder( obj ) {
                var url = ''
                CKFinder.modal({
                chooseFiles: true,
                width: 800,
                height: 600,
                onInit: function (finder) {
                    finder.on('files:choose', function (evt) {
                        url = evt.data.files.first().getUrl();
                        pushFileToSave(url, obj)
                    });
                }
            })

        }

        function pushFileToSave(url, obj){
            $.ajax({
                url: '/admin/config',
                method: 'post',
                data: {
                    name: $(obj).find('.file-img').attr('name'),
                    value: url,
                    _token: $('meta[name="csrf-token"]').attr('content')
                }
            }).done(function (res){
                if(res.success) {
                    location.reload()
                }
            })
        }

        function deleteFile(obj){
            let element = $(obj).parents('.item-config').find('.file-img').attr('name')

            $.ajax({
                url: '/admin/config/delete',
                method: 'post',
                data: {
                    name: element,
                    _token: $('meta[name="csrf-token"]').attr('content')
                }
            }).done(function (res){
                if(res.success) {
                    location.reload()
                }
            })
        }

        $('#exampleModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var config = button.data('config')
            var link = button.data('link')
            var title = button.data('title')
            var modal = $(this)
            modal.find('.modal-body .key').val(config)
            modal.find('.modal-body .link').val(link)
            modal.find('.modal-body .title').val(title)
        })

    </script>
@stop
