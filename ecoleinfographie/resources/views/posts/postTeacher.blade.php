@extends('layout')

@section('class', 'oneTeacher')

@section('header')
	@include('partials.header-min')
@endsection

@section('content')
	<div class="breadcrumb">
		<ol class="breadcrumb__list" itemscope itemtype="http://schema.org/BreadcrumbList">
			<li class="breadcrumb__item" itemprop="itemListElement" itemscope
					itemtype="http://schema.org/ListItem">
				<a href="{{ Url('/') }}" class="breadcrumb__link breadcrumb__link--home" itemscope itemtype="http://schema.org/Thing"
					 itemprop="item">
					<span itemprop="name">Page d’accueil</span>
				</a>
				<meta itemprop="position" content="1"/>
			</li>
			<li class="breadcrumb__item" itemprop="itemListElement" itemscope
					itemtype="http://schema.org/ListItem">
				<a href="{{ Route('teachers') }}" class="breadcrumb__link breadcrumb__link--active" itemscope itemtype="http://schema.org/Thing"
					 itemprop="item">
					<span itemprop="name">Professeurs</span>
				</a>
				<meta itemprop="position" content="2"/>
			</li>
			<li class="breadcrumb__item" itemprop="itemListElement" itemscope
					itemtype="http://schema.org/ListItem">
				<a href="{{ Url()->current() }}" class="breadcrumb__link breadcrumb__link--active" itemscope itemtype="http://schema.org/Thing"
					 itemprop="item">
					<span itemprop="name">{{ $teacher->fullname }}</span>
				</a>
				<meta itemprop="position" content="3"/>
			</li>
		</ol>
	</div>


	<div class="prof__container">
		<section class="prof">
			<div class="prof__top-container">
				<div class="prof__left">
					<figure class="prof__figure">
						<img src="{{ $imageProfile }}" width="295" height="281" alt="La photo de profile de {{ $teacher->fullname }}, {{ strtolower($teacher->role) }} à la Haute École de la Province de Liège en infographie" class="prof__img">
					</figure>
					<a href="mailto:{{ $teacher->email }}" class="prof__email"><span class="prof__email__label">Contacter par email <span class="prof__email__hidden">{{ $teacher->fullname }}</span></span></a>

					<ul class="social-list-circle">
						<li class="social-list-circle__item">
							<a href="" class="social-list-circle__link facebook" rel="me"><span>Vers le Facebook de {{ $teacher->fullname }}</span></a>
						</li><!--
                    --><li class="social-list-circle__item">
							<a href="" class="social-list-circle__link twitter" rel="me"><span>Vers le Facebook de Kévin Dessouroux</span></a>
						</li><!--
                    --><li class="social-list-circle__item">
							<a href="" class="social-list-circle__link pinterest" rel="me"><span>Vers le Facebook de Kévin Dessouroux</span></a>
						</li><!--
                    --></ul>

				</div>
				<div class="prof__right">
					<h2 role="heading" aria-level="2" class="prof__title"><span>Le profile de </span>{{ $teacher->fullname }}</h2>
					<span class="prof__role">{{ $teacher->role }}</span>
					<p class="prof__description">{{ $teacher->description }}</p>
				</div>
			</div>


			@if(!empty($teacher->courses) && count($teacher->courses))
			<section class="profCourse">
				<h3 role="heading" aria-level="3" class="profCourse__title">Ses cours</h3>
				<ul class="profCourse__list">
					@foreach($teacher->courses as $course)
						<li class="profCourse__item">
							<a href="{{ url('cours/'.$course->slug) }}" class="profCourse__link">{{ $course->title }}</a>
						</li>
					@endforeach
				</ul>
			</section>
			@endif


			<section class="profArticles">
				<h3 role="heading" aria-level="3" class="profArticles__title">Ses articles publiés</h3>

				@foreach($teacher->articles as $article)
					@include('partials.article-card')
				@endforeach

				</article>
			</section>
		</section>

	</div>

@endsection

