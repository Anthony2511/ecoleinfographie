<header class="header header-webhome header-trades" role="banner">
    <div class="header__wrapper">
        <h1 role="heading" aria-level="1" class="header-trades__title">
            Les métiers du web
        </h1>
        <a href="#home" class="logo">Logo</a>
        @include('partials.navigation')
        <nav class="breadcrumb breadcrumb--header">
            <h2 role="heading" aria-level="2" class="breadcrumb__title">Fil d’arianne</h2>
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
                        <span itemprop="name">Les métiers du web</span>
                    </a>
                    <meta itemprop="position" content="2" />
                </li>
            </ol>
        </nav>
        <nav class="header-trades__subnav" role="navigation">
            <h2 role="heading" aria-level="2" class="header-trades__subnav__title">Navigation secondaire pour la page des métiers du web</h2>
            <ul class="header-trades__subnav__list">
                <li class="header-trades__subnav__item">
                    <a href="#" class="header-trades__subnav__link">La formation</a>
                </li>
                <li class="header-trades__subnav__item">
                    <a href="" class="header-trades__subnav__link">Le programme des cours</a>
                </li>
                <li class="header-trades__subnav__item">
                    <a href="" class="header-trades__subnav__link">Les anciens bacheliers du web</a>
                </li>
            </ul>
        </nav>
    </div>
</header>