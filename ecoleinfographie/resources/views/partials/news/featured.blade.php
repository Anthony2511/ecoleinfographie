<article class="featured">
	<figure class="featured__figure">
		<img class="featured__img" src="{{ $articleFeatured->getImageNews('_featured.jpg') }}" width="378" height="447" alt="">
	</figure>
	<div class="featured__content">
		<span class="featured__date">Le
			<time datetime="{{ $articleFeatured->date }}">{{ $articleFeatured->getDateForHuman() }}</time>
		</span>
		<h2 role="heading" aria-level="2" class="featured__title">{{ $articleFeatured->title }}</h2>
		<p class="featured__excerpt">{{ strip_tags(str_limit($articleFeatured->content, 270, '...')) }}</p>
		<span class="featured__fakelink">Lire l’article</span>
	</div>
	<a href="{{ Route('news') . '/' . $articleFeatured->slug }}" class="featured__link"><span>Lire l’article {{ $articleFeatured->title }}</span></a>
</article>
