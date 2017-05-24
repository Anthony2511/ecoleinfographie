<div class="news-home">
	<div class="news-home__container">
		<article class="news-card">
			<div class="news-card__content">
				<h2 role="heading" aria-level="2" class="news-card__title">{{ $news->title }}</h2>
				<p class="news-card__excerpt">
					{{ strip_tags(str_limit($news->content, 200, '...')) }}
				</p>
				<span class="news-card__fakelink">@lang('home.readArticle')</span>
			</div>
			<div class="news-card__image">
				<figure class="news-card__figure">
					<img src="{{ $news->getImageNews('_cards.jpg') }}" width="503" height="447" alt="" class="news-card__img">
				</figure>
				<time class="news-card__time" datetime="{{ $news->date }}" pubdate>{{ $news->getDateForHuman() }}</time>
			</div>
			<a href="{{ Route('news') . '/' . $news->slug }}" class="news-card__link"><span>@lang('home.readArticle') {{ $news->title }}</span></a>
			<a href="{{ Route('news') }}" class="news-home__allNews">@lang('home.readAll')</a>
		</article>
	</div>
</div>
