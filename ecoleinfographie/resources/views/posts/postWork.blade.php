@extends('layout')

@section('class', 'work')

@section('header')
	@include('partials.header-min')
@endsection

@section('content')

	<!-- Breadcrumb -->
	<div class="breadcrumb">
		<ol class="breadcrumb__list" itemscope itemtype="http://schema.org/BreadcrumbList">
			<li class="breadcrumb__item" itemprop="itemListElement" itemscope
					itemtype="http://schema.org/ListItem">
				<a href="{{ Url('/') }}" class="breadcrumb__link breadcrumb__link--home" itemscope itemtype="http://schema.org/Thing"
					 itemprop="item">
					<span itemprop="name">Page d’accueil</span>
				</a>
				<meta itemprop="position" content="1" />
			</li>
			<li class="breadcrumb__item" itemprop="itemListElement" itemscope
					itemtype="http://schema.org/ListItem">
				<a href="{{ Route('realisations') }}" class="breadcrumb__link breadcrumb__link--active" itemscope itemtype="http://schema.org/Thing"
					 itemprop="item">
					<span itemprop="name">Réalisations</span>
				</a>
				<meta itemprop="position" content="2" />
			</li>
			<li class="breadcrumb__item" itemprop="itemListElement" itemscope
					itemtype="http://schema.org/ListItem">
				<a href="{{ url()->current() }}" class="breadcrumb__link breadcrumb__link--active" itemscope itemtype="http://schema.org/Thing"
					 itemprop="item">
					<span itemprop="name">{{ $work->title }}</span>
				</a>
				<meta itemprop="position" content="3" />
			</li>
		</ol>
	</div>
	<!-- End Breadcrumb -->

	<div class="rea__container">
		<article class="rea">
			<h2 role="heading" aria-level="2" class="rea__name">{{ $work->title }}</h2>

			<span class="rea__author">
				Par
				@foreach($work->students as $student)
					<a href="{{ Route('realisations-filter').'?author='. $student->slug }}" class="rea__link" rel="author" title="Voir les autre projets de Jimmy Letecheur">{{  $student->fullname }}</a></span>
				@endforeach

			<div class="rea__wrapper-top">

				<aside class="rea-infos rea-infos<?php if(!empty($work->project_link)) {echo '--with-button'; } ;?>">
					<h3 role="heading" aria-level="3" class="rea-infos__title">Détails sur le projet</h3>
					<dl class="rea-infos__list">
						<dt class="rea-infos__term">Orentation</dt>
						<dd class="rea-infos__data">
							<a href="{{ Route('realisations-filter').'?orientation='. $work->orientation }}" class="rea-infos__link">{{ $orientations[$work->orientation] }}</a></dd>
						<dt class="rea-infos__term">Année de réalisation</dt>
						<dd class="rea-infos__data">
							<a href="{{ Route('realisations-filter').'?year='. $work->year }}" class="rea-infos__link">{{ $work->year }}</a></dd>
						<dt class="rea-infos__term">Type de projet</dt>
						<dd class="rea-infos__data">
							<a href="{{ Route('realisations-filter').'?type='. $work->type->slug }}" class="rea-infos__link">
								{{ $work->type->name }}
							</a></dd>
						<dt class="rea-infos__term">Compétences/Outils</dt>
						<dd class="rea-infos__data">
							@foreach($work->skills as $skill)
								<a href="{{ Route('realisations-filter').'?skill='. $skill->slug }}" class="rea-infos__skill">{{ $skill->name }}</a>
							@endforeach
						</dd>
					</dl>
					<div class="rea-share">
						<span class="rea-share__label">Partager sur les réseaux sociaux</span>
						<ul class="social-list-circle">
							<li class="social-list-circle__item">
								<a href="https://www.facebook.com/sharer/sharer.php?u={{ Url()->current() }}" class="social-list-circle__link facebook" rel="me"><span>Partager l’article sur Facebook</span></a>
							</li><!--
                    --><li class="social-list-circle__item">
								<a href="https://twitter.com/home?status={{ Url()->current() }}" class="social-list-circle__link twitter" rel="me"><span>Partager l’article sur Twitter</span></a>
							</li><!--
                    --><li class="social-list-circle__item">
								<a href="https://pinterest.com/pin/create/bookmarklet/?media={{ $work->cover }}&url={{ Url()->current() }}&description={{ $work->description }}" class="social-list-circle__link pinterest" rel="me"><span>Partager l’article sur Pinterest</span></a>
							</li><!--
                    --><li class="social-list-circle__item">
								<a href="https://www.linkedin.com/shareArticle?url={{ Url()->current() }}&title={{ $work->title }}" class="social-list-circle__link linkedin" rel="me"><span>Partager l’article sur Linkedin</span></a>
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

				<div class="rSlider__container">
					<ul class="rSlider">
						@if(!empty($work->view3d))
							<?php
								$oEmbedUrl = 'https://sketchfab.com/oembed?url=' . $work->view3d;
								$obj = json_decode(file_get_contents($oEmbedUrl), true);
							;?>
							<li class="rSlider__item rSlider__item--withIframe rSlider__item--visible" data-src="{{ $work->view3d }}" data-thumb="{{ $obj['thumbnail_url'] }}">
								<img class="rSlider__img" src="{{ $obj['thumbnail_url'] }}" width="947" height="532" alt="#alt">
								{!! file_get_contents(public_path('svg/inline-play-button3D.svg')) !!}
							</li>
						@endif
						@if(!empty($work->video))
						<?php $video = json_decode($work->video); ?>
						<li class="rSlider__item rSlider__item--withIframe rSlider__item--visible" data-src="{{$video->url}}" data-thumb="{{ $video->image }}" >
							<img class="rSlider__img" src="{{ $video->image }}" width="947" height="532" alt="Miniature de la vidéo du projet">
							{!! file_get_contents(public_path('svg/inline-play-button.svg')) !!}
						</li>
						@endif
						@if(!empty($work->images))
						@foreach($work->images as $image)
							<li class="rSlider__item rSlider__item--visible" data-thumb="{{ url('uploads/works/gallery/'.basename($image, '.jpg') . '_sliderMin.jpg') }}" data-src="{{ url('uploads/works/gallery/'.basename($image, '.jpg') . '_sliderMax.jpg') }}">
								<img class="rSlider__img" src="{{ url('uploads/works/gallery/'.basename($image, '.jpg') . '_sliderMin.jpg') }}" width="947" height="532" alt="">
							</li>
						@endforeach
						@endif
						<li class="rSlider__item rSlider__item--hidden" data-thumb="" data-src=""></li>
					</ul>
				</div>

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
			<ul class="reas" id="reas">
					<li class="reas__item">
						<a href='{{ Url('/') . '/'  . trans('url.works') . '/' . $get3dWork->slug }}' class="reas__link">
							<figure class="reas__figure">
								<img class="reas__img" src="{{ $get3dWork->getImageWork('_more.jpg') }}" width="385" height="223" alt="Image de la réalisation « {{ $get3dWork->title }} » réalisée dans l’orientation {{ $orientations[$get3dWork->orientation] }} en {{ $get3dWork->year }} à la Haute École de la Province de Liège.">
								<figcaption class="reas__figcaption">
									<div class="reas__section">
										<span class="reas__section__name">
											<span class="reas__section__name-text">{{ $orientations[$get3dWork->orientation] }}</span>
										</span>
									</div>
									<div class="reas__desc">
										<div class="reas__desc-wrapper">
											<strong class="reas__desc__name">{{ $get3dWork->title }}</strong>

												<span class="reas__desc__author">
													Par @foreach($get3dWork->students as $student)
																{{ $student->fullname }}
															@endforeach
												</span>
										</div>
									</div>
								</figcaption>
							</figure>
						</a>
					</li>
					<li class="reas__item">
						<a href='{{ Url('/') . '/'  . trans('url.works') . '/' . $get2dWork->slug }}' class="reas__link">
							<figure class="reas__figure">
								<img class="reas__img" src="{{ $get2dWork->getImageWork('_more.jpg') }}" width="385" height="223" alt="Image de la réalisation « {{ $get2dWork->title }} » réalisée dans l’orientation {{ $orientations[$get2dWork->orientation] }} en {{ $get2dWork->year }} à la Haute École de la Province de Liège.">
								<figcaption class="reas__figcaption">
									<div class="reas__section">
										<span class="reas__section__name">
											<span class="reas__section__name-text">{{ $orientations[$get2dWork->orientation] }}</span>
										</span>
									</div>
									<div class="reas__desc">
										<div class="reas__desc-wrapper">
											<strong class="reas__desc__name">{{ $get2dWork->title }}</strong>

											<span class="reas__desc__author">
												Par @foreach($get2dWork->students as $student)
													{{ $student->fullname }}
												@endforeach
											</span>
										</div>
									</div>
								</figcaption>
							</figure>
						</a>
					</li>
					<li class="reas__item">
						<a href='{{ Url('/') . '/'  . trans('url.works') . '/' . $getWebWork->slug }}' class="reas__link">
							<figure class="reas__figure">
								<img class="reas__img" src="{{ $getWebWork->getImageWork('_more.jpg') }}" width="385" height="223" alt="Image de la réalisation « {{ $getWebWork->title }} » réalisée dans l’orientation {{ $orientations[$getWebWork->orientation] }} en {{ $getWebWork->year }} à la Haute École de la Province de Liège.">
								<figcaption class="reas__figcaption">
									<div class="reas__section">
										<span class="reas__section__name">
											<span class="reas__section__name-text">{{ $orientations[$getWebWork->orientation] }}</span>
										</span>
									</div>
									<div class="reas__desc">
										<div class="reas__desc-wrapper">
											<strong class="reas__desc__name">{{ $getWebWork->title }}</strong>

											<span class="reas__desc__author">
												Par @foreach($getWebWork->students as $student)
													{{ $student->fullname }}
												@endforeach
											</span>
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
