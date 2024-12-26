@extends('layouts.main')

@section('head')
    <title>{{ $post->title }}</title>
@endsection

@section('content')
   @component('components.post',['post' => $post])

   @endcomponent
@endsection
