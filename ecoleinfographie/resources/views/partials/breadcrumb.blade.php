<div class="breadcrumb <?php if($page->header_large == true) echo 'breadcrumb--header isOpacity'; ?>">
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
                <span itemprop="name"><?= $page->title; ?></span>
            </a>
            <meta itemprop="position" content="2" />
        </li>
    </ol>
</div>
