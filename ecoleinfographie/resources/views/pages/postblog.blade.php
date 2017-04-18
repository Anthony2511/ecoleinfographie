@extends('layout')

@section('header')
    @include('partials.header-min')
@endsection

@section('content')
    @include('partials.breadcrumb')


    <div class="blogArticle__container">
        <article class="blogArticle" itemscope itemtype="http://schema.org/BlogPosting">
            <meta itemscope itemprop="mainEntityOfPage"  itemType="https://schema.org/WebPage">


            <header>
                <h2 role="heading" aria-level="2" class="blogArticle__title" itemprop="headline">Automatisez votre workflow avec Grunt</h2>

                <div class="blogArticle__informations">
                    <span class="blogArticle__author" itemprop="author" itemscope itemtype="https://schema.org/Person">
                        <img src="./img/blog-author-30x30.jpg" width="30" height="30" alt="" class="blogArticle__author-img">
                        <span class="preposition">Par</span>
                        <a href="#goAuthor" class="name" itemprop="name url">Dominique Vilain</a>
                    </span>

                    <span class="blogArticle__pubdate">
                        <span class="preposition"> le</span>
                        <time class="time" datetime="2017-10-08">08 octobre 2017</time>
                    </span>

                    <span class="blogArticle__category">
                        <span class="preposition"> dans </span>
                        <a href="#GoCategory" class="blogArticle__category-link" itemprop="articleSection">Tutoriels (Web)</a>
                    </span>
                </div>

                <p class="blogArticle__description" itemprop="description">Grunt est simplement un JavaScript Task Runner, un outil vous permettant de créer des tâches automatisées en JavaScript. Forcément ce n'est pas très parlant mais c'est tout l'intérêt de cet article.</p>
            </header>

            <div class="blogArticle__body" itemprop="articleBody">
                <section class="blogArticle__section">
                    <h3 role="heading" aria-level="3" class="blogArticle__title">Sous-titre de l’article</h3>
                    <p class="blogArticle__paragraph">Vous avez sûrement déjà entendu parler de Grunt à droite à gauche, en conférence, voire votre boite l'utilise déjà mais vous ne savez toujours pas trop ce qui se cache derrière ce terme saugrenu digne d'un personnage de Warcraft. Soit, ce n'est pas bien grave.
                    </p>
                    <p class="blogArticle__paragraph">Vous est-il déjà arrivé de devoir régulièrement lancer, lancer et relancer des processus tels que Sass, LESS, uglify - en somme des préprocesseurs ou des minifiers - régulièrement à la main ? N'est-ce pas pénible ? N'est-ce pas aussi pénible de devoir indiquer à tous ses collègues comment ils doivent bosser pour que vous soyez tous cohérents ? Oui ? Grunt permet de résoudre ce genre de choses : respecter un putain de workflow en s'assurant que le parcours soit le même pour tout le monde et d'exécuter tout ça en lançant une seule commande. N'est-ce pas fucking aweeeeesome dude ? Bref
                    </p>
                    <p class="blogArticle__paragraph">Nulla ut nibh quis ligula consequat porta. Suspendisse auctor orci urna, sit amet pulvinar magna mattis pellentesque. Cras vitae iaculis mi. In elit leo, vestibulum eu leo vel, tincidunt hendrerit erat. Cras commodo, urna sed consequat consectetur, lacus orci congue ante, ac fringilla mi lorem ac lectus. Donec vestibulum tempor velit sit amet lacinia. In non est pharetra, porta erat vitae, fermentum erat. Sed gravida, est vel hendrerit facilisis, libero orci varius massa, vel viverra nisl purus accumsan justo.
                    </p>

                    <figure class="blogArticle__figure">
                        <img src="./img/blog-img.jpg" width="736" height="414" alt="" class="blogArticle__figure__img">
                        <figcaption class="blogArticle__figcaption">
                            Donec consequat sit amet ante ultrices molestie. Maecenas ipsum eros, tincidunt eu suscipit id, rhoncus eu quam. Donec vulputate eros eu tincidunt fringilla.
                        </figcaption>
                    </figure>

                    <p class="blogArticle__paragraph">Nulla ut nibh quis ligula consequat porta. Suspendisse auctor orci urna, sit amet pulvinar magna mattis pellentesque. Cras vitae iaculis mi. In elit leo, vestibulum eu leo vel, tincidunt hendrerit erat. Cras commodo, urna sed consequat consectetur, lacus orci congue ante, ac fringilla mi lorem ac lectus. Donec vestibulum tempor velit sit amet lacinia. In non est pharetra, porta erat vitae, fermentum erat. Sed gravida, est vel hendrerit facilisis, libero orci varius massa, vel viverra nisl purus accumsan justo.
                    </p>
                </section>

                <section class="blogArticle__section">
                    <h3 role="heading" aria-level="3" class="blogArticle__title">Sous-titre de l’article</h3>
                    <p class="blogArticle__paragraph">
                        Duis elementum lorem id quam hendrerit lobortis. Aliquam iaculis dictum sagittis. Quisque molestie orci ut quam maximus placerat. Donec diam ante, venenatis non elit eu, mollis interdum lectus. Quisque semper tincidunt ante, in fringilla tortor aliquet a. Nam blandit, elit eget fringilla commodo, purus quam vulputate leo, eget euismod ligula lectus at velit. Cras faucibus accumsan pharetra. Mauris eros lacus, porttitor non pulvinar vel, rhoncus et velit. Phasellus egestas tortor lacus, ut blandit magna iaculis sed.
                    </p>

                    <blockquote class="blogArticle__blockquote">
                        <div class="blogArticle__blockquote__text">Cras pharetra leo nisi, eget facilisis odio rhoncus nec. Vestibulum pretium, erat finibus maximus rutrum, lectus orci iaculis sapien, at fermentum leo felis.</div>
                    </blockquote>

                    <p class="blogArticle__paragraph">
                        Ut et vehicula enim. Nulla sodales metus eu tellus aliquam consectetur. Phasellus eget enim sed risus rhoncus porttitor. Morbi vitae vulputate quam. Donec iaculis, nisi eget posuere iaculis, est elit bibendum orci, eget efficitur ex lacus id nulla.
                    </p>

                    <p class="blogArticle__paragraph">
                        Aliquam sollicitudin, justo in iaculis porttitor, libero ante eleifend ante, et luctus enim elit quis magna. Nullam hendrerit est purus, quis porttitor neque consectetur eget. Ut faucibus nunc vitae est porta rhoncus. Morbi a quam sed sapien facilisis sagittis.
                    </p>
                </section>
            </div>

            <footer class="footerArticle">
                <div class="footerArticle__author">
                    <img src="./img/blog-author-30x30.jpg" width="63" height="63" alt="">
                    <span class="footerArticle__author__name">Écrit par <a href="#goAuthor">Dominique Vilain</a></span>
                    <small class="footerArticle__author__role">Professeur en web</small>

                    <div class="footerArticle__follow">
                        <span class="footerArticle__follow__label">Suivre sur&nbsp;: </span>
                        <ul class="footerArticle__follow__list">
                            <li class="footerArticle__follow__item"><a href="#goSocialDOM" class="footerArticle__follow__link footerArticle__follow__link--facebook"><span>Facebook</span></a></li>
                            <li class="footerArticle__follow__item"><a href="#goSocialDOM" class="footerArticle__follow__link footerArticle__follow__link--twitter"><span>Twitter</span></a></li>
                        </ul>
                    </div>
                </div>

                <div class="footerArticle__sharer">
                    <span class="footerArticle__sharer__label-top">Cet article t’as plût&nbsp;?</span>
                    <strong class="footerArticle__sharer__label-bottom">Partages-le&nbsp;!</strong>
                    <ul class="footerArticle__sharer__list">
                        <li class="footerArticle__sharer__item"><a href="#social" class="footerArticle__sharer__link footerArticle__sharer__link--facebook"><span>Partager sur Facebook</span></a></li>
                        <li class="footerArticle__sharer__item"><a href="#social" class="footerArticle__sharer__link footerArticle__sharer__link--twitter"><span>Partager sur Twitter</span></a></li>
                        <li class="footerArticle__sharer__item"><a href="#social" class="footerArticle__sharer__link footerArticle__sharer__link--pinterest"><span>Partager sur Pinterest</span></a></li>
                    </ul>
                </div>

                <div class="footerArticle__like">
                    <a href="#" class="fav" id="fav">
                        <svg class="stableHeart" viewBox="-1 0 18 15">
                            <defs>
                                <path d="M16 4.872c0-4.9-6.894-5.8-8 .695C6.81-.928 0-.027 0 5.25c0 5.274 8 9.697 8 9.697s8-5.177 8-10.075z" id="heartPath"></path>
                            </defs>
                            <use xlink:href="#heartPath" />
                        </svg>
                        <svg class="floatHeart" viewBox="-1 0 18 15">
                            <use xlink:href="#heartPath" />
                        </svg>
                    </a>
                    <span class="footerArticle__like__counter">14 j’aime</span>
                </div>

            </footer>

            <meta itemprop="datePublished" content="2015-02-05T08:00:00+08:00"/>
            <meta itemprop="dateModified" content="2015-02-05T09:20:00+08:00"/>
        </article>

        @include('partials.blog.aside');
    </div>







@endsection

