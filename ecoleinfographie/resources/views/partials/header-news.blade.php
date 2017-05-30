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
					<a href="{{ Url('/') }}" class="breadcrumb__link breadcrumb__link--home" itemscope itemtype="http://schema.org/Thing"
						 itemprop="item">
						<span itemprop="name">Page d’accueil</span>
					</a>
					<meta itemprop="position" content="1"/>
				</li>
				<li class="breadcrumb__item" itemprop="itemListElement" itemscope
						itemtype="http://schema.org/ListItem">
					<a href="{{ Url()->current() }}" class="breadcrumb__link breadcrumb__link--active" itemscope itemtype="http://schema.org/Thing"
						 itemprop="item">
						<span itemprop="name">Actualités</span>
					</a>
					<meta itemprop="position" content="2"/>
				</li>
			</ol>
		</div>

		@include('partials.news.featured')

	</div>

</header>

<div class="container" id="contenu">
