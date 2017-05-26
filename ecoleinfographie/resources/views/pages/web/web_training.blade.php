@extends('layout')

@section('header')
    @include('partials.header-min')
@endsection

@section('class', 'les-metiers-du-web-formation')

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
				<a href="{{ Route('webTrades') }}" class="breadcrumb__link breadcrumb__link--active" itemscope itemtype="http://schema.org/Thing"
					 itemprop="item">
					<span itemprop="name">Les métiers du web</span>
				</a>
				<meta itemprop="position" content="2"/>
			</li>
			<li class="breadcrumb__item" itemprop="itemListElement" itemscope
					itemtype="http://schema.org/ListItem">
				<a href="{{ Url()->current() }}" class="breadcrumb__link breadcrumb__link--active" itemscope itemtype="http://schema.org/Thing"
					 itemprop="item">
					<span itemprop="name">La formation</span>
				</a>
				<meta itemprop="position" content="2"/>
			</li>
		</ol>
	</div>

	@include('partials.web.intro-formation')
    @include('partials.web.blocs-formation')
@endsection

