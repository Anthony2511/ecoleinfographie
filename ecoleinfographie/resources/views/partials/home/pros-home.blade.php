<section class="pros-home">
    <div class="pros-home__container">
        <h2 role="heading" aria-level="2" class="pros-home__title">
            Nous formons des professionnels
        </h2>
        <p class="pros-home__text">
            Fusce vehicula dolor arcu, sit amet blandit dolor mollis nec. Donec viverra eleifend lacus, vitae ullamcorper metus. Sed sollicitudin ipsum quis nunc sollicitudin ultrices. Donec euismod scelerisque ligula. Maecenas eu varius risus, eu aliquet arcu.
        </p>
    </div>
    <div class="slider-pros__wrapper" data-pos="0">
        {{--<div class="slider-pros__bg"></div>--}}
        <article class="slider-pros__article slider-pros__article--anim" id="slider-pros__article01">
            <div class="slider-pros__description">
                <div class="slider-pros__description__inside">
                    <h3 role="heading" aria-level="3" class="slider-pros__description__title">Toon Van den Bos</h3>
                    <span class="slider-pros__description__subtitle">Co-fondateur de
                        <a href="#whitecube" rel="ext">WhiteCube</a>
                    </span>
                    <p class="slider-pros__description__excerpt">In hac habitasse platea dictumst. Vivamus adipiscing fermentum quam volutpat aliquam. Integer et elit eget elit facilisis tristique. Nam vel iaculis mauris. Sed ullamcorper tellus erat. Eletium distoc etan rafiney logitec nono darvers.</p>
                </div>
                <a class="slider-pros__description__link" href="#">En savoir plus sur Toon</a>
            </div>
            <figure class="slider-pros__image">
                <img src="./img/slider-pros__img1.jpg" width="338" height="359" alt="#">
            </figure>
        </article>
        <article class="slider-pros__article slider-pros__article--anim" id="slider-pros__article02">
            <div class="slider-pros__description">
                <div class="slider-pros__description__inside">
                    <h3 role="heading" aria-level="3" class="slider-pros__description__title">Tristan Lilien</h3>
                    <span class="slider-pros__description__subtitle">Spécialiste effets spéciaux chez
                        <a href="#benuts" rel="ext">Benuts</a>
                    </span>
                    <p class="slider-pros__description__excerpt">In hac habitasse platea dictumst. Vivamus adipiscing fermentum quam volutpat aliquam. Integer et elit eget elit facilisis tristique. Nam vel iaculis mauris. Sed ullamcorper tellus erat. Eletium distoc etan rafiney logitec nono darvers.</p>
                </div>
                <a class="slider-pros__description__link" href="#">En savoir plus sur Tristan</a>
            </div>
            <figure class="slider-pros__image">
                <img src="./img/slider-pros__img2.jpg" width="338" height="359" alt="#">
            </figure>
        </article>
        <article class="slider-pros__article slider-pros__article--anim" id="slider-pros__article03">
            <div class="slider-pros__description">
                <div class="slider-pros__description__inside">
                    <h3 role="heading" aria-level="3" class="slider-pros__description__title">Machin Chose</h3>
                    <span class="slider-pros__description__subtitle">Co-fondateur de
                        <a href="#herasimiu" rel="ext">Herasmiu</a>
                    </span>
                    <p class="slider-pros__description__excerpt">In hac habitasse platea dictumst. Vivamus adipiscing fermentum quam volutpat aliquam. Integer et elit eget elit facilisis tristique. Nam vel iaculis mauris. Sed ullamcorper tellus erat. Eletium distoc etan rafiney logitec nono darvers.</p>
                </div>
                <a class="slider-pros__description__link" href="#">En savoir plus sur Machin</a>
            </div>
            <figure class="slider-pros__image">
                <img src="./img/slider-pros__img3.jpg" width="338" height="359" alt="#">
            </figure>
        </article>
        <div class="slideButtons slider-pros-buttons">
            <button class="slideButtons__next arrow-circle-container">
                {!! file_get_contents(asset('svg/arrow-circle-right.svg')) !!}
                <span>Article suivant</span>
            </button>
            <button class="slideButtons__prev arrow-circle-container">
                {!! file_get_contents(asset('svg/arrow-circle-left.svg')) !!}
                <span>Article précédent</span>
            </button>
        </div>
        <div class="dots slider-pros-dots" id="dots">
            <ul class="dots__list">
                <li class="dots__li sliderBlog__dots-item--1 current" data-pos="0">
                    <button class="dots__item">
                        <span>Voir l’article #1</span>
                    </button>
                </li>
                <li class="dots__li sliderBlog__dots-item--2" data-pos="1">
                    <button class="dots__item">
                        <span>Voir l’article #2</span>
                    </button>
                </li>
                <li class="dots__li sliderBlog__dots-item--3" data-pos="2">
                    <button class="dots__item">
                        <span>Voir l’article #3</span>
                    </button>
                </li>
            </ul>
        </div>
    </div>

</section>
