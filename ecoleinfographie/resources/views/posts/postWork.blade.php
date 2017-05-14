@extends('layout')

@section('class', 'work')

@section('header')
	@include('partials.header-min')
@endsection

@section('content')
	@include('partials.breadcrumb')

	<div class="rea__container">
		<article class="rea">
			<h2 role="heading" aria-level="2" class="rea__name">{{ $work->title }}</h2>

			<span class="rea__author">
				Par
				@foreach($work->students as $student)
					<a href="#jimmyletecheur" class="rea__link" rel="author" title="Voir les autre projets de Jimmy Letecheur">{{  $student->fullname }}</a></span>
				@endforeach

			<div class="rea__wrapper-top">

				<div class="rSlider__container">
					<ul class="rSlider">
						<li class="rSlider__item rSlider__item--withIframe" data-iframe="https://sketchfab.com/models/ba2674954ebb4c1eb4c2d8687b2013f0/embed?autostart=1" data-thumb="./img/rea-3D.png">
							<img class="rSlider__img" src="./img/rea-3D.png" width="947" height="532" alt="#alt">
							{!! file_get_contents(public_path('svg/inline-play-button3D.svg')) !!}
						</li>
						<li class="rSlider__item rSlider__item--withIframe" data-iframe="//www.youtube.com/embed/c0asJgSyxcY?autoplay=1" data-thumb="https://img.youtube.com/vi/shU6mXrlB4g/maxresdefault.jpg" >
							<img class="rSlider__img" src="https://img.youtube.com/vi/shU6mXrlB4g/maxresdefault.jpg" width="947" height="532" alt="#alt">
							{!! file_get_contents(public_path('svg/inline-play-button.svg')) !!}
						</li>
						<li class="rSlider__item" data-thumb="./img/rea-three.png">
							<img class="rSlider__img" src="{{ asset('img/rea-three.png') }}" width="947" height="532" alt="#alt">
						</li>
						<li class="rSlider__item" data-thumb="./img/rea-four.png">
							<img class="rSlider__img" src="./img/rea-four.png" width="947" height="532" alt="#alt">
						</li>
						<li class="rSlider__item" data-thumb="./img/rea-five.png">
							<img class="rSlider__img" src="./img/rea-five.png" width="947" height="532" alt="#alt">
						</li>
						<li class="rSlider__item" data-thumb="./img/rea-five.png">
							<img class="rSlider__img" src="./img/rea-five.png" width="947" height="532" alt="#alt">
						</li>
						<li class="rSlider__item" data-thumb="./img/rea-five.png">
							<img class="rSlider__img" src="./img/rea-five.png" width="947" height="532" alt="#alt">
						</li>
						<li class="rSlider__item" data-thumb="./img/rea-five.png">
							<img class="rSlider__img" src="./img/rea-five.png" width="947" height="532" alt="#alt">
						</li>
						<li class="rSlider__item" data-thumb=""></li>
					</ul>
				</div>

				<aside class="rea-infos rea-infos<?php if(!empty($work->project_link)) {echo '--with-button'; } ;?>">
					<h3 role="heading" aria-level="3" class="rea-infos__title">Détails sur le projet</h3>
					<dl class="rea-infos__list">
						<dt class="rea-infos__term">Orentation</dt>
						<dd class="rea-infos__data">{{ $orientations[$work->orientation] }}</dd>
						<dt class="rea-infos__term">Année de réalisation</dt>
						<dd class="rea-infos__data">{{ $work->year }}</dd>
						<dt class="rea-infos__term">Type de projet</dt>
						<dd class="rea-infos__data">{{ $work->type }}</dd>
						<dt class="rea-infos__term">Compétences/Outils</dt>
						<dd class="rea-infos__data">HTML, CSS, JavaScript, PHP, Wordpress, Sketch, Balsamiq</dd>
					</dl>
					<div class="rea-share">
						<span class="rea-share__label">Partager sur les réseaux sociaux</span>
						<ul class="social-list-circle">
							<li class="social-list-circle__item">
								<a href="" class="social-list-circle__link facebook" rel="me"><span>Partager le projet « Sur un Baobab » sur Facebook</span></a>
							</li><!--
                --><li class="social-list-circle__item">
								<a href="" class="social-list-circle__link twitter" rel="me"><span>Partager le projet « Sur un Baobab » sur Twitter</span></a>
							</li><!--
                --><li class="social-list-circle__item">
								<a href="" class="social-list-circle__link pinterest" rel="me"><span>Partager le projet « Sur un Baobab » sur Pinterest</span></a>
							</li>
						</ul>
					</div>
					@if(!empty($work->project_link))
					<div class="rea-button__wrapper">
						<a href="{{ $work->project_link }}" class="rea-button">
							<span class="rea-button__label">Voir le site web du projet <span class="rea-button__hidden">« {{ $work->title }} »</span></span>
						</a>
					</div>
					@endif
				</aside>

			</div>

			<div class="rea-content">
				<section class="rea-content__desc">
					<h3 role="heading" aria-level="3" class="rea-content__title">Description du projet</h3>
					{!! $work->description !!}
					@if(!empty($work->other_link))
						<a href="{{ $work->other_link }}" class="rea-content__button" title="Vers Github">
							<span>Code source disponible</span>
						</a>
					@endif
				</section>
				<section class="rea-content__prof">
					<h3 role="heading" aria-level="3" class="rea-content__title">Le mot des profs</h3>
					{!! $work->other_description !!}
				</section>

			</div>
		</article>
		<section class="rea-others">
			<h2 role="heading" aria-level="2" class="rea-others__title">Découvrir d’autre projets</h2>
			<ul class="reas">
				<li class="reas__item">
					<a href="#reas" class="reas__link">
						<figure class="reas__figure">
							<img class="reas__img" src="./img/reas-test.png" width="940" height="938" alt="">
							<figcaption class="reas__figcaption">
								<div class="reas__section">
									<span class="reas__section__name">
										<span class="reas__section__name-text">Web</span>
									</span>
								</div>
								<div class="reas__desc">
									<div class="reas__desc-wrapper">
										<strong class="reas__desc__name">Sur un Baobab</strong>
										<span class="reas__desc__author">Par Jimmy Letecheur</span>
									</div>
								</div>
							</figcaption>
						</figure>
					</a>
				</li><!--
                --><li class="reas__item">
					<a href="#reas" class="reas__link">
						<figure class="reas__figure">
							<img class="reas__img" src="./img/reas-test3.png" width="671" height="662" alt="">
							<figcaption class="reas__figcaption">
								<div class="reas__section">
									<span class="reas__section__name">
										<span class="reas__section__name-text">Design graphique</span>
									</span>
								</div>
								<div class="reas__desc">
									<div class="reas__desc-wrapper">
										<strong class="reas__desc__name">Sur un Baobab</strong>
										<span class="reas__desc__author">Par Jimmy Letecheur</span>
									</div>
								</div>
							</figcaption>
						</figure>
					</a>
				</li><!--
                --><li class="reas__item">
					<a href="#reas" class="reas__link">
						<figure class="reas__figure">
							<img class="reas__img" src="./img/reas-test7.png" width="805" height="770" alt="">
							<figcaption class="reas__figcaption">
								<div class="reas__section">
									<span class="reas__section__name">
										<span class="reas__section__name-text">3D et audiovisuel</span>
									</span>
								</div>
								<div class="reas__desc">
									<div class="reas__desc-wrapper">
										<strong class="reas__desc__name">Lorem ipsum dolor sit amet aspilicuita</strong>
										<span class="reas__desc__author">Par Henri Dalum et Jessica Daufel</span>
									</div>
								</div>
							</figcaption>
						</figure>
					</a>
				</li>
			</ul>
		</section>


	</div>





@endsection
