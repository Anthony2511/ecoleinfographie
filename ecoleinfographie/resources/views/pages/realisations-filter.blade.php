@extends('layout')

@section('header')
	@include('partials.header-min')
@endsection

@section('class', 'realisations')

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
				<a href="{{ Route('realisations') }}" class="breadcrumb__link breadcrumb__link--active" itemscope itemtype="http://schema.org/Thing"
					 itemprop="item">
					<span itemprop="name">Réalisations</span>
				</a>
				<meta itemprop="position" content="2" />
			</li>
			<li class="breadcrumb__item" itemprop="itemListElement" itemscope
					itemtype="http://schema.org/ListItem">
				<a href="{{ Request::fullUrl() }}" class="breadcrumb__link breadcrumb__link--active" itemscope itemtype="http://schema.org/Thing"
					 itemprop="item">
					<span itemprop="name">
						@if(!empty($_GET['skill']))
						Les réalisations avec la compétence « {{ strtoupper(str_replace('-', ' ', $_GET['skill'])) }} »
						@endif
						@if(!empty($_GET['type']))
								Les réalisations de type « {{ strtoupper(str_replace('-', ' ', $_GET['type'])) }} »
						@endif
						@if(!empty($_GET['year']))
							Les réalisations de l’année {{ strtoupper(str_replace('-', ' ', $_GET['year'])) }}
						@endif
						@if(!empty($_GET['orientation']))
							Les réalisations de l’orientation « {{ strtoupper(str_replace('-', ' ', $_GET['orientation'])) }} »
						@endif
							@if(!empty($_GET['author']))
								Les réalisations de {{ strtoupper(str_replace('-', ' ', $_GET['author'])) }}
							@endif
					</span>
				</a>
				<meta itemprop="position" content="2" />
			</li>
		</ol>
	</div>



	<div class="index-rea__container index-rea__container--filter">

		<section class="reas-wrapper">
			<h2 role="heading" aria-level="2" class="reas-wrapper__title">La liste des travaux de nos étudiants</h2>

			<span class="reas-wrapper__info">
				@if(!empty($_GET['orientation']))
					Réalisations filtrées par orientation&nbsp;:
					<span class="reas-wrapper__term">
						{{ strtoupper(str_replace('-', ' ', $_GET['orientation'])) }}
					</span>
				@endif
				@if(!empty($_GET['skill']))
					Réalisations filtrées par compétences&nbsp;:
					<span class="reas-wrapper__term">
						{{ strtoupper(str_replace('-', ' ', $_GET['skill'])) }}
					</span>
				@endif
				@if(!empty($_GET['type']))
						Réalisations filtrées par type&nbsp;:
				<span class="reas-wrapper__term">
					{{ strtoupper(str_replace('-', ' ', $_GET['type'])) }}
				</span>
				@endif
				@if(!empty($_GET['year']))
					Réalisations filtrées par année&nbsp;:
					<span class="reas-wrapper__term">
						{{ strtoupper(str_replace('-', ' ', $_GET['year'])) }}
					</span>
				@endif
					@if(!empty($_GET['author']))
						Réalisations filtrées par auteur&nbsp;:
						<span class="reas-wrapper__term">
							{{ strtoupper(str_replace('-', ' ', $_GET['author'])) }}
						</span>
					@endif
			</span>


			<ul class="reas">
				@include('partials.realisations.item-realisations')
			</ul>


		</section>
	</div>

	@if(count($works) >= 11)
	<div class="load-more__container">
		<noscript>
			{!! $works->render() !!}
		</noscript>
		<a href="{{ $works->nextPageUrl() . $getLoadMoreLink }}" class="load-more" id="load-more">
			<span class="load-more__label">
				<span class="load-more__label-text">Charger plus</span>
				<span class="load-more__hidden">d’anciens étudiants diplômés</span>
			</span>
		</a>
	</div>
	@else
		<div class="load-more__container">
			<noscript>
				{!! $works->render() !!}
			</noscript>
			<a href="{{ $works->nextPageUrl() . $getLoadMoreLink }}" class="load-more finish" id="load-more">
				<span class="load-more__label">
					<span class="load-more__label-text">Il n’y a pas d’autre réalisations</span>
					<span class="load-more__hidden">d’anciens étudiants diplômés</span>
				</span>
			</a>
		</div>
	@endif

@endsection

