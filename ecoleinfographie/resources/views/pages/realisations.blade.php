@extends('layout')

@section('header')
    @include('partials.realisations.header-realisations')
@endsection

@section('class', 'realisations')

@section('content')
    @include('partials.realisations.index-realisations')
@endsection

