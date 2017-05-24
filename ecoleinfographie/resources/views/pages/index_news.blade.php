@extends('layout')
@section('header')
	@include('partials.header-news')
@endsection

@section('class', 'news')

@section('content')

<div class="news-container" id="anchor">


	@foreach($articles as $key => $article)
	<article class="news-card">
		<div class="news-card__content">
			<h2 role="heading" aria-level="2" class="news-card__title">{{ $article->title }}</h2>
			<p class="news-card__excerpt">
				{{ strip_tags(str_limit($article->content, 200, '...')) }}
			</p>
			<span class="news-card__fakelink">Lire l’article</span>
		</div>
		<div class="news-card__image">
			<figure class="news-card__figure">
				<img src="{{ $article->getImageNews('_cards.jpg') }}" width="503" height="447" alt="" class="news-card__img">
			</figure>
			<time class="news-card__time" datetime="{{ $article->date }}" pubdate>{{ $article->getDateForHuman() }}</time>
		</div>
		<a href="{{ Route('news') . '/' . $article->slug }}" class="news-card__link"><span>Lire l’article {{ $article->title }}</span></a>
	</article>
	@endforeach


	{!! $articles->render() !!}




</div>

@endsection
