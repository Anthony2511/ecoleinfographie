@extends('layout')

@section('header')
	@include('partials.header-min')
@endsection

@section('class', 'parcours')

@section('content')
	@include('partials.breadcrumb')
	@include('partials.web.former-students')
@endsection

