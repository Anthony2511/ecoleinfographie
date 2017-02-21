@extends('layout')

@section('content')
    <section class="intro">
        <div class="intro__content">
            <h2 aria-level="2" role="heading" class="intro__title">Tu veux devenir un infographiste&nbsp;?</h2>
            <p class="intro__text">
                In the tumultuous business of cutting-in and attending to a whale, there is much running backwards and forwards among the crew. Now hands are wanted here, and then again hands are wanted there. There is no staying in any one place for at one and the same time.
            </p>
            <ul class="intro__list">
                <li class="intro__item">
                    <a href="#" class="intro__link">La formation en web</a>
                </li>
                <li class="intro__item">
                    <a href="#" class="intro__link">La formation en design graphique</a>
                </li>
                <li class="intro__item">
                    <a href="#" class="intro__link">La formation en 3D et audiovisuel</a>
                </li>
            </ul>
        </div>
        <img class="intro__img" src="../img/image-infographiste.jpg" width="570" height="612" alt="Une homme à lunettes assis sur son bureau qui est entrain de lire une feuille qu’il tient dans sa main gauche en étant face à son ordinateur">
    </section>
    <section class="location">
        <h2 aria-level="2" role="heading" class="location__title">Notre Situation</h2>
        <div class="location__address-wrapper">
            <address class="location__address">
                Rue Peetermans, 80<br />
                4100 - Seraing<br />
                Belgique
            </address>
            <a href="#map" class="location__link" rel="external">Voir sur la carte</a>
        </div>
        <div class="location__coordinates">
            <a href="tel:085121899" class="location__tel">085 12 18 99</a>
            <a href="#contact" class="location__mail">Nous contacter</a>
            <div class="location__social">
                <a href="#facebook" rel="external" class="location__social-facebook"><span>Facebook</span></a>
                <a href="#twitter" rel="external" class="location__social-twitter"><span>Twitter</span></a>
                <a href="#pinterest" rel="external" class="location__social-pinterest"><span>Pinterest</span></a>
                <a href="#behance" rel="external" class="location__social-behance"><span>Behance</span></a>
                <a href="#dribble" rel="external" class="location__social-dribble"><span>Dribble</span></a>
            </div>
        </div>
    </section>
    <article class="news-home" role="article">
        <img src="#" alt="#" class="article__img">
        <h2 aria-level="2" role="heading" class="news-home__title">Saint-Nicolas est passé à l’école&nbsp;!</h2>
        <p class="news-home__excerpt">
            Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500. Quand un peintre anonyme assembla ensemble des morceaux de…
        </p>
        <a href="#" class="article__link">Lire l’article <span>Saint-Nicolas est passé à l’école</span></a>
    </article>
@endsection
