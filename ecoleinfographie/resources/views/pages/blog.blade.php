@extends('layout')

@section('header')
    @include('partials.blog.header-blog')
@endsection

@section('class', 'blog-home blog')

@section('content')
    @include('partials.blog.blog-index')
@endsection

