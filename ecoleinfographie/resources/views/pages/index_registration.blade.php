@extends('layout')

@section('header')
    @include('partials.header-min')
@endsection

@section('class', 'registration')

@section('content')
    <div class="breadcrumb">
        <ol class="breadcrumb__list" itemscope itemtype="http://schema.org/BreadcrumbList">
            <li class="breadcrumb__item" itemprop="itemListElement" itemscope
                itemtype="http://schema.org/ListItem">
                <a href="{{ Url('/') }}" class="breadcrumb__link breadcrumb__link--home" itemscope itemtype="http://schema.org/Thing"
                   itemprop="item">
                    <span itemprop="name">Page d’accueil</span>
                </a>
                <meta itemprop="position" content="1" />
            </li>
            <li class="breadcrumb__item" itemprop="itemListElement" itemscope
                itemtype="http://schema.org/ListItem">
                <a href="{{ Url()->current() }}" class="breadcrumb__link breadcrumb__link--active" itemscope itemtype="http://schema.org/Thing"
                   itemprop="item">
                    <span itemprop="name">@lang('registration.button')</span>
                </a>
                <meta itemprop="position" content="2" />
            </li>
        </ol>
    </div>

    <section class="insIntro">
        <div class="insIntro__wrapper">
            <div class="insIntro__textWrapper">
                <h2 role="heading" aria-level="2" class="insIntro__title">S’inscrire en infographie</h2>
                <p class="insIntro__paragraph">Vivamus elementum sapien vitae erat efficitur faucibus ? Pellentesque sed leo blandit, pulvinar leo sed, scelerisque arcu. Sed bibendum consectetur viverra. Aliquam eu turpis est. Fusce vel nulla convallis, malesuada lacus ut, euismod diam. Maecenas id leo augue. Fusce sed porta sem. Nam cursus iaculis libero quis dapibus.Vivamus elementum sapien vitae erat efficitur faucibus ?</p>
            </div>
            <figure class="insIntro__figure">
                <img class="insIntro__img" src="./img/inscription.jpg" width="515" height="383" alt="">
            </figure>
        </div>
    </section>
    <section class="insLocation">
        <div class="insLocation__wrapper">
            <div class="insLocation__when">
                <h2 class="insLocation__when__title">Quand&nbsp;?</h2>
                <p class="insLocation__paragraph">Vivamus elementum sapien vitae erat efficitur faucibus ? Pellentesque sed leo blandit, pulvinar leo sed, scelerisque arcu. Sed bibendum consectetur viverra. </p>
            </div>
        </div>
    </section>
    <section class="map">
        <div class="map__container">
            <div class="map__textWrapperContainer">
                <div class="map__textWrapper">
                <h2 class="map__title">À quel endroit&nbsp;?</h2>
                <p class="insLocation__paragraph">Afin de compléter votre inscription, vous devez vous rendre à l’adresse indiquée ci-dessous.</p>
                <p class="insLocation__paragraph"><b>Attention&nbsp;:</b> Ce n’est pas l’adresse de l’école</p>
                <div class="map__addressWrapper">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 35">
                        <path fill="#4990E2" fill-rule="evenodd" d="M11 .02C4.92.02 0 4.9 0 10.94 0 21.38 11 35 11 35s11-13.62 11-24.07C22 4.9 17.08.03 11 .03zm0 16.95c-3.28 0-5.94-2.64-5.94-5.9 0-3.26 2.66-5.9 5.94-5.9 3.28 0 5.94 2.64 5.94 5.9 0 3.26-2.66 5.9-5.94 5.9z"/>
                    </svg>

                    <address class="map__address">
                        Quai Gloesner, 6<br>
                        4020 - Liège<br>
                        Belgique
                    </address>
                </div>
            </div>
            </div>
            <div class="map__canvas" id="map__canvas" data-url="https://goo.gl/maps/F6DqSzVe3HC2" data-map-lat="50.6206482" data-map-lgt="5.581290299999978"></div>

            <script async defer
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCuE1aAL7WbDtG7mQ94AfUNaRay-tR_5Sk">
            </script>

        </div>
    </section>
    <section class="insBottom">
        <h2 role="heading" aria-level="2" class="insBottom__title">Besoin d’informations supplémentaire ?</h2>
        <section class="insDossier">
            <section class="insHelp">
                <div class="insHelp__wrapper">
                    <h3 role="heading" aria-level="3" class="insHelp__title">Besoin d’aide&nbsp;?</h3>
                    <p class="insHelp__paragraph">Pour des informations supplémentaire, vous pouvez contacter le secrétariat des étudiants via les informations ci-dessous.</p>
                    <a href="tel:085211113" class="insHelp__tel">085 21 11 13</a>
                    <a href="mailto:info@hepl.be" class="insHelp__email">secretariat@hepl.be</a>

                    <strong class="insHelp__subtitle">Viens nous rencontrer</strong>
                    <p class="insHelp__paragraph">Chaque année, nous organisons une <a href="#">journée porte ouverte</a> aux alentours du XX/XX/XX ainsi que deux <a href="#">journée d’immersion</a>. Pour rester informé, visites régulièrement ce site ou <a href="#">contacte nous</a>.</p>
                </div>
            </section>
            <div class="insDossier__wrapper">
                <h3 role="heading" aria-level="2" class="insDossier__title">Constitution du dossier d’inscription de première année</h3>
                <p class="insDossier__paragraph">De manière à pouvoir récupérer les différentes données qui y sont stockées, nous vous invitons à vous présenter, au moment de votre inscription, muni de votre <b>carte d'identité électronique.</b></p>
                <p class="insDossier__paragraph">Les autres documents à fournir pour constituer votre dossier d'inscription varient selon les circonstances.</p>
                <p class="insDossier__paragraph">Un <b>bulletin de versement</b> vous sera remis au moment de l'inscription. Le paiement du droit d'inscription est un des éléments conditionnant la régularité de votre inscription.
                </p>
                <p class="insDossier__paragraph">Par ailleurs, si vous n'avez pas suivi vos études en Fédération Wallonie-Bruxelles, le Service Inscriptions vous dira, sur base de l'analyse de votre dossier, si vous devez ou non présenter l'examen de maîtrise suffisante de la langue française.
                </p>
            </div>
        </section>
    </section>

@endsection
