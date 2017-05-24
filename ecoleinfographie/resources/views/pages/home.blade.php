@extends('layout')

@section('header')
    @include('partials.header-home')
@endsection

@section('class', 'home')

@section('content')
    @include('partials.home.intro')
    @include('partials.home.location')
    @include('partials.home.news-home')
    @include('partials.home.sliderBlog')
    @include('partials.home.portfolio-home')
    @include('partials.home.pros-home')
@endsection
