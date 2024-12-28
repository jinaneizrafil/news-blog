@extends('layouts.main')

@section('head')
    <title>{{ $category->name }}</title>
@endsection

@section('content')
   @component('components.category',['category'=>$category , 'posts'=>$posts])

   @endcomponent
@endsection
