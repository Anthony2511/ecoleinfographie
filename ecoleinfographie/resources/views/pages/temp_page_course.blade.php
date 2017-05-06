@extends('layout')

@section('title', $page->title)

@section('header')
    @include('partials.header-min')
@endsection

@section('content')
    @include('partials.breadcrumb')

    <section class="course">
        <div class="course__container-top">
            <div class="course-card">
                <div class="course-card__image-container">
                    {{--<img class="course-card__image" src="./img/course-img.jpg" width="1000" height="500" alt="Image de lignes de code CSS">--}}
                </div>
                <div class="course-card__content">
                    <h2 role="heading" aria-level="2" class="course-card__title">Créations de pages web - <abbr title="Cascading Styles Sheet">CSS</abbr></h2>

                    <span class="course-card__hour">60 heures</span>
                    <span class="course-card__credits">5 credits <abbr title="Système européen de transfert et d’accumulation de crédits">ECTS</abbr></span>

                    <ul class="course-card__org">
                        <li class="course-card__org__item">
                            <span class="course-card__org__text">Travaux dirigés - 30h</span>
                        </li>
                        <li class="course-card__org__item">
                            <span class="course-card__org__text">Travaux pratique - 30h</span>
                        </li>
                    </ul>

                    <span class="course-card__eval-title">Évaluation&nbsp;:</span>
                    <ul class="course-card__eval">
                        <li class="course-card__eval__item">Examen écrit</li>
                        <li class="course-card__eval__item">Examen pratique</li>
                        <li class="course-card__eval__item">Évaluation continue</li>
                    </ul>

                    <span class="course-card__bloc">Cours du bloc 1<small> (première année)</small></span>
                    <span class="course-card__bloc">Dispensé en 1<sup>er</sup> quadrimestre<small> (de septembre à décembre)</small></span>
                </div>

            </div>
            <section class="course-description">
                <h3 role="heading" aria-level="3" class="course-description__title">Description du cours</h3>
                <p class="course-description__paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non viverra nisl. Cras bibendum euismod scelerisque. Nam ornare est pretium dignissim auctor. Integer ante risus, lobortis egestas accumsan eget, tincidunt eu nisl. Cras cursus suscipit nunc, a tempus magna accumsan quis. Suspendisse ultrices nisl iaculis pellentesque volutpat.</p>
                <p class="course-description__paragraph">Vestibulum feugiat nibh et egestas dignissim. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur fringilla vel elit quis interdum. Suspendisse sed rutrum orci. In lacus metus, blandit condimentum dictum eget, varius at arcu. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto eveniet illum inventore ipsum iure! Ab accusantium alias corporis eveniet ex expedita impedit, odio optio porro possimus qui rem sit vel.</p>

            </section>
        </div>
        <section class="course-obj">
            <div class="course-obj__wrapper">
                <h3 role="heading" aria-level="3" class="course-obj__title">Objectifs du cours</h3>
                <ul class="course-obj__list">
                    <li class="course-obj__item">Apprendre les outils et les techniques de programmation intervenant dans la réalisation de sites Web dynamiques (côté client). </li>
                    <li class="course-obj__item">Être capable d’écrire des feuilles de style pour des pages HTML.</li>
                    <li class="course-obj__item">Comprendre les fondements du rendu des CSS par un moteur de rendu.</li>
                    <li class="course-obj__item">Maîtriser les concepts de base des CSS.</li>
                </ul>
            </div>
        </section>
        <section class="course-teachers">
            <h3 role="heading" aria-level="3" class="course-teachers__title">Les professeurs</h3>
            <ul class="course-teachers__list">
                <li class="course-teachers__item">
                    <a href="dominique-vilain" class="card_student">
                        <figure class="card_student__figure">
                            <div class="card_student__picture-wrapper">
                                <img class="card_student__picture" src="./img/kevin-dessouroux.jpg" width="350" height="200" alt="#" >
                            </div>
                            <figcaption class="card_student__figcaption">
                                <strong class="card_student__name">
                                    Dominique <span>Vilain</span>
                                </strong>
                                <span class="card_student__profession">
                                    Professeur en web
                                </span>
                            </figcaption>
                        </figure>
                        <div class="card_student__fake-link">
                            <span class="card_student__fake-link__text">Voir sa fiche</span>
                        </div>
                    </a>
                </li>
                <li class="course-teachers__item">
                    <a href="dominique-vilain" class="card_student">
                        <figure class="card_student__figure">
                            <div class="card_student__picture-wrapper">
                                <img class="card_student__picture" src="./img/kevin-dessouroux.jpg" width="350" height="200" alt="#" >
                            </div>
                            <figcaption class="card_student__figcaption">
                                <strong class="card_student__name">
                                    Dominique <span>Vilain</span>
                                </strong>
                                <span class="card_student__profession">
                                    Professeur en web
                                </span>
                            </figcaption>
                        </figure>
                        <div class="card_student__fake-link">
                            <span class="card_student__fake-link__text">Voir sa fiche</span>
                        </div>
                    </a>
                </li>
                <li class="course-teachers__item">
                    <a href="dominique-vilain" class="card_student">
                        <figure class="card_student__figure">
                            <div class="card_student__picture-wrapper">
                                <img class="card_student__picture" src="./img/kevin-dessouroux.jpg" width="350" height="200" alt="#" >
                            </div>
                            <figcaption class="card_student__figcaption">
                                <strong class="card_student__name">
                                    Dominique <span>Vilain</span>
                                </strong>
                                <span class="card_student__profession">
                                    Professeur en web
                                </span>
                            </figcaption>
                        </figure>
                        <div class="card_student__fake-link">
                            <span class="card_student__fake-link__text">Voir sa fiche</span>
                        </div>
                    </a>
                </li>
                <li class="course-teachers__item">
                    <a href="dominique-vilain" class="card_student">
                        <figure class="card_student__figure">
                            <div class="card_student__picture-wrapper">
                                <img class="card_student__picture" src="./img/kevin-dessouroux.jpg" width="350" height="200" alt="#" >
                            </div>
                            <figcaption class="card_student__figcaption">
                                <strong class="card_student__name">
                                    Dominique <span>Vilain</span>
                                </strong>
                                <span class="card_student__profession">
                                    Professeur en web
                                </span>
                            </figcaption>
                        </figure>
                        <div class="card_student__fake-link">
                            <span class="card_student__fake-link__text">Voir sa fiche</span>
                        </div>
                    </a>
                </li>


                <!-- TODO : En PHP, compter le nombre d’anciens étudiants avec un modulo, si le nombre de li%3 == 2, ajouter un li vide, sinon rien
                <li class="former-students__item" style="width: 19.6875em"></li>-->

            </ul>
        </section>
    </section>







@endsection

