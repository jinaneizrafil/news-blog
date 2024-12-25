@extends('layouts.main')

@section('head')
    <title>home</title>
@endsection

@section('content')
    <h1 class="text-3xl font-bold underline">
        Hello world!
    </h1>
@component('components.home-categories.sport')

@endcomponent
    {{-- @component('components.home-sport', ['category' => $category, 'posts' => $categoryPosts])
    @endcomponent --}}
@endsection
