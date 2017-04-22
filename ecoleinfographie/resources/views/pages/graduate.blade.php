@extends('layout')
@section('header')
    @include('partials.header-min')
@endsection

@section('content')
    @include('partials.breadcrumb')


    <section class="graduateList">
        <h2 role="heading" aria-level="2" class="graduateList__title">Nos anciens diplômés</h2>

        <ul class="index-rea__filter">
            <li class="index-rea__filter__item active">
                <a href="#tous" class="index-rea__filter__link">Tous</a>
            </li>
            <li class="index-rea__filter__item">
                <a href="#3D" class="index-rea__filter__link">3D/Vidéo</a>
            </li>
            <li class="index-rea__filter__item">
                <a href="#dg" class="index-rea__filter__link">Design graphique</a>
            </li>
            <li class="index-rea__filter__item">
                <a href="#web" class="index-rea__filter__link">Web</a>
            </li>
        </ul>


        <ul class="former-students__list">
            <li class="former-students__item">
                <div class="card_student">
                    <figure class="card_student__figure">
                        <div class="card_student__picture-wrapper">
                            <img class="card_student__picture" src="./img/kevin-dessouroux.jpg" width="350" height="200" alt="#" >
                        </div>
                        <figcaption class="card_student__figcaption">
                            <strong class="card_student__name">
                                Kévin <span>Dessouroux</span>
                            </strong>
                            <span class="card_student__year">
                                Diplômé en 2015
                            </span>
                            <span class="card_student__profession">
                                En design graphique
                            </span>
                        </figcaption>
                    </figure>
                </div>
            </li>
            <li class="former-students__item">
                <div href="les-metiers-du-web-kevin-dessouroux" class="card_student">
                    <figure class="card_student__figure">
                        <div class="card_student__picture-wrapper">
                            <img class="card_student__picture" src="./img/men2.jpg" width="350" height="200" alt="#" >
                        </div>
                        <figcaption class="card_student__figcaption">
                            <strong class="card_student__name">
                                Calvin <span>Wade</span>
                            </strong>
                            <span class="card_student__year">
                                En web
                            </span>
                            <span class="card_student__profession">
                                Développeur front-end
                            </span>
                        </figcaption>
                    </figure>
                    {{--<div class="card_student__fake-link">
                        <span class="card_student__fake-link__text">Voir son portfolio</span>
                    </div>--}}
                </div>
            </li>
            <li class="former-students__item">
                <div class="card_student">
                    <figure class="card_student__figure">
                        <div class="card_student__picture-wrapper">
                            <img class="card_student__picture" src="./img/kevin-dessouroux.jpg" width="350" height="200" alt="#" >
                        </div>
                        <figcaption class="card_student__figcaption">
                            <strong class="card_student__name">
                                Kévin <span>Dessouroux</span>
                            </strong>
                            <span class="card_student__year">
                                Diplômé en 2015
                            </span>
                            <span class="card_student__profession">
                                En design graphique
                            </span>
                        </figcaption>
                    </figure>
                </div>
            </li>
            <li class="former-students__item">
                <div href="les-metiers-du-web-kevin-dessouroux" class="card_student">
                    <figure class="card_student__figure">
                        <div class="card_student__picture-wrapper">
                            <img class="card_student__picture" src="./img/men2.jpg" width="350" height="200" alt="#" >
                        </div>
                        <figcaption class="card_student__figcaption">
                            <strong class="card_student__name">
                                Calvin <span>Wade</span>
                            </strong>
                            <span class="card_student__year">
                                En web
                            </span>
                            <span class="card_student__profession">
                                Développeur front-end
                            </span>
                        </figcaption>
                    </figure>
                    {{--<div class="card_student__fake-link">
                        <span class="card_student__fake-link__text">Voir son portfolio</span>
                    </div>--}}
                </div>
            </li>
            <li class="former-students__item">
                <div class="card_student">
                    <figure class="card_student__figure">
                        <div class="card_student__picture-wrapper">
                            <img class="card_student__picture" src="./img/men3.jpg" width="350" height="200" alt="#" >
                        </div>
                        <figcaption class="card_student__figcaption">
                            <strong class="card_student__name">
                                Frank <span>Sinatra</span>
                            </strong>
                            <span class="card_student__year">
                                Diplômé en 2015
                            </span>
                            <span class="card_student__profession">
                                Développeur front-end
                            </span>
                        </figcaption>
                    </figure>
            </div>
            </li>
            <li class="former-students__item">
                <div class="card_student">
                    <figure class="card_student__figure">
                        <div class="card_student__picture-wrapper">
                            <img class="card_student__picture" src="./img/kevin-dessouroux.jpg" width="350" height="200" alt="#" >
                        </div>
                        <figcaption class="card_student__figcaption">
                            <strong class="card_student__name">
                                Kévin <span>Dessouroux</span>
                            </strong>
                            <span class="card_student__year">
                                Diplômé en 2015
                            </span>
                            <span class="card_student__profession">
                                En design graphique
                            </span>
                        </figcaption>
                    </figure>
                </div>
            </li>
            <li class="former-students__item">
                <div href="les-metiers-du-web-kevin-dessouroux" class="card_student">
                    <figure class="card_student__figure">
                        <div class="card_student__picture-wrapper">
                            <img class="card_student__picture" src="./img/men2.jpg" width="350" height="200" alt="#" >
                        </div>
                        <figcaption class="card_student__figcaption">
                            <strong class="card_student__name">
                                Calvin <span>Wade</span>
                            </strong>
                            <span class="card_student__year">
                                En web
                            </span>
                            <span class="card_student__profession">
                                Développeur front-end
                            </span>
                        </figcaption>
                    </figure>
                    {{--<div class="card_student__fake-link">
                        <span class="card_student__fake-link__text">Voir son portfolio</span>
                    </div>--}}
                </div>
            </li>
            <li class="former-students__item">
                <div class="card_student">
                    <figure class="card_student__figure">
                        <div class="card_student__picture-wrapper">
                            <img class="card_student__picture" src="./img/kevin-dessouroux.jpg" width="350" height="200" alt="#" >
                        </div>
                        <figcaption class="card_student__figcaption">
                            <strong class="card_student__name">
                                Kévin <span>Dessouroux</span>
                            </strong>
                            <span class="card_student__year">
                                Diplômé en 2015
                            </span>
                            <span class="card_student__profession">
                                En design graphique
                            </span>
                        </figcaption>
                    </figure>
                </div>
            </li>
            <li class="former-students__item">
                <div class="card_student">
                    <figure class="card_student__figure">
                        <div class="card_student__picture-wrapper">
                            <img class="card_student__picture" src="./img/kevin-dessouroux.jpg" width="350" height="200" alt="#" >
                        </div>
                        <figcaption class="card_student__figcaption">
                            <strong class="card_student__name">
                                Kévin <span>Dessouroux</span>
                            </strong>
                            <span class="card_student__year">
                                Diplômé en 2015
                            </span>
                            <span class="card_student__profession">
                                En design graphique
                            </span>
                        </figcaption>
                    </figure>
                </div>
            </li>
        </ul>

    </section>

@endsection
