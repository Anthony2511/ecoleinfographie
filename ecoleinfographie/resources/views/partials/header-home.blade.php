<header class="header header-shawl" role="banner">
    <div class="header__wrapper">
        <h1 class="header-shawl__title" role="heading" aria-level="1">
            <span class="header-shawl__title__strong">@lang('home.headerTitle')</span>
            <span class="header-shawl__title__small">@lang('home.headerSubtitle')</span>
        </h1>
        <a href="/" class="logo">Logo</a>
        @include('partials.navigation')
        <a href="#intro" class="header-shawl__gobottom-link">
            <svg class="header-shawl__gobottom" width="25" height="32" xmlns="http://www.w3.org/2000/svg">
                <g fill="none" fill-rule="evenodd">
                    <circle fill-opacity=".95" fill="#FFF" cx="12.5" cy="19.5" r="12.5"/>
                    <path class="header-shawl__gobottom-arrow" d="M16.8 17.6l-.45-.4c-.15-.13-.32-.2-.52-.2s-.38.07-.52.2l-2.8 2.67-2.8-2.67c-.1-.13-.3-.2-.5-.2s-.35.07-.5.2l-.43.4c-.15.15-.22.32-.22.5 0 .2.08.38.23.5L12 22.18c.13.14.3.2.5.2s.4-.06.54-.2l3.76-3.57c.13-.1.2-.3.2-.5 0-.13-.07-.3-.2-.5z" fill="#093D50"/>
                    <path class="header-shawl__gobottom-arrow2" d="M16.8.6l-.45-.4c-.15-.13-.32-.2-.52-.2s-.38.07-.52.2l-2.8 2.67L9.7.2C9.54.07 9.37 0 9.16 0c-.2 0-.37.07-.52.2L8.2.6c-.13.16-.2.33-.2.5 0 .2.07.38.22.5l3.76 3.58c.14.14.3.2.52.2.2 0 .38-.06.53-.2L16.8 1.6c.13-.13.2-.3.2-.5 0-.18-.07-.34-.2-.5z" fill="#093D50"/>
                </g>
            </svg>
        </a>
    </div>
</header>

<div class="container" id="contenu">
