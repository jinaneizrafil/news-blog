@extends('layouts.main')

@section('head')
    <title>home</title>
@endsection

@section('content')
    <div class="categories">
        @foreach ($categories as $category)
            @include('components.home.category-box', ['category' => $category])
        @endforeach
    </div>
@endsection
