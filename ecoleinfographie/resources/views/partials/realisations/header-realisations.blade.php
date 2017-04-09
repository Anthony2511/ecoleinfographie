<header class="header header-shawl" role="banner">
    <div class="header__wrapper">
        <h1 role="heading" aria-level="1" class="header-min__title">
		    <?= $page->title ?> | École d’infographie de la Province de Liège
        </h1>
        <a href="#home" class="logo">Logo</a>
        @include('partials.navigation')
        @include('partials.breadcrumb')
        <div class="header-rea">
            <strong class="header-rea__title">Les travaux de nos étudiants</strong>
            <p class="header-rea__intro">Chaque années, nos étudiants réalisent au cours de leur formation des travaux dispensés par leurs professeurs ou des clients. En voici une sélection afin de vous montrer ce qu’il est possible d’accomplir grâce à la formation en Infographie.</p>
        </div>
        <img src="./img/rea-tablet.png" width="393" height="274" alt="" class="header-rea__tablet" srcset="./img/rea-tablet@2x.png 2x">
        <img src="./img/rea-phone.png" width="110" height="149" alt="" class="header-rea__phone" srcset="./img/rea-phone@2x.png 2x">
    </div>
    <div class="rea-printer-wrapper">
        <div class="rea-printer__A4-wrapper">
            <img src="./img/rea-A4.png" width="177" height="186" alt="" srcset="./img/rea-A4@2x.png 2x" class="header-rea__A4">
        </div>
        <img src="./img/rea-printer.png" width="500" height="471" alt="" class="header-rea__printer" srcset="./img/rea-printer@2x.png 2x">
    </div>
</header>
