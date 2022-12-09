@extends('layouts.client')

@section('content')
    <div id="category-detail" @if($category->page && $category->page->path_background)  style="background-image: url('{{$category->page->path_background}}'); margin-top: 30px" @endif>
        @if($category->page && $category->page->content)
            {!! $category->page->content !!}
        @endif
    </div>
@endsection
