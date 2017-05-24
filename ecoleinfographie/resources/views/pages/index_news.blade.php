@extends('layout')
@section('header')
	@include('partials.header-news')
@endsection

@section('class', 'news')

@section('content')

<div class="news-container">

	@extends('partials.news.cards')

</div>

@endsection
