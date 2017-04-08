@extends('layout')

@section('header')
    @include('partials.realisations.header-realisations')
@endsection

@section('content')
    @include('partials.breadcrumb')
    @include('partials.realisations.index-realisations')
@endsection
