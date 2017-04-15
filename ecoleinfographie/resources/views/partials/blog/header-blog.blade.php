<header class="header header-shawl" role="banner">
    <div class="header__wrapper">
        <h1 role="heading" aria-level="1" class="header-min__title">
			<?= $page->title ?> | École d’infographie de la Province de Liège
        </h1>
        <a href="#home" class="logo">Logo</a>
        @include('partials.navigation')
        @include('partials.breadcrumb')
        <div class="header-rea">
            <strong class="header-rea__title">Le blog de l’infographie</strong>
            <p class="header-rea__intro">Nam dapibus nisl vitae elit fringilla rutrum. Aenean sollicitudin, erat a elementum rutrum, neque sem pretium metus, quis mollis sollicitudin, erat a elementum nsi lum terra...</p>
        </div>
    </div>
    <div class="blog-img">{!! file_get_contents(public_path('svg/blog.svg')) !!}</div>
</header>
