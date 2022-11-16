@extends('layouts.admin')
@section('title', 'Danh sách đặt hàng')
@section('content')
    <div class="">
        @include('includes.admin.breadcrumbs', ['name' => 'order'])

        <div class="card">
            <div class="card-header ">
                <h5 class="card-title">Danh sách đặt hàng</h5>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th class="text-nowrap">Tên</th>
                            <th class="text-nowrap">Số điện thoại</th>
                            <th class="">Vấn đề</th>
                            <th class="">Yêu cầu khách hàng</th>
                            <th class="">Ngày đặt</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td class="text-nowrap">{{$order->user}}</td>
                                <td class="text-nowrap">{{$order->phone}}</td>
                                <td class="">{{$order->note}}</td>
                                <td class="">
                                    {{$order->data}}
                                </td>
                                 <td class="">{{$order->created_at}}</td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="custom-paginate">
            {{$orders->links()}}
        </div>
    </div>
@endsection
