@extends('layouts.admin')
@section('title', 'Sản phẩm')

@section('content')
    @include('includes.admin.breadcrumbs', ['title' => 'Danh sách sản phẩm', 'name' => 'product'])
    <div class="card">
        {!! Form::open(['method' => 'get']) !!}
        <div class="row p-3">
            <div class="col-md-6">
                <div class="form-group m-md-0">
                    <input type="text" name="search" value="{{request()->get('search')}}" placeholder="Vui lòng nhập tên sản phẩm" class="form-control">
                </div>
            </div>

            <div class="col-md-2">
                <button class="btn btn-main"><i class="far fa-search"></i> Tìm kiếm</button>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Danh sách sản phẩm</h5>
            <div class="float-right">
                <a href="{{route('admin.product.add')}}" class="btn btn-sm btn-main"><i class="fas fa-plus"></i> Thêm sản phẩm</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th class="text-nowrap" >#</th>
                        <th class="text-nowrap">Tên sản phẩm</th>
                        <th class="text-nowrap" >Hình ảnh</th>
                        <th class="text-nowrap" >Giá bán</th>
                        <th class="text-nowrap" >Danh mục</th>
                        <th class="text-nowrap" >Trạng thái</th>
                        <th class="text-nowrap" style="width: 5%">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td class="text-nowrap">{{$product->id}}</td>
                            <td class="text-nowrap">{{$product->name}}</td>
                            <td class="text-nowrap">
                                <img src="{{$product->thumbnail}}" alt="{{$product->name}}" height="100">
                            </td>
                            <td class="text-nowrap ">
                                {{number_format($product->sale_price)}}đ
                            </td>
                            <td class="text-nowrap"> {{$product->category->name}}</td>
                            <td class="text-nowrap"> {!! $product->htmlStatus() !!}</td>
                            <td class="text-nowrap">
                                <div class="d-flex">
{{--                                    <a href="" class="btn btn-xs btn-primary" disabled>--}}
{{--                                        <i class="fa fa-pencil" ></i>--}}
{{--                                    </a>--}}
                                    <form method="DELETE" action="{{route('admin.product.delete', ['id' => $product->id])}}">
                                        @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button type="submit" class="btn btn-xs btn-danger show_confirm">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="custom-paginate">
        {{$products->links()}}
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
                title: `Xóa sản phẩm?`,
                text: "Bạn có chắc muốn xóa sản phẩm không.",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: 'Xác nhận',
                cancelButtonText: 'Hủy',
            })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });

    </script>
@endsection
