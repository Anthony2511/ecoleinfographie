<section class="blog-home">
	<h2 role="heading" aria-level="2" class="blog-home__title">Nos derniers articles de blog</h2>
	<div class="blog-home__container" id="blog-home">

		<article class="blog-card">
			<a href="{{ Route('blog').'/'.$aWeb->slug }}" class="blog-card__go-article"><span>Lire l’article {{ $aWeb->title }}</span></a>
			<header class="blog-card__header">
				<a href="{{ Route('blog'). '?category=' . $aWeb->orientation }}#anchor" class="blog-card__category blog-card__category--{{ $aWeb->orientation }}">{{ $orientation[$aWeb->orientation] }}</a>
				<img src="{{ $aWeb->getImageArticle('_cards.jpg') }}" width="358" height="264" alt="Image illustrant l’article « {{ $aWeb->title }} »" class="blog-card__img">
			</header>
			<h3 role="heading" aria-level="3" class="blog-card__title">{{ str_limit($aWeb->title, 50, '…') }}</h3>


			<footer class="blog-card__footer">


				@if($aWeb->teacher)
					<a href="{{ Url('/').'/'.trans('url.teachers').'/'.$aWeb->teacher->slug }}" class="blog-card__author" rel=author>
						<img src="{{ $aWeb->teacher->getImageProfile('_30x30.jpg') }}"
								 srcset="{{ $aWeb->teacher->getImageProfile('_60x60.jpg') }} 2x"
								 width="30"
								 height="30"
								 alt="Photo de {{ $aWeb->teacher->fullname }}, {{ strtolower($aWeb->teacher->role) }} à la Haute École de la Province de Liège" class="blog-card__author__img">
						<span class="blog-card__author__name">
							Par
							<span class="blog-card__author__name--hidden">Voir le profile de </span>
							<span class="blog-card__author__name--container">
								<span class="blog-card__author__name--name">
									{{ $aWeb->teacher->fullname  }}
								</span>
							</span>
						</span>
					</a>
				@endif

				@if($aWeb->author)
					<span class="blog-card__author blog-card__author--noprofil" rel=author>
						<img src="{{ $aWeb->author->getImageAuthor('_30x30.jpg') }}"
								 srcset="{{ $aWeb->author->getImageAuthor('_60x60.jpg') }} 2x"
								 width="30"
								 height="30"
								 alt="Photo de {{ $aWeb->author->fullname }}, un auteur sur ce blog" class="blog-card__author__img">
						<span class="blog-card__author__name blog-card__author__name--noprofile">
							Par
							<span class="blog-card__author__name--hidden">Voir le profile de </span>
							<span class="blog-card__author__name--container">
								<span class="blog-card__author__name--name">
									{{ $aWeb->author->fullname }}
								</span>
							</span>
						</span>
					</span>
				@endif

				<a href="{{ Route('blog') . '/' . $aWeb->slug . '#anchor' }}" class="blog-card__comments">
					<span class="blog-card__comments__number">{{ $aWeb->comments->count() }}</span>
					<span class="blog-card__comments__hidden"> commentaires à voir sur l’article {{ $aWeb->title }}</span>
				</a>
			</footer>
		</article>
		<article class="blog-card">
			<a href="{{ Route('blog').'/'.$a2d->slug }}" class="blog-card__go-article"><span>Lire l’article {{ $a2d->title }}</span></a>
			<header class="blog-card__header">
				<a href="{{ Route('blog'). '?category=' . $a2d->orientation }}#anchor" class="blog-card__category blog-card__category--{{ $a2d->orientation }}">{{ $orientation[$a2d->orientation] }}</a>
				<img src="{{ $a2d->getImageArticle('_cards.jpg') }}" width="358" height="264" alt="Image illustrant l’article « {{ $a2d->title }} »" class="blog-card__img">
			</header>
			<h3 role="heading" aria-level="3" class="blog-card__title">{{ str_limit($a2d->title, 50, '…') }}</h3>
			
			
			<footer class="blog-card__footer">
				
				
				@if($a2d->teacher)
				<a href="{{ Url('/').'/'.trans('url.teachers').'/'.$a2d->teacher->slug }}" class="blog-card__author" rel=author>
					<img src="{{ $a2d->teacher->getImageProfile('_30x30.jpg') }}"
							 srcset="{{ $a2d->teacher->getImageProfile('_60x60.jpg') }} 2x"
							 width="30"
							 height="30"
							 alt="Photo de {{ $a2d->teacher->fullname }}, {{ strtolower($a2d->teacher->role) }} à la Haute École de la Province de Liège" class="blog-card__author__img">
					<span class="blog-card__author__name">
						Par
						<span class="blog-card__author__name--hidden">Voir le profile de </span>
						<span class="blog-card__author__name--container">
							<span class="blog-card__author__name--name">
								{{ $a2d->teacher->fullname  }}
							</span>
						</span>
					</span>
				</a>
				@endif
				
				@if($a2d->author)
				<span class="blog-card__author blog-card__author--noprofil" rel=author>
					<img src="{{ $a2d->author->getImageAuthor('_30x30.jpg') }}"
							 srcset="{{ $a2d->author->getImageAuthor('_60x60.jpg') }} 2x"
							 width="30"
							 height="30"
							 alt="Photo de {{ $a2d->author->fullname }}, un auteur sur ce blog" class="blog-card__author__img">
					<span class="blog-card__author__name blog-card__author__name--noprofile">
						Par
						<span class="blog-card__author__name--hidden">Voir le profile de </span>
						<span class="blog-card__author__name--container">
							<span class="blog-card__author__name--name">
								{{ $a2d->author->fullname }}
							</span>
						</span>
					</span>
				</span>
				@endif
				
				<a href="{{ Route('blog') . '/' . $a2d->slug . '#anchor' }}" class="blog-card__comments">
					<span class="blog-card__comments__number">{{ $a2d->comments->count() }}</span>
					<span class="blog-card__comments__hidden"> commentaires à voir sur l’article {{ $a2d->title }}</span>
				</a>
			</footer>
		</article>
		<article class="blog-card">
			<a href="{{ Route('blog').'/'.$a3d->slug }}" class="blog-card__go-article"><span>Lire l’article {{ $a3d->title }}</span></a>
			<header class="blog-card__header">
				<a href="{{ Route('blog'). '?category=' . $a3d->orientation }}#anchor" class="blog-card__category blog-card__category--{{ $a3d->orientation }}">{{ $orientation[$a3d->orientation] }}</a>
				<img src="{{ $a3d->getImageArticle('_cards.jpg') }}" width="358" height="264" alt="Image illustrant l’article « {{ $a3d->title }} »" class="blog-card__img">
			</header>
			<h3 role="heading" aria-level="3" class="blog-card__title">{{ str_limit($a3d->title, 50, '…') }}</h3>


			<footer class="blog-card__footer">


				@if($a3d->teacher)
					<a href="{{ Url('/').'/'.trans('url.teachers').'/'.$a3d->teacher->slug }}" class="blog-card__author" rel=author>
						<img src="{{ $a3d->teacher->getImageProfile('_30x30.jpg') }}"
								 srcset="{{ $a3d->teacher->getImageProfile('_60x60.jpg') }} 2x"
								 width="30"
								 height="30"
								 alt="Photo de {{ $a3d->teacher->fullname }}, {{ strtolower($a3d->teacher->role) }} à la Haute École de la Province de Liège" class="blog-card__author__img">
						<span class="blog-card__author__name">
							Par
							<span class="blog-card__author__name--hidden">Voir le profile de </span>
							<span class="blog-card__author__name--container">
								<span class="blog-card__author__name--name">
									{{ $a3d->teacher->fullname  }}
								</span>
							</span>
						</span>
					</a>
				@endif

				@if($a3d->author)
					<span class="blog-card__author blog-card__author--noprofil" rel=author>
						<img src="{{ $a3d->author->getImageAuthor('_30x30.jpg') }}"
								 srcset="{{ $a3d->author->getImageAuthor('_60x60.jpg') }} 2x"
								 width="30"
								 height="30"
								 alt="Photo de {{ $a3d->author->fullname }}, un auteur sur ce blog" class="blog-card__author__img">
						<span class="blog-card__author__name blog-card__author__name--noprofile">
							Par
							<span class="blog-card__author__name--hidden">Voir le profile de </span>
							<span class="blog-card__author__name--container">
								<span class="blog-card__author__name--name">
									{{ $a3d->author->fullname }}
								</span>
							</span>
						</span>
					</span>
				@endif

				<a href="{{ Route('blog') . '/' . $a3d->slug . '#anchor' }}" class="blog-card__comments">
					<span class="blog-card__comments__number">{{ $a3d->comments->count() }}</span>
					<span class="blog-card__comments__hidden"> commentaires à voir sur l’article {{ $a3d->title }}</span>
				</a>
			</footer>
		</article>

	</div>

	<div class="blog-home__cta-container">
		<a href="{{ Route('blog') }}" class="blog-home__cta">Aller sur le blog</a>
	</div>

</section>
