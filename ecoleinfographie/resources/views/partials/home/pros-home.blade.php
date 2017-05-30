<section class="pros-home">
    <div class="pros-home__container">
        <h2 role="heading" aria-level="2" class="pros-home__title">
            @lang('home.proTitle')
        </h2>
        <p class="pros-home__text">
            @lang('home.proIntro')
        </p>
    </div>
    <div class="slider-pros__wrapper" data-pos="0">
        <article class="slider-pros__article slider-pros__article--anim" id="articleSlide-0">
            <div class="slider-pros__description">
                <div class="slider-pros__description__inside">
                    <h3 role="heading" aria-level="3" class="slider-pros__description__title">{{ $pWeb->fullname }}</h3>
                    <span class="slider-pros__description__subtitle">
                        @foreach($pWeb->company as $row)
                        Co-fondateur de
                            <a href="{{ $row['url'] }}">
                                {{ $row['name'] }}
                            </a>
                        @endforeach
                    </span>
                    <p class="slider-pros__description__excerpt">
                        In hac habitasse platea dictumst. Vivamus adipiscing fermentum quam volutpat aliquam. Integer et elit eget elit facilisis tristique. Nam vel iaculis mauris. Sed ullamcorper tellus erat. Eletium distoc etan rafiney logitec nono darvers.
                    </p>
                </div>
                <a class="slider-pros__description__link" href="{{ Url('/etudiants') . '/' . $pWeb->slug }}">En savoir plus sur {{ $pWeb->firstname }}</a>
            </div>
            <figure class="slider-pros__image">
                <img src="{{ $pWeb->getImageStudent('_slider.jpg') }}" width="338" height="359" alt="Photo de {{ $pWeb->fullname }}">
            </figure>
        </article>
        <article class="slider-pros__article slider-pros__article--anim" id="articleSlide-1">
            <div class="slider-pros__description">
                <div class="slider-pros__description__inside">
                    <h3 role="heading" aria-level="3" class="slider-pros__description__title">{{ $p3d->fullname }}</h3>
                    <span class="slider-pros__description__subtitle">{{ $p3d->profession }} chez
                        @foreach($p3d->company as $row)
                            <a href="{{ $row['url'] }}">
                                {{ $row['name'] }}
                            </a>
                        @endforeach
                    </span>
                    <p class="slider-pros__description__excerpt">In hac habitasse platea dictumst. Vivamus adipiscing fermentum quam volutpat aliquam. Integer et elit eget elit facilisis tristique. Nam vel iaculis mauris. Sed ullamcorper tellus erat. Eletium distoc etan rafiney logitec nono darvers.</p>
                </div>
                <a class="slider-pros__description__link" href="{{ Url('/etudiants') . '/' . $p3d->slug }}">En savoir plus sur {{ $p3d->firstname }}</a>
            </div>
            <figure class="slider-pros__image">
                <img src="{{ $p3d->getImageStudent('_slider.jpg') }}" width="338" height="359" alt="Photo de {{ $p3d->fullname }}">
            </figure>
        </article>
        <article class="slider-pros__article slider-pros__article--anim" id="articleSlide-2">
            <div class="slider-pros__description">
                <div class="slider-pros__description__inside">
                    <h3 role="heading" aria-level="3" class="slider-pros__description__title">{{ $p2d->fullname }}</h3>
                    <span class="slider-pros__description__subtitle">{{ $p2d->profession }} chez
                        @foreach($p2d->company as $row)
                            <a href="{{ $row['url'] }}">
                                {{ $row['name'] }}
                            </a>
                        @endforeach
                    </span>
                    <p class="slider-pros__description__excerpt">In hac habitasse platea dictumst. Vivamus adipiscing fermentum quam volutpat aliquam. Integer et elit eget elit facilisis tristique. Nam vel iaculis mauris. Sed ullamcorper tellus erat. Eletium distoc etan rafiney logitec nono darvers.</p>
                </div>
                <a class="slider-pros__description__link" href="{{ Url('/etudiants') . '/' . $p2d->slug }}">En savoir plus sur {{ $p2d->firstname }}</a>
            </div>
            <figure class="slider-pros__image">
                <img src="{{ $p2d->getImageStudent('_slider.jpg') }}" width="338" height="359" alt="Photo de {{ $p2d->fullname }}">
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
                <li class="dots__li sliderBlog__dots-item--1" data-pos="0">
                    <a href="#articleSlide-0" class="dots__item">
                        <span>Faire défiler vers le slide du premier professionnel</span>
                    </a>
                </li>
                <li class="dots__li sliderBlog__dots-item--2" data-pos="1">
                    <a href="#articleSlide-1" class="dots__item">
                        <span>Faire défiler vers le slide du deuxième professionnel</span>
                    </a>
                </li>
                <li class="dots__li sliderBlog__dots-item--3" data-pos="2">
                    <a href="#articleSlide-2" class="dots__item">
                        <span>Faire défiler vers le slide du troisième professionnel</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

</section>
