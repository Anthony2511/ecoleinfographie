@extends('layout')

@section('header')
    @include('partials.header-min')
@endsection

@section('content')
    @include('partials.breadcrumb')
    <div class="prof__container">
        <section class="prof">
            <div class="prof__top-container">
                <div class="prof__left">
                    <figure class="prof__figure">
                        <img src="./img/blog-author-30x30.jpg" width="295" height="281" alt="" class="prof__img">
                    </figure>
                    <a href="mailto:dominique.vilain@hepl.be" class="prof__email"><span class="prof__email__label">Contacter par email <span class="prof__email__hidden">Dominique Vilain</span></span></a>

                    <ul class="social-list-circle">
                        <li class="social-list-circle__item">
                            <a href="" class="social-list-circle__link facebook" rel="me"><span>Vers le Facebook de Kévin Dessouroux</span></a>
                        </li><!--
                    --><li class="social-list-circle__item">
                            <a href="" class="social-list-circle__link twitter" rel="me"><span>Vers le Facebook de Kévin Dessouroux</span></a>
                        </li><!--
                    --><li class="social-list-circle__item">
                            <a href="" class="social-list-circle__link pinterest" rel="me"><span>Vers le Facebook de Kévin Dessouroux</span></a>
                        </li><!--
                    --></ul>

                </div>
                <div class="prof__right">
                    <h2 role="heading" aria-level="2" class="prof__title"><span>Le profile de </span>Dominique Vilain</h2>
                    <span class="prof__role">Professeur</span>
                    <p class="prof__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In lacus odio, sagittis sit amet justo vel, pharetra accumsan felis. Cras ac euismod nunc. Mauris sed arcu tellus. Mauris volutpat mattis eros. Praesent iaculis neque mi, ac vehicula metus laoreet eu. Phasellus auctor, mauris eu suscipit faucibus, eros quam sagittis massa, eu convallis lacus sapien sit amet libero. </p>
                </div>
            </div>
            <section class="profCourse">
                <h3 role="heading" aria-level="3" class="profCourse__title">Ses cours</h3>
                <ul class="profCourse__list">
                    <li class="profCourse__item">
                        <a href="#course" class="profCourse__link">Design web (Bloc 1)</a>
                    </li>
                    <li class="profCourse__item">
                        <a href="#course" class="profCourse__link">Programmation côté serveur (Bloc 2)</a>
                    </li>
                    <li class="profCourse__item">
                        <a href="#course" class="profCourse__link">Projets web (Bloc 3)</a>
                    </li>
                </ul>
            </section>
            <section class="profArticles">
                <h3 role="heading" aria-level="3" class="profArticles__title">Ses articles publiés</h3>

                <article class="blog-card">
                    <a href="un-article-de-blog" class="blog-card__go-article"><span>Lire l’article NOM ARTICLE</span></a>
                    <header class="blog-card__header">
                        <a href="#category" class="blog-card__category blog-card__category--web">Web</a>
                        <img src="./img/blog-img-min1.jpg" width="358" height="264" alt="" class="blog-card__img">
                    </header>
                    <h3 role="heading" aria-level="3" class="blog-card__title">95% des intégrateurs écrivent mal leurs titres</h3>
                    <footer class="blog-card__footer">
                        <a href="#author" class="blog-card__author" rel=author>
                            <img src="./img/blog-author-30x30.jpg" width="30" height="30" alt="" class="blog-card__author__img">
                            <span class="blog-card__author__name">
                                Par
                                <span class="blog-card__author__name--hidden">Voir le profile de </span>
                                <span class="blog-card__author__name--container">
                                    <span class="blog-card__author__name--name">Dominique Vilain</span>
                                </span>
                            </span>
                        </a>
                        <a href="#comments" class="blog-card__comments">
                            <span class="blog-card__comments__number">5</span>
                            <span class="blog-card__comments__hidden"> commentaires à voir sur l’article NOM ARTICLE</span>
                        </a>
                    </footer>

                </article>
                <article class="blog-card">
                    <a href="un-article-de-blog" class="blog-card__go-article"><span>Lire l’article NOM ARTICLE</span></a>
                    <header class="blog-card__header">
                        <a href="#category" class="blog-card__category blog-card__category--2D">Design graphique</a>
                        <img src="./img/blog-img-min2.jpg" width="358" height="264" alt="" class="blog-card__img">
                    </header>
                    <h3 role="heading" aria-level="3" class="blog-card__title">Lorem ipsum dolor sit amet</h3>
                    <footer class="blog-card__footer">
                        <a href="#author" class="blog-card__author" rel=author>
                            <img src="./img/blog-author-30x30.jpg" width="30" height="30" alt="" class="blog-card__author__img">
                            <span class="blog-card__author__name">
                                Par
                                <span class="blog-card__author__name--hidden">Voir le profile de </span>
                                <span class="blog-card__author__name--container">
                                    <span class="blog-card__author__name--name">Maëlle Vivegnis</span>
                                </span>
                            </span>
                        </a>
                        <a href="#comments" class="blog-card__comments">
                            <span class="blog-card__comments__number">5</span>
                            <span class="blog-card__comments__hidden"> commentaires à voir sur l’article NOM ARTICLE</span>
                        </a>
                    </footer>

                </article>
                <article class="blog-card">
                    <a href="un-article-de-blog" class="blog-card__go-article"><span>Lire l’article NOM ARTICLE</span></a>
                    <header class="blog-card__header">
                        <a href="#category" class="blog-card__category blog-card__category--3D">3D/Vidéo</a>
                        <img src="./img/blog-img-min3.jpg" width="358" height="264" alt="" class="blog-card__img">
                    </header>
                    <h3 role="heading" aria-level="3" class="blog-card__title">Hidrim asu elt artec indu moro stigma</h3>
                    <footer class="blog-card__footer">
                        <a href="#author" class="blog-card__author" rel=author>
                            <img src="./img/blog-author-30x30.jpg" width="30" height="30" alt="" class="blog-card__author__img">
                            <span class="blog-card__author__name">
                                Par
                                <span class="blog-card__author__name--hidden">Voir le profile de </span>
                                <span class="blog-card__author__name--container">
                                    <span class="blog-card__author__name--name">Nicolas Claisse</span>
                                </span>
                            </span>
                        </a>
                        <a href="#comments" class="blog-card__comments">
                            <span class="blog-card__comments__number">5</span>
                            <span class="blog-card__comments__hidden"> commentaires à voir sur l’article NOM ARTICLE</span>
                        </a>
                    </footer>

                </article>
            </section>
        </section>

    </div>

@endsection

