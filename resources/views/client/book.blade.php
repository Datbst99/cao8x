@extends('layouts.client')
@section('after-style')
    <style>
        .form-control {
            background-color: rgba(0,0,0,0.03)!important;
            box-shadow: none !important;
            border-color: rgba(0,0,0,0.09)!important;
            color: currentColor !important;
            border-radius: 99px!important;

            box-sizing: border-box;
            border: 1px solid;
            padding: 0 0.75em;
            height: 2.507em;
            font-size: .97em;
            max-width: 100%;
            width: 100%;
        }
        .form-book {
            width: 50%;
            margin: 40px auto;
        }
        .btn-book {
            text-decoration: none !important;
            border: none;
            color: #fff;
            font-size: 13px;
            padding: 5px 30px;
            font-weight: 900;
            display: inline-block;
            box-shadow: none !important;
            outline: none !important;
            text-transform: uppercase;
            background-color: #f68921;
            border-radius: 25px;
            margin: 20px 0 0 0;
        }
        @media (max-width: 992px) {
            .form-book {
                width: 100%;
            }
        }
    </style>

@endsection
@section('content')
    <div id="category-detail">
        <h4 class="text-center" style="margin-top: 30px">Đặt lịch</h4>

        <div class="form-book">
            @if ($errors->any())
                <ul class="">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            @if ($message = Session::get('success'))
               <p style="font-size: 20px; font-style: italic; font-weight: 700; color: #f68921">{{ $message }}</p>
            @endif
            {!! Form::open() !!}
            {!! Form::text('name', auth()->user() ? auth()->user()->name : old('name'), ['class' => 'form-control', 'placeholder' => 'Họ tên']) !!}
            {!! Form::text('phone', auth()->user() ? auth()->user()->phone : old('phone'), ['class' => 'form-control', 'placeholder' => 'Số điện thoại']) !!}

            <input
                class="form-control"
                type="datetime-local"
                name="time"
                value="" />
            {!! Form::number('numberUser', old('number'), ['class' => 'form-control', 'placeholder' => 'Số người']) !!}

           <div class="text-center">
               <button class="btn-book">Đặt lịch</button>
           </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
