@extends('layout')
@section('header')
	@include('partials.header-min')
@endsection

@section('class', 'contact-us')

@section('content')

	<div class="breadcrumb">
		<ol class="breadcrumb__list" itemscope itemtype="http://schema.org/BreadcrumbList">
			<li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				<a href="#" class="breadcrumb__link breadcrumb__link--home" itemscope itemtype="http://schema.org/Thing"
					 itemprop="item">
					<span itemprop="name">Page d’accueil</span>
				</a>
				<meta itemprop="position" content="1"/>
			</li>
			<li class="breadcrumb__item" itemprop="itemListElement" itemscope
					itemtype="http://schema.org/ListItem">
				<a href="{{ Route('internship') }}" class="breadcrumb__link breadcrumb__link--active" itemscope
					 itemtype="http://schema.org/Thing"
					 itemprop="item">
					<span itemprop="name">@lang('contact.title')</span>
				</a>
				<meta itemprop="position" content="2"/>
			</li>
		</ol>
	</div>

	<section class="contact">
		<div class="contact__top-wrapper">
			<h2 role="heading" aria-level="2" class="contact__title">@lang('contact.title')</h2>
			<p class="contact__paragraph">@lang('contact.intro')</p>

			<ul class="responsible">
				<li class="responsible__item">
					<strong class="responsible__label">@lang('contact.res2d')</strong>
					<span class="responsible__name">Véronique Etienne</span>
					<a href="mailto:dominique.vilain@hepl.be" class="responsible__mail">etienne.veronique@hepl.be</a>
				</li>
				<li class="responsible__item">
					<strong class="responsible__label">@lang('contact.res3d')</strong>
					<span class="responsible__name">Nicolas Claisses</span>
					<a href="mailto:claisses.nicolas@hepl.be" class="responsible__mail">claisses.nicolas@hepl.be</a>
				</li>
				<li class="responsible__item">
					<strong class="responsible__label">@lang('contact.resWeb')</strong>
					<span class="responsible__name">Dominique Vilain</span>
					<a href="mailto:dominique.vilain@hepl.be" class="responsible__mail">dominique.vilain@hepl.be</a>
				</li>
			</ul>

			<ul class="social-list-circle">
				<li class="social-list-circle__item">
					<a href="#fb" class="social-list-circle__link facebook" rel="me"><span>Vers la page Facebook de l’école
							d’infographie de la Province de Liège</span></a>
				</li>
				<li class="social-list-circle__item">
					<a href="#fb" class="social-list-circle__link twitter" rel="me"><span>Vers la page Wwitter de l’école
							d’infographie de la Province de Liège</span></a>
				</li>
				<li class="social-list-circle__item">
					<a href="#fb" class="social-list-circle__link pinterest" rel="me"><span>Vers la page Pinterest de l’école
							d’infographie de la Province de Liège</span></a>
				</li>
				<li class="social-list-circle__item">
					<a href="#fb" class="social-list-circle__link behance" rel="me"><span>Vers la page Behance de l’école
							d’infographie de la Province de Liège</span></a>
				</li>
				<li class="social-list-circle__item">
					<a href="#fb" class="social-list-circle__link dribble" rel="me"><span>Vers la page Dribbble de l’école
							d’infographie de la Province de Liège</span></a>
				</li>
			</ul>

			<img src="{{ asset('img/contact-img.jpg') }}" width="610" height="662" alt="">

		</div>

		</div>
	</section>










@endsection
