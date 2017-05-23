<header class="header header-shawl header-news" role="banner">
	<div class="header__wrapper">
		<h1 role="heading" aria-level="1" class="header-min__title">
			Nos dernières nouvelles | École d’infographie de la Province de Liège
		</h1>
		<a href="{{ Url('/') }}" class="logo">Logo</a>
		@include('partials.navigation')

		<div class="breadcrumb breadcrumb--header">
			<ol class="breadcrumb__list" itemscope itemtype="http://schema.org/BreadcrumbList">
				<li class="breadcrumb__item" itemprop="itemListElement" itemscope
						itemtype="http://schema.org/ListItem">
					<a href="#" class="breadcrumb__link breadcrumb__link--home" itemscope itemtype="http://schema.org/Thing"
						 itemprop="item">
						<span itemprop="name">Page d’accueil</span>
					</a>
					<meta itemprop="position" content="1"/>
				</li>
				<li class="breadcrumb__item" itemprop="itemListElement" itemscope
						itemtype="http://schema.org/ListItem">
					<a href="#" class="breadcrumb__link breadcrumb__link--active" itemscope itemtype="http://schema.org/Thing"
						 itemprop="item">
						<span itemprop="name">Actualité</span>
					</a>
					<meta itemprop="position" content="2"/>
				</li>
			</ol>
		</div>

		<article class="featured">
			<figure class="featured__figure">
				<img class="featured__img" src="{{ asset('img/featured.jpg') }}" width="378" height="447" alt="">
			</figure>
			<div class="featured__content">
				<span class="featured__date">Le
					<date datetime="">13 janvier 2017</date>
				</span>
				<h2 role="heading" aria-level="2" class="featured__title">Inscrivez-vous à la journée d’immersion</h2>
				<p class="featured__excerpt">
					Aliquam ornare rutrum lacus, bibendum viverra leo. Nunc felis tortor, facilisis vitae ante at, blandit euismod
					risus. Nunc tempor tempus volutpat. Phasellus venenatis lorem vel faucibus ultrices. Aliquam in auctor sapien,
					et lacinia est. Vivamus orci sem...
				</p>
				<span class="featured__fakelink">Lire l’article</span>
			</div>
			<a href="#monarticle" class="featured__link"><span>Lire l’article NOM ARTICLE</span></a>
		</article>

</header>

<div class="container">
