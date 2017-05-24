@extends('layout')
@section('header')
	@include('partials.header-news')
@endsection

@section('class', 'news')

@section('content')

<div class="news-container">


	<article class="news-card">
		<div class="news-card__content">
			<h2 role="heading" aria-level="2" class="news-card__title">Les élèves de 3D et audiovisuel au FMX</h2>
			<p class="news-card__excerpt">
				Aliquam ornare rutrum lacus, bibendum viverra leo. Nunc felis tortor, facilisis vitae ante at, blandit euismod risus. Nunc tempor tempus volutpat. Phasellus venenatis lorem...
			</p>
			<span class="news-card__fakelink">Lire l’article</span>
		</div>
		<div class="news-card__image">
			<figure class="news-card__figure">
				<img src="{{ asset('img/news1.jpg') }}" width="503" height="447" alt="" class="news-card__img">
			</figure>
			<time class="news-card__time" datetime="2017-01-17" pubdate>10 janvier 2017</time>
		</div>
		<a href="#monarticle" class="news-card__link"><span>Lire l’article NOM ARTICLE</span></a>
	</article>




</div>

@endsection
