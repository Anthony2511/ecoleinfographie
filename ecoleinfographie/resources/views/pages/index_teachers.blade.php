@extends('layout')
@section('header')
	@include('partials.header-min')
@endsection

@section('class', 'index_teachers')

@section('content')

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
				<a href="{{ Route('teachers') }}" class="breadcrumb__link breadcrumb__link--active" itemscope itemtype="http://schema.org/Thing"
					 itemprop="item">
					<span itemprop="name">@lang('teachers.title')</span>
				</a>
				<meta itemprop="position" content="2" />
			</li>
		</ol>
	</div>

	<section class="teachers">
		<h2 role="heading" aria-level="2" class="teachers__title">
			@lang('teachers.title')
		</h2>
		<ul class="teachers__list">
			{{--@foreach($teachers as $teacher)
			<li class="teachers__item">
				<a href="{{ trans('url.teachers') . '/' . $teacher->slug }}" class="teachers__link">
					<img src="{{ $teacher->getImageProfile('_30x30.jpg') }}" width="30" height="30"
							 class="teachers__img"
							 srcset="{{ $teacher->getImageProfile('_60x60.jpg') }} 2x"
							 alt="Photo de XXX, professeur à la Haute École de la Province de Liège"><!--
				--><span class="teachers__name">{{ $teacher->lastname }}, {{ $teacher->firstname }}</span>
				</a>
			</li>
			@endforeach--}}
			@foreach($teachers as $teacher)
				<li class="course-teachers__item">
					<a href="{{ url('professeurs/' . $teacher->slug ) }}" class="card_student">
						<figure class="card_student__figure">
							<div class="card_student__picture-wrapper">
								<img class="card_student__picture" src="{{ $teacher->getImageProfile('_cards.jpg') }}" width="313" height="179" alt="#" >
							</div>
							<figcaption class="card_student__figcaption">
								<strong class="card_student__name">
									{{ $teacher->firstname }} <span>{{ $teacher->lastname }}</span>
								</strong>
								<span class="card_student__profession">
									{{ $teacher->role }}
								</span>
							</figcaption>
						</figure>
						<div class="card_student__fake-link">
							<span class="card_student__fake-link__text">Voir sa fiche</span>
						</div>
					</a>
				</li>
			@endforeach

		</ul>
	</section>

@endsection
