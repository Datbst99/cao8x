@extends('layouts.admin')

@section('title', 'Danh sách đặt lịch')

@section('breadcrumbs')
    {{ Breadcrumbs::render('admin.book') }}
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead >
                    <tr class="table-light">
                        <th class="text-nowrap">Tên khách hàng</th>
                        <th class="text-nowrap">Số điện thoại</th>
                        <th class="text-nowrap">Thời gian đặt lịch</th>
                        <th class="text-nowrap">Số người</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($books as $book)
                        <tr>
                            <td class="text-nowrap">{{$book->name}}</td>
                            <td class="text-nowrap">{{$book->phone}}</td>
                            <td class="text-nowrap">{{\Carbon\Carbon::create($book->time)->format('d/m/Y H:i:s')}}</td>
                            <td class="text-nowrap">{{$book->num_of_user}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div >
        {{$books->links()}}
    </div>
@stop
