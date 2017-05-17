<article class="blog-card">
	<a href="{{ Route('blog').'/'.$article->slug }}" class="blog-card__go-article"><span>Lire l’article {{ $article->title }}</span></a>
	<header class="blog-card__header">
		<a href="{{ Route('blog'). '?category=' . $article->orientation }}#anchor" class="blog-card__category blog-card__category--{{ $article->orientation }}">{{ $orientation[$article->orientation] }}</a>
		<img src="{{ $article->getImageArticle('_cards.jpg') }}" width="358" height="264" alt="Image illustrant l’article « {{ $article->title }} »" class="blog-card__img">
	</header>
	<h3 role="heading" aria-level="3" class="blog-card__title">{{ str_limit($article->title, 50, '…') }}</h3>
	<footer class="blog-card__footer">
		<a href="{{ Url('/').'/'.trans('url.teachers').'/'.$article->teacher->slug }}" class="blog-card__author" rel=author>
			<img src="{{ $article->teacher->getImageProfile('_30x30.jpg') }}" srcset="{{ $article->teacher->getImageProfile('_60x60.jpg') }} 2x" width="30" height="30" alt="Photo de {{ $article->teacher->fullname }}, {{ strtolower($article->teacher->role) }} à la Haute École de la Province de Liège" class="blog-card__author__img">
			<span class="blog-card__author__name">
				Par
				<span class="blog-card__author__name--hidden">Voir le profile de </span>
				<span class="blog-card__author__name--container">
					<span class="blog-card__author__name--name">
              {{ $article->teacher->fullname  }}
					</span>
				</span>
			</span>
		</a>
		<a href="#comments" class="blog-card__comments">
			<span class="blog-card__comments__number">5</span>
			<span class="blog-card__comments__hidden"> commentaires à voir sur l’article {{ $article->title }}</span>
		</a>
	</footer>
</article>
