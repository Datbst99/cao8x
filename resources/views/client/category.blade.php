@extends('layouts.client')

@section('content')
    <div id="category-detail">
        @if($category->page)
            {!! $category->page->content !!}
        @else
            <p style="text-align: center; font-size: 18px; margin-top: 20px">
                Chưa có bài viết
            </p>
        @endif
    </div>
@endsection
