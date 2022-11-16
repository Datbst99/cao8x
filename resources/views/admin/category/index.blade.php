@extends('layouts.admin')
@section('title', 'Quản lý danh mục')
@section('content')
    <div class="">
        @include('includes.admin.breadcrumbs', ['title' => 'Quản lý danh mục', 'name' => 'category'])

        <div class="card">
            <div class="card-header ">
                <h5 class="card-title">Quản lý danh mục</h5>
                <div class="float-right">
                    <a href="{{route('admin.category.add')}}" class="btn btn-sm btn-main"><i class="fas fa-plus"></i> Thêm danh mục</a>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th class="text-nowrap">Tên</th>
                            <th class="text-nowrap">Hiển thị</th>
                            <th class="text-nowrap">Ngày tạo</th>
                            <th style="width: 5%" class="text-nowrap">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td class="text-nowrap">
                                        <span class="text-primary">{{$category->name}}</span>
                                    </td>
                                    <td class="text-nowrap">{!! $category->htmlStatus() !!}</td>
                                    <td class="text-nowrap">{{$category->created_at}}</td>
                                    <td class="d-flex">
                                        <a href="" class="btn btn-xs btn-primary">
                                            <i class="fa fa-pencil" ></i>
                                        </a>
                                        <form method="DELETE" action="{{route('admin.category.delete', ['id' => $category->id])}}">
                                            @csrf
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button type="submit" class="btn btn-xs btn-danger show_confirm">
                                                <i class="far fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                               @foreach($category->children as $val)
                                   <tr>
                                       <td class="text-nowrap">
                                           <span class="text-primary">=={{$val->name}}</span>
                                       </td>
                                       <td class="text-nowrap">{!! $val->htmlStatus() !!}</td>
                                       <td class="text-nowrap">{{$val->created_at}}</td>
                                       <td class="d-flex">
                                           <a href="" class="btn btn-xs btn-primary">
                                               <i class="fa fa-pencil" ></i>
                                           </a>
                                           <form method="DELETE" action="{{route('admin.category.delete', ['id' => $val->id])}}">
                                               @csrf
                                               <input name="_method" type="hidden" value="DELETE">
                                               <button type="submit" class="btn btn-xs btn-danger show_confirm">
                                                   <i class="far fa-trash-alt"></i>
                                               </button>
                                           </form>
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
@endsection
@section('script')
    {!! Html::script(mix('assets/admin/js/confirm.js')) !!}
    <script type="text/javascript">

        $('.show_confirm').click(function(event) {
            var form =  $(this).closest("form");
            event.preventDefault();
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success mr-2',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })
            swalWithBootstrapButtons.fire({
                title: `Xóa danh mục`,
                text: "Bạn có chắc chắn muốn xóa danh mục.",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: 'Xác nhận',
                cancelButtonText: 'Hủy',
            })
                .then((willDelete) => {
                    if (willDelete.value) {
                        form.submit();
                    }
                });
        });

    </script>
@endsection
