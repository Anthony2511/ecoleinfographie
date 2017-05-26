@extends('layout')

@section('header')
    @include('partials.header-min')
@endsection

@section('content')
    @include('partials.breadcrumb')
    @include('partials.web.intro-formation')
    @include('partials.web.blocs-formation')
@endsection

