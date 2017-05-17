@extends('layout')

@section('header')
    @include('partials.blog.header-blog')
@endsection

@section('class', 'blog-home blog')
@section('styles')
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
@endsection

@section('content')
    @include('partials.blog.blog-index')
@endsection

