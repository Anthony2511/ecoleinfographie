@extends('layout')
@section('header')
    @include('partials.header-min')
@endsection

@section('content')
    @include('partials.breadcrumb')
    @include('partials.realisations.post-realisation')
@endsection
