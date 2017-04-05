@extends('layout')

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
    </section>







@endsection

