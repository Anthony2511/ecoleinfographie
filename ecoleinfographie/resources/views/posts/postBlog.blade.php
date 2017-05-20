@extends('layout')

@section('header')
	@include('partials.header-min')
@endsection

@section('class', 'postBlog')
@section('styles')
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
@endsection

@section('highlightJS')
	<script type="text/javascript" src="{{ asset('syntaxhighlighter/syntaxhighlighter.js') }}"></script>
	<link rel="stylesheet" href="{{ asset('syntaxhighlighter/theme.css') }}">
@endsection

@section('content')

	<!-- Breadcrumb -->
	<div class="breadcrumb">
		<ol class="breadcrumb__list" itemscope itemtype="http://schema.org/BreadcrumbList">
			<li class="breadcrumb__item" itemprop="itemListElement" itemscope
					itemtype="http://schema.org/ListItem">
				<a href="#" class="breadcrumb__link breadcrumb__link--home" itemscope itemtype="http://schema.org/Thing"
					 itemprop="item">
					<span itemprop="name">Page d’accueil</span>
				</a>
				<meta itemprop="position" content="1" />
			</li>
			<li class="breadcrumb__item" itemprop="itemListElement" itemscope
					itemtype="http://schema.org/ListItem">
				<a href="{{ Route('blog') }}" class="breadcrumb__link breadcrumb__link--active" itemscope itemtype="http://schema.org/Thing"
					 itemprop="item">
					<span itemprop="name">Le blog de l’infographie</span>
				</a>
				<meta itemprop="position" content="2" />
			</li>
			<li class="breadcrumb__item" itemprop="itemListElement" itemscope
					itemtype="http://schema.org/ListItem">
				<a href="{{ url()->current() }}" class="breadcrumb__link breadcrumb__link--active" itemscope itemtype="http://schema.org/Thing"
					 itemprop="item">
					<span itemprop="name">{{ $article->title }}</span>
				</a>
				<meta itemprop="position" content="3" />
			</li>
		</ol>
	</div>
	<!-- End Breadcrumb -->



	<div class="blogArticle__container">
		<article class="blogArticle" itemscope itemtype="http://schema.org/BlogPosting">
			<meta itemscope itemprop="mainEntityOfPage"  itemType="https://schema.org/WebPage">


			<header class="blogArticle__header">
				<h2 role="heading" aria-level="2" class="blogArticle__title" itemprop="headline">{{ $article->title }}</h2>

				<div class="blogArticle__informations">

					@if($article->teacher)
					<a href="{{ Url('/professeurs') . '/' . $article->teacher->slug }}"
						 class="blogArticle__author"
						 itemprop="author" itemscope itemtype="https://schema.org/Person">

						<img src="{{ $article->teacher->getImageProfile('_30x30.jpg') }}"
								 width="30" height="30"
								 alt="Photo de {{ $article->teacher->fullname }}"
								 class="blogArticle__author__img"
								 srcset="{{ $article->teacher->getImageProfile('_60x60.jpg') }} 2x">
						<span class="preposition">Par</span>
						<span  class="blogArticle__author__name" itemprop="name url">{{ $article->teacher->fullname }}</span>
					</a>
					@endif
					@if($article->author)
						<span
							 class="blogArticle__author"
							 itemprop="author" itemscope itemtype="https://schema.org/Person">

							<img src="{{ $article->author->picture }}"
									 width="30" height="30"
									 alt="Photo de {{ $article->author->fullname }}"
									 class="blogArticle__author__img">
							<span class="preposition">Par</span>
							<span  class="blogArticle__author__name blogArticle__author__name--noprofil" itemprop="name url">{{ $article->author->fullname }}</span>
						</span>
					@endif

					<span class="blogArticle__pubdate">
						<span class="preposition"> le</span>
						<time class="time"
									datetime="{{ $article->date }}">
									{{ $article->getDateForHuman() }}
						</time>
					</span>

					<span class="blogArticle__category">
						<span class="preposition"> dans </span>
						<a href="{{ Route('blog') }}{{ $article->categoryUrl($article) . $article->category->slug . '#anchor' }}" class="blogArticle__category-link" itemprop="articleSection">{{ $article->category->name }} ({{ $orientation[$article->orientation] }})</a>
					</span>
				</div>

				<p class="blogArticle__description" itemprop="description">
					{{ $article->introduction }}
				</p>
			</header>

			<div class="blogArticle__body" itemprop="articleBody">

				{!! $article->content  !!}

			</div>

			<footer class="footerArticle">
				<div class="footerArticle__author">
					<div class="footerArticle__author__wrapper">
						<a href="{{ Url('/professeurs') . '/' . $article->teacher->slug }}" class="footerArticle__author__link">
							<img src="{{ $article->teacher->getImageProfile('_60x60.jpg') }}"
									 width="60"
									 height="60"
									 alt="Photo de {{ $article->teacher->fullname }}"
									 class="footerArticle__author__img"
									 srcset="{{ $article->teacher->getImageProfile('_120x120.jpg') }} 2x"
							>
							<span class="footerArticle__author__name"><span class="hidden">Écrit par&nbsp;:</span>{{ $article->teacher->fullname }}</span>
						</a>
						<div class="footerArticle__follow">
							<ul class="footerArticle__follow__list">
								@if(!empty($article->teacher->social))
									@foreach($article->teacher->social as $social)
										<li class="footerArticle__follow__item"><a href="{{ $social['url'] }}" target="_blank&" class="footerArticle__follow__link footerArticle__follow__link--{{ $social['type'] }}"><span>Vers le {{ strtoupper($social['type']) }} de {{ $article->teacher->fullname }}</span></a></li>
									@endforeach
								@endif
							</ul>
						</div>
					</div>
				</div>

				<div class="footerArticle__sharer">
					<div class="footerArticle__sharer__wrapper">
						<span class="footerArticle__sharer__label-top">Cet article t’as plût&nbsp;?</span>
						<strong class="footerArticle__sharer__label-bottom">Partages-le&nbsp;!</strong>
						<ul class="social-list-circle">
							<li class="social-list-circle__item">
								<a href="" class="social-list-circle__link facebook" rel="me"><span>Vers le Facebook de Kévin Dessouroux</span></a>
							</li><!--
                    --><li class="social-list-circle__item">
								<a href="" class="social-list-circle__link twitter" rel="me"><span>Vers le Facebook de Kévin Dessouroux</span></a>
							</li><!--
                    --><li class="social-list-circle__item">
								<a href="" class="social-list-circle__link pinterest" rel="me"><span>Vers le Facebook de Kévin Dessouroux</span></a>
							</li><!--
                    --><li class="social-list-circle__item">
								<a href="" class="social-list-circle__link behance" rel="me"><span>Vers le Facebook de Kévin Dessouroux</span></a>
							</li><!--
                    --><li class="social-list-circle__item">
								<a href="" class="social-list-circle__link dribble" rel="me"><span>Vers le Facebook de Kévin Dessouroux</span></a>
							</li>
						</ul>
					</div>
				</div>

				<div class="footerArticle__like">
					{{--<form action="">--}}
					<div class="footerArticle__like-wrapper">
						<button type="submit" class="fav" id="fav">
							<svg class="stableHeart" viewBox="-1 0 18 15">
								<defs>
									<path d="M16 4.872c0-4.9-6.894-5.8-8 .695C6.81-.928 0-.027 0 5.25c0 5.274 8 9.697 8 9.697s8-5.177 8-10.075z" id="heartPath"></path>
								</defs>
								<use xlink:href="#heartPath" />
							</svg>
							<svg class="floatHeart" viewBox="-1 0 18 15">
								<use xlink:href="#heartPath" />
							</svg>
						</button>
						{{--</form>--}}
						<span class="footerArticle__like__counter">14 j’aime</span>
					</div>
				</div>

			</footer>

			<meta itemprop="datePublished" content="2015-02-05T08:00:00+08:00"/>
			<meta itemprop="dateModified" content="2015-02-05T09:20:00+08:00"/>
		</article>

		@include('partials.blog.aside');
	</div>

	<section class="comments" id="anchor">
		<div class="comments__wrapper">
			<div class="comments__header">
				<div class="comments__count">
					<h2 role="heading" aria-level="2" class="comments__count__title">Commentaires</h2>
					<strong class="comments__count__number"><span>{{ $article->comments->count() }}</span></strong>
				</div>

				<div class="comments__share">
					<span class="comments__share__title">Partager&nbsp;:</span>
					<ul class="social-list-circle">
						<li class="social-list-circle__item">
							<a href="" class="social-list-circle__link facebook" rel="me"><span>Vers le Facebook de Kévin Dessouroux</span></a>
						</li><!--
                    --><li class="social-list-circle__item">
							<a href="" class="social-list-circle__link twitter" rel="me"><span>Vers le Facebook de Kévin Dessouroux</span></a>
						</li><!--
                    --><li class="social-list-circle__item">
							<a href="" class="social-list-circle__link pinterest" rel="me"><span>Vers le Facebook de Kévin Dessouroux</span></a>
						</li><!--
                    --><li class="social-list-circle__item">
							<a href="" class="social-list-circle__link behance" rel="me"><span>Vers le Facebook de Kévin Dessouroux</span></a>
						</li><!--
                    --><li class="social-list-circle__item">
							<a href="" class="social-list-circle__link dribble" rel="me"><span>Vers le Facebook de Kévin Dessouroux</span></a>
						</li>
					</ul>
				</div>
			</div>



			<div class="comments__container">
				@foreach($comments as $key => $comment)
				<div class="comment comment--1">
					<div class="comment__header">
						<img src="https://api.adorable.io/avatars/65/{{ md5($comment->email) }}.png" width="65" height="65" alt="Avatar généré automatiquement pour l’utilisateur {{ $comment->user_name }}" class="comment__img">
						<strong class="comment__name">{{ $comment->user_name }}</strong>
						<time datetime="#" class="comment__date">{{ $comment->getDate() }}</time>
					</div>
					<p class="comment__text">
						{{ $comment->content }}
					</p>
					{{--<footer class="comment__footer">
						<a href="#rep" class="comment__footer__respond">Répondre</a>
					</footer>--}}
				</div>
				@endforeach

				@if($numberOfComments > 12)
					{!! $comments->fragment('anchor')->links('partials.pagination-comments') !!}
				@endif

				<section class="postComment__section">

				<h3 role="heading" aria-level="3" class="postComment__title">Écrire un commentaire&nbsp;:</h3>

				{{ Form::open(['route' => ['comment.store', $article->id], 'method' => 'POST', 'class' => 'postComment', 'id' => 'comment']) }}

					<fieldset class="postComment__fieldset">
						<div class="postComment__wrapper postComment__wrapper--1">
							<label for="user_name" class="postComment__label {{ old('user_name') ? ' active' : '' }}">Nom ou pseudo</label>
							<input type="text"
										 name="user_name"
										 id="user_name" class="postComment__input floatLabel" required
										 value="{{ $comment->setValueCommentFormUsername() }}">
                <span class="form-error">{{ $errors->first('user_name') }}</span>
						</div>
						<div class="postComment__wrapper postComment__wrapper--2">
							<label
											for="email"
											class="postComment__label {{ (old('email')) ? ' active' : '' }}">
											Adresse email (ne sera pas publiée)
							</label>

							<input
											type="email"
											name="email"
											id="email"
											class="postComment__input floatLabel"
											required
											value="{{ $comment->setValueCommentFormEmail() }}"
							>

							<span class="form-error">
								{{ $errors->first('email') }}
							</span>
						</div>
					</fieldset>
					<div class="postComment__wrapperTextarea">
						<label for="content" class="postComment__label postComment__label--textarea">Commentaire&nbsp;:</label>
						<textarea name="content" id="content" class="postComment__textarea" cols="30" rows="10" required >{{ old('content') }}</textarea>
						<span class="form-error">{{ $errors->first('content') }}</span>
					</div>
					<button class="postComment__submit">Poster le message</button>
				{{ Form::close() }}
					<p class="form-success">{!! session('success') !!}</p>
				</section>



			</div>
		</div>

	</section>





@endsection

