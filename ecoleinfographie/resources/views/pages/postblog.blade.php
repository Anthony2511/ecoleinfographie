@extends('layout')

@section('header')
    @include('partials.header-min')
@endsection

@section('content')
    @include('partials.breadcrumb')


    <div class="blogArticle__container">
        <article class="blogArticle" itemscope itemtype="http://schema.org/BlogPosting">
            <meta itemscope itemprop="mainEntityOfPage"  itemType="https://schema.org/WebPage">


            <header class="blogArticle__header">
                <h2 role="heading" aria-level="2" class="blogArticle__title" itemprop="headline">Automatisez votre workflow avec Grunt</h2>

                <div class="blogArticle__informations">
                    <a href="#goAuthor" class="blogArticle__author" itemprop="author" itemscope itemtype="https://schema.org/Person">
                        <img src="./img/blog-author-30x30.jpg" width="30" height="30" alt="" class="blogArticle__author__img">
                        <span class="preposition">Par</span>
                        <span  class="blogArticle__author__name" itemprop="name url">Dominique Vilain</span>
                    </a>

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
                    <h3 role="heading" aria-level="3" class="blogArticle__subtitle">Sous-titre de l’article</h3>
                    <p class="blogArticle__paragraph">Vous avez sûrement déjà entendu parler de Grunt à droite à gauche, en conférence, voire votre boite l'utilise déjà mais vous ne savez toujours pas trop ce qui se cache derrière ce terme saugrenu digne d'un personnage de Warcraft. Soit, ce n'est pas bien grave.
                    </p>
                    <p class="blogArticle__paragraph">Vous est-il déjà arrivé de devoir régulièrement lancer, lancer et relancer des processus tels que <a class="blogArticle__link">Sass</a>, <a class="blogArticle__link">LESS</a>, <a class="blogArticle__link">uglify</a> - <i>en somme des préprocesseurs ou des minifiers</i> - régulièrement à la main ? N'est-ce pas pénible ? N'est-ce pas aussi pénible de devoir indiquer à tous ses collègues comment ils doivent bosser pour que vous soyez tous cohérents ? Oui ? <b>Grunt permet de résoudre ce genre de choses</b> :</p>

                    <ul class="blogArticle__list">
                        <li class="blogArticle__item">Respecter un putain de workflow en s'assurant que le parcours soit le même pour tout le monde et vice-versa.</li>
                        <li class="blogArticle__item">Exécuter tout ça en lançant une seule commande.</li>
                    </ul>

                    <p class="blogArticle__paragraph">N'est-ce pas fucking aweeeeesome dude ? Bref</p>
                    <p class="blogArticle__paragraph">Nulla ut nibh quis ligula consequat porta. Suspendisse auctor orci urna, sit amet pulvinar magna mattis pellentesque. Cras vitae iaculis mi. <i>In elit leo, vestibulum eu leo vel, tincidunt hendrerit erat</i>. Cras commodo, urna sed consequat consectetur, lacus orci congue ante, ac fringilla mi lorem ac lectus. Donec vestibulum tempor velit sit amet lacinia. In non est pharetra, porta erat vitae, fermentum erat. Sed gravida, est vel hendrerit facilisis, libero orci varius massa, vel viverra nisl purus accumsan justo.
                    </p>

                    <figure class="blogArticle__figure">
                        <img src="./img/blog-img.jpg" width="736" height="414" alt="" class="blogArticle__figure__img">
                        <figcaption class="blogArticle__figcaption">
                            Donec consequat sit amet ante ultrices molestie. Maecenas ipsum eros, tincidunt eu suscipit id, rhoncus eu quam. Donec vulputate eros eu tincidunt fringilla.
                        </figcaption>
                    </figure>

                    <p class="blogArticle__paragraph">Nulla ut nibh quis ligula consequat porta. Suspendisse auctor orci urna, sit amet pulvinar magna mattis pellentesque. Cras vitae iaculis mi. In elit leo, vestibulum eu leo vel, tincidunt hendrerit erat. <a class="blogArticle__link">Cras commodo, urna sed consequat</a> consectetur, lacus orci congue ante, ac fringilla mi lorem ac lectus. Donec vestibulum tempor velit sit amet lacinia. In non est pharetra, porta erat vitae, fermentum erat. Sed gravida, est vel hendrerit facilisis, libero orci varius massa, vel viverra nisl purus accumsan justo.
                    </p>
                </section>

                <section class="blogArticle__section">
                    <h3 role="heading" aria-level="3" class="blogArticle__subtitle">Sous-titre de l’article</h3>
                    <p class="blogArticle__paragraph">
                        Duis elementum lorem id quam hendrerit lobortis. Aliquam iaculis dictum sagittis. Quisque molestie orci ut quam maximus placerat. Donec diam ante, venenatis non elit eu, mollis interdum lectus. Quisque semper tincidunt ante, in fringilla tortor <b>aliquet a. Nam blandit, elit eget fringilla commodo, purus quam vulputate leo, eget euismod ligula lectus at velit</b>. Cras faucibus accumsan pharetra. Mauris eros lacus, porttitor non pulvinar vel, rhoncus et velit. Phasellus egestas tortor lacus, ut blandit magna iaculis sed.
                    </p>

                    <blockquote class="blogArticle__blockquote">
                        <p class="blogArticle__blockquote__text">Cras pharetra leo nisi, eget facilisis odio rhoncus nec. Vestibulum pretium, erat finibus maximus rutrum, lectus orci iaculis sapien, at fermentum leo felis.</p>
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
                    <div class="footerArticle__author__wrapper">
                        <a href="#author" class="footerArticle__author__link">
                            <img src="./img/blog-author-30x30.jpg" width="60" height="60" alt="" class="footerArticle__author__img">
                            <span class="footerArticle__author__name"><span class="hidden">Écrit par&nbsp;:</span>Dominique Vilain</span>
                        </a>
                        <div class="footerArticle__follow">
                            <ul class="footerArticle__follow__list">
                                <li class="footerArticle__follow__item"><a href="#goSocialDOM" class="footerArticle__follow__link footerArticle__follow__link--facebook"><span>Facebook</span></a></li>
                                <li class="footerArticle__follow__item"><a href="#goSocialDOM" class="footerArticle__follow__link footerArticle__follow__link--twitter"><span>Twitter</span></a></li>
                                {{--<li class="footerArticle__follow__item"><a href="#goSocialDOM" class="footerArticle__follow__link footerArticle__follow__link--behance"><span>Behance</span></a></li>--}}
                                {{--<li class="footerArticle__follow__item"><a href="#goSocialDOM" class="footerArticle__follow__link footerArticle__follow__link--dribble"><span>Dribble</span></a></li>--}}
                                <li class="footerArticle__follow__item"><a href="#goSocialDOM" class="footerArticle__follow__link footerArticle__follow__link--linkedin"><span>Linkedin</span></a></li>
                                {{--<li class="footerArticle__follow__item"><a href="#goSocialDOM" class="footerArticle__follow__link footerArticle__follow__link--pinterest"><span>Pinterest</span></a></li>--}}
                                {{--<li class="footerArticle__follow__item"><a href="#goSocialDOM" class="footerArticle__follow__link footerArticle__follow__link--vimeo"><span>Vimeo</span></a></li>--}}
                                <li class="footerArticle__follow__item"><a href="#goSocialDOM" class="footerArticle__follow__link footerArticle__follow__link--youtube"><span>Youtube</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="footerArticle__sharer">
                    <div class="footerArticle__sharer__wrapper">
                        <span class="footerArticle__sharer__label-top">Cet article t’as plût&nbsp;?</span>
                        <strong class="footerArticle__sharer__label-bottom">Partages-le&nbsp;!</strong>
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
                    --><li class="social-list-circle__item">
                                <a href="" class="social-list-circle__link behance" rel="me"><span>Vers le Facebook de Kévin Dessouroux</span></a>
                            </li><!--
                    --><li class="social-list-circle__item">
                                <a href="" class="social-list-circle__link dribble" rel="me"><span>Vers le Facebook de Kévin Dessouroux</span></a>
                            </li>
                        </ul>
                    </div>
                </div>

                    <div class="footerArticle__like">
                        {{--<form action="">--}}
                        <div class="footerArticle__like-wrapper">
                        <button type="submit" class="fav" id="fav">
                            <svg class="stableHeart" viewBox="-1 0 18 15">
                                <defs>
                                    <path d="M16 4.872c0-4.9-6.894-5.8-8 .695C6.81-.928 0-.027 0 5.25c0 5.274 8 9.697 8 9.697s8-5.177 8-10.075z" id="heartPath"></path>
                                </defs>
                                <use xlink:href="#heartPath" />
                            </svg>
                            <svg class="floatHeart" viewBox="-1 0 18 15">
                                <use xlink:href="#heartPath" />
                            </svg>
                        </button>
                        {{--</form>--}}
                        <span class="footerArticle__like__counter">14 j’aime</span>
                        </div>
                </div>

            </footer>

            <meta itemprop="datePublished" content="2015-02-05T08:00:00+08:00"/>
            <meta itemprop="dateModified" content="2015-02-05T09:20:00+08:00"/>
        </article>

        @include('partials.blog.aside');
    </div>


    <section class="comments">
        <div class="comments__wrapper">
        <div class="comments__header">
            <div class="comments__count">
                <h2 role="heading" aria-level="2" class="comments__count__title">Commentaires</h2>
                <strong class="comments__count__number">5</strong>
            </div>

            <div class="comments__share">
                <span class="comments__share__title">Partager&nbsp;:</span>
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
                    --><li class="social-list-circle__item">
                        <a href="" class="social-list-circle__link behance" rel="me"><span>Vers le Facebook de Kévin Dessouroux</span></a>
                    </li><!--
                    --><li class="social-list-circle__item">
                        <a href="" class="social-list-circle__link dribble" rel="me"><span>Vers le Facebook de Kévin Dessouroux</span></a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="comments__container">
            <div class="comment comment--1">
                <div class="comment__header">
                    <img src="./img/blog-author-30x30.jpg" width="65" height="65" alt="" class="comment__img">
                    <strong class="comment__name">Dominique Vilain</strong>
                    <time datetime="#" class="comment__date">Il y a un jour</time>
                </div>
                <p class="comment__text">Man's technological ascent began in earnest in what is known as the Neolithic period ("New stone age"). The invention of polished stone axes was a major advance that allowed forest clearance on a large scale to create farms. Agriculture fed larger populations, and the transition to sedentism allowed simultaneously raising more children, as infants no longer needed to be carried, as nomadic ones must. Additionally, children could contribute labor to the raising of crops more readily than they could to the hunter-gatherer economy.</p>
                <footer class="comment__footer">
                    <a href="#rep" class="comment__footer__respond">Répondre</a>
                </footer>
            </div>
            <div class="comment comment--2">
                <div class="comment__header">
                    <img src="./img/blog-author-30x30.jpg" width="65" height="65" alt="" class="comment__img">
                    <strong class="comment__name">Toon Van den Bos</strong>
                    <time datetime="#" class="comment__date">Il y a un jour</time>
                </div>
                <p class="comment__text">Man's technological ascent began in earnest in what is known as the Neolithic period ("New stone age"). The invention of polished stone axes was a major advance that allowed forest clearance on a large scale to create farms. Agriculture fed larger populations, and the transition to sedentism allowed simultaneously raising more children, as infants no longer needed to be carried, as nomadic ones must. Additionally, children could contribute labor to the raising of crops more readily than they could to the hunter-gatherer economy.</p>
                <footer class="comment__footer">
                    <a href="#rep" class="comment__footer__respond">Répondre</a>
                </footer>
            </div>
            <div class="comment comment--1">
                <div class="comment__header">
                    <img src="./img/blog-author-30x30.jpg" width="65" height="65" alt="" class="comment__img">
                    <strong class="comment__name">Jérémy Dubois</strong>
                    <time datetime="#" class="comment__date">Il y a un jour</time>
                </div>
                <p class="comment__text">Man's technological ascent began in earnest in what is known as the Neolithic period ("New stone age"). The invention of polished stone axes was a major advance that allowed forest clearance on a large scale to create farms. Agriculture fed larger populations, and the transition to sedentism allowed simultaneously raising more children, as infants no longer needed to be carried, as nomadic ones must. Additionally, children could contribute labor to the raising of crops more readily than they could to the hunter-gatherer economy.</p>
                <footer class="comment__footer">
                    <a href="#rep" class="comment__footer__respond">Répondre</a>
                </footer>
            </div>
        </div>
        </div>

    </section>





@endsection

