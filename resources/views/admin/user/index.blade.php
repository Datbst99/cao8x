@extends('layouts.admin')
@section('title', 'Danh sách user')
@section('content')
    <div class="">
        @include('includes.admin.breadcrumbs', ['title' => 'Danh sách user', 'name' => 'user'])

        <div class="">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Danh sách người dùng
                    </div>

                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="text-nowrap" >#</th>
                                <th class="text-nowrap">Name</th>
                                <th class="text-nowrap" >Email</th>
                                <th class="text-nowrap" >Role</th>
                                <th class="text-nowrap" >Trạng thái</th>
                                <th class="text-nowrap" style="width: 5%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td class="text-nowrap">{{$user->id}}</td>
                                    <td class="text-nowrap">{{$user->name}}</td>
                                    <td class="text-nowrap">{{$user->email}}</td>
                                    <td class="text-nowrap ">
                                        <ul class="m-0 pl-3">
                                            @foreach($user->roles as $role)
                                                <li>{{$role->name}}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td class="text-nowrap">{!! $user->statusHtml() !!}</td>
                                    <td class="text-nowrap">
                                        <div class="d-flex">
                                            <a href="{{$user->linkEdit()}}" class="btn btn-xs btn-primary">
                                                <i class="fa fa-pencil" ></i>
                                            </a>
{{--                                            <form method="POST" action="{{ $user->linkDelete() }}">--}}
{{--                                                @csrf--}}
{{--                                                <input name="_method" type="hidden" value="DELETE">--}}
{{--                                                <button type="submit" class="btn btn-xs btn-danger show_confirm">--}}
{{--                                                    <i class="far fa-trash-alt"></i>--}}
{{--                                                </button>--}}
{{--                                            </form>--}}
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
                {{$users->links()}}
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

            Swal.fire({
                title: `Are you sure you want to delete this record?`,
                text: "If you delete this, it will be gone forever.",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });

    </script>
@endsection
