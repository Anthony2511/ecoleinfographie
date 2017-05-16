<header class="header header-shawl" role="banner">
    <div class="header__wrapper">
        <h1 role="heading" aria-level="1" class="header-min__title">
			      Le blog | École d’infographie de la Province de Liège
        </h1>
        <a href="/" class="logo">Logo</a>
        @include('partials.navigation')

        <div class="breadcrumb breadcrumb--header">
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
                    <a href="#" class="breadcrumb__link breadcrumb__link--active" itemscope itemtype="http://schema.org/Thing"
                       itemprop="item">
                        <span itemprop="name">Le blog de l’infographie</span>
                    </a>
                    <meta itemprop="position" content="2" />
                </li>
            </ol>
        </div>


        <div class="header-home">
            <strong class="header-home__title">Le blog de l’infographie</strong>
            <p class="header-home__intro">Nam dapibus nisl vitae elit fringilla rutrum. Aenean sollicitudin, erat a elementum rutrum, neque sem pretium metus, quis mollis sollicitudin, erat a elementum nsi lum terra...</p>
        </div>
    </div>
    <div class="blog-home-img">
        {!! file_get_contents(public_path('svg/blog.svg')) !!}
    </div>
</header>

<div class="container">
