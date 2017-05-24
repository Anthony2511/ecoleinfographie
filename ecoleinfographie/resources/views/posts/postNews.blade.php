@extends('layout')

@section('header')
	@include('partials.header-min')
@endsection

@section('class', 'postNews')

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
				<a href="{{ Route('news') }}" class="breadcrumb__link breadcrumb__link--active" itemscope itemtype="http://schema.org/Thing"
					 itemprop="item">
					<span itemprop="name">Actualités</span>
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


		<article class="news">
			<div class="news__top-wrapper">
				<figure class="news__figure">
					<img src="{{ asset('img/news-post.jpg') }}" width="715" height="447" alt="#" class="news__img">
				</figure>
				<div class="news__title-wrapper">
					<h2 role="heading" aria-level="2" class="news__title">Inscrivez-vous à la journée d’immersion</h2>
					<time class="news__date" datetime="" pubdate>Publié le 12 janvier 2017</time>
				</div>
			</div>
			<div class="news__content">

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A blanditiis consequuntur, cum eius est eum ex expedita itaque, molestiae nesciunt nobis quam quia soluta suscipit velit? Assumenda itaque quos similique.lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci eius expedita, fuga impedit incidunt inventore ipsum laborum maxime modi nobis officia, quae quia quisquam ratione repudiandae rerum, sit voluptates. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquam animi aspernatur assumenda consequatur esse est iste iusto laboriosam laudantium, maiores natus nesciunt quae quisquam saepe sapiente soluta tenetur voluptates! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit harum ipsum magni nesciunt sint. Adipisci amet blanditiis cumque delectus ducimus eos illum ipsa natus quaerat. Alias consequuntur deleniti perferendis unde. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aperiam beatae distinctio dolor dolore eveniet fuga id, impedit in ipsa iure maiores mollitia obcaecati perferendis, perspiciatis placeat, similique temporibus totam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci dolores doloribus excepturi harum ipsum pariatur quia reiciendis sed voluptas? Alias illum minus repellat soluta vero voluptatem! Placeat, reiciendis unde? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, alias amet consectetur delectus dolore dolorum eligendi facere harum id omnis perspiciatis possimus quis rerum suscipit vero. Consequatur numquam tempora voluptatibus.</p>

			</div>
		</article>



	{{--<section class="comments" id="anchor">
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
						--}}{{--<footer class="comment__footer">
							<a href="#rep" class="comment__footer__respond">Répondre</a>
						</footer>--}}{{--
					</div>
				@endforeach


				@if($numberOfComments > 12)
					{!! $comments->fragment('anchor')->links('partials.pagination-comments') !!}
				@elseif($numberOfComments == 0)
					<p>Il n’y a pas encore de commentaires sur cet article. Écris le premier !</p>
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
										 value="{{ $article->setValueCommentForm('user_name') }}">
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
											value="{{ $article->setValueCommentForm('email') }}"
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

	</section>--}}





@endsection

