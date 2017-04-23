@extends('layout')

@section('header')
    @include('partials.header-min')
@endsection

@section('content')
    @include('partials.breadcrumb')

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
            <h2 role="heading" aria-level="2" class="insLocation__title">Quand puis-je m’inscrire et à quel endroit ?</h2>
            <div class="insLocation__when">
                <strong class="insLocation__when__title">Quand&nbsp;?</strong>
                <p class="insLocation__paragraph">Vivamus elementum sapien vitae erat efficitur faucibus ? Pellentesque sed leo blandit, pulvinar leo sed, scelerisque arcu. Sed bibendum consectetur viverra. </p>
            </div>
            <div class="insLocation__where">
                <img src="./img/map-inscription.png" width="" height="" alt="">
                <div class="insLocation__where__textWrapper">
                    <strong class="insLocation__where__title">À quel endroit&nbsp;?</strong>
                    <p class="insLocation__paragraph">Afin de compléter votre inscription, vous devez vous rendre à l’adresse indiquée ci-dessous.</p>
                    <p class="insLocation__paragraph"><b>Attention&nbsp;:</b> Ce n’est pas l’adresse de l’école</p>
                    <div class="insLocation__where__addressWrapper">

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 35">
                            <path fill="#4990E2" fill-rule="evenodd" d="M11 .02C4.92.02 0 4.9 0 10.94 0 21.38 11 35 11 35s11-13.62 11-24.07C22 4.9 17.08.03 11 .03zm0 16.95c-3.28 0-5.94-2.64-5.94-5.9 0-3.26 2.66-5.9 5.94-5.9 3.28 0 5.94 2.64 5.94 5.9 0 3.26-2.66 5.9-5.94 5.9z"/>
                        </svg>

                        <address class="insLocation__where__address">
                            Quai Gloesner, 6</br>
                            4020 - Liège</br>
                            Belgique
                        </address>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="insBottom">
        <h2 role="heading" aria-level="2" class="insBottom__title">Besoin d’informations supplémentaire ?</h2>
        <section class="insDossier">
            <div class="insDossier__wrapper">
                <h3 role="heading" aria-level="2" class="insDossier__title">Constitution du dossier d’inscription de première année</h3>
                <p class="insDossier__paragraph">De manière à pouvoir récupérer les différentes données qui y sont stockées, nous vous invitons à vous présenter, au moment de votre inscription, muni de votre <b>carte d'identité électronique.</b></p>
                <p class="insDossier__paragraph">Les autres documents à fournir pour constituer votre dossier d'inscription varient selon les circonstances.</p>
                <p class="insDossier__paragraph">Un <b>bulletin de versement</b> vous sera remis au moment de l'inscription. Le paiement du droit d'inscription est un des éléments conditionnant la régularité de votre inscription.
                </p>
                <p class="insDossier__paragraph">Par ailleurs, si vous n'avez pas suivi vos études en Fédération Wallonie-Bruxelles, le Service Inscriptions vous dira, sur base de l'analyse de votre dossier, si vous devez ou non présenter l'examen de maîtrise suffisante de la langue française.
                </p>
            </div>
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
        </section>
    </section>

@endsection
