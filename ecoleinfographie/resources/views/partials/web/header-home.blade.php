<header class="header header-webhome header-trades" role="banner">
    <div class="header__wrapper">
        <h1 role="heading" aria-level="1" class="header-trades__title isOpacity">
            Les métiers du web
        </h1>
        <a href="#home" class="logo">Logo</a>
        @include('partials.navigation')
        @include('partials.breadcrumb')
        <div class="header-trades__subnav isOpacity" role="navigation">
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
        </div>
        <div class="phone-illu__container">
            <div class="phone-illu" data-type="parallax" data-depth="0.05">
                <img class="phone-illu__img-container" src="./img/phoneweb.png" srcset="./img/phoneweb@2x.png 2x" width="351" height="542" alt="">
                <div class="phone-illu__parallax-wrapper">
                    <img src="./img/image-responsive.jpg" width="800" height="9438" alt="" data-type="parallax" data-depth="0.5" >
                </div>
            </div>
        </div>
    </div>
    <div class="particles-js" id="particles-js"></div>
    <div class="background-opacity"></div>
</header>
