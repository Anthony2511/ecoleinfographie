<aside class="blog-aside">
    <h2 role="heading" aria-level="2" class="blog-aside__title">Actions et autre articles</h2>
    <section class="blog-search">
        <h3 role="heading" aria-level="3" class="blog-search__title">Chercher un article</h3>
        <div class="blog-search__container-form">
            {{--<form action="" method="GET" class="blog-search__form">--}}
            {{--{{ Form::open(['action' => ['ArticleController@autocomplete'], 'method' => 'GET', 'class' => 'blog-search__form']) }}
                <label for="search-blog" class="blog-search__label">Je recherche...</label>
                <input type="search" id="autocomplete" class="blog-search__input" name="q" id="search-blog">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <button class="blog-search__submit"><span>Lancer la recherche</span></button>
            {{ Form::close() }}--}}
            {{--</form>--}}


            {{ Form::open(['action' => ['ArticleController@autocomplete'], 'method' => 'GET', 'class' => 'blog-search__form', 'url' => Route('blog'), 'role' => 'search']) }}
                <label for="search-blog" class="blog-search__label">Je recherche...</label>
                <input type="search" class="blog-search__input" name="search" id="search-blog">
                <button class="blog-search__submit"><span>Lancer la recherche</span></button>
            </form>
            {{ Form::close() }}
        </div>
    </section>

    <section class="blog-category">
        <h3 role="heading" aria-level="3" class="blog-category__title">Catégories</h3>
        <ul class="blog-category__list">
            <li class="blog-category__main-item blog-category__main-item--web"><span>Web</span></li>
            <ul class="blog-category__sublist">
                <a href="#subitem"><li class="blog-category__subitem">Tutoriels</li></a>
                <a href="#subitem"><li class="blog-category__subitem">Articles de veille</li></a>
                <a href="#subitem"><li class="blog-category__subitem">Cours</li></a>
                <a href="#subitem"><li class="blog-category__subitem">Tous les articles</li></a>
            </ul>
        </ul>
        <ul class="blog-category__list">
            <li class="blog-category__main-item blog-category__main-item--2D"><span>Design graphique</span></li>
            <ul class="blog-category__sublist">
                <a href="#subitem"><li class="blog-category__subitem">Tutoriels</li></a>
                <a href="#subitem"><li class="blog-category__subitem">Articles de veille</li></a>
                <a href="#subitem"><li class="blog-category__subitem">Cours</li></a>
                <a href="#subitem"><li class="blog-category__subitem">Tous les articles</li></a>
            </ul>
        </ul>
        <ul class="blog-category__list">
            <li class="blog-category__main-item blog-category__main-item--3D"><span>3D/Vidéo</span></li>
            <ul class="blog-category__sublist">
                <a href="#subitem"><li class="blog-category__subitem">Tutoriels</li></a>
                <a href="#subitem"><li class="blog-category__subitem">Articles de veille</li></a>
                <a href="#subitem"><li class="blog-category__subitem">Cours</li></a>
                <a href="#subitem"><li class="blog-category__subitem">Tous les articles</li></a>
            </ul>
        </ul>
    </section>

    <section class="blog-popular">
        <h3 role="heading" aria-level="3" class="blog-popular__title">Sujets populaire</h3>
        <ul class="blog-popular__list">
            <li class="blog-popular__item">
                <figure class="blog-popular__figure">
                    <img src="./img/blog-popular-1.jpg" width="56" height="54" alt="" class="blog-popular__img">
                    <figcaption class="blog-popular__figcaption">95% des intégrateurs écrivent mal leurs titres</figcaption>
                </figure>
                <a href="#goPopular" class="blog-popular__link"><span>Vers l’article populaire « NOM ARTICLE »</span></a>
            </li>
            <li class="blog-popular__item">
                <figure class="blog-popular__figure">
                    <img src="./img/blog-popular-2.jpg" width="56" height="54" alt="" class="blog-popular__img">
                    <figcaption class="blog-popular__figcaption">Apprenez à maîtriser les brushs</figcaption>
                </figure>
                <a href="#goPopular" class="blog-popular__link"><span>Vers l’article populaire « NOM ARTICLE »</span></a>
            </li>
            <li class="blog-popular__item">
                <figure class="blog-popular__figure">
                    <img src="./img/blog-popular-3.jpg" width="56" height="54" alt="" class="blog-popular__img">
                    <figcaption class="blog-popular__figcaption">Les futures propriétés de CSS4</figcaption>
                </figure>
                <a href="#goPopular" class="blog-popular__link"><span>Vers l’article populaire « NOM ARTICLE »</span></a>
            </li>
            <li class="blog-popular__item">
                <figure class="blog-popular__figure">
                    <img src="./img/blog-popular-4.jpg" width="56" height="54" alt="" class="blog-popular__img">
                    <figcaption class="blog-popular__figcaption">Tutoriel Maya : Apprennez à appliquer des textures t…</figcaption>
                </figure>
                <a href="#goPopular" class="blog-popular__link"><span>Vers l’article populaire « NOM ARTICLE »</span></a>
            </li>
            <li class="blog-popular__item">
                <figure class="blog-popular__figure">
                    <img src="./img/blog-popular-5.jpg" width="56" height="54" alt="" class="blog-popular__img">
                    <figcaption class="blog-popular__figcaption">Apprenez à faire des caricatures avec Photosh…</figcaption>
                </figure>
                <a href="#goPopular" class="blog-popular__link"><span>Vers l’article populaire « NOM ARTICLE »</span></a>
            </li>
        </ul>
    </section>

    <section class="blog-tags">
        <h3 role="heading" aria-level="3" class="blog-tags__title">Tags populaire</h3>
        <ul class="blog-tags__list">
            <li class="blog-tags__item"><a href="#goTag">HTML</a></li>
            <li class="blog-tags__item"><a href="#goTag">Photoshop</a></li>
            <li class="blog-tags__item"><a href="#goTag">CSS</a></li>
            <li class="blog-tags__item"><a href="#goTag">Hover</a></li>
            <li class="blog-tags__item"><a href="#goTag">Illustrator</a></li>
            <li class="blog-tags__item"><a href="#goTag">Tutoriel</a></li>
            <li class="blog-tags__item"><a href="#goTag">Lorem</a></li>
            <li class="blog-tags__item"><a href="#goTag">Ipsum</a></li>
            <li class="blog-tags__item"><a href="#goTag">Dolor</a></li>
            <li class="blog-tags__item"><a href="#goTag">Sit</a></li>
            <li class="blog-tags__item"><a href="#goTag">Amet</a></li>
            <li class="blog-tags__item"><a href="#goTag">Creation</a></li>
            <li class="blog-tags__item"><a href="#goTag">Framework</a></li>
            <li class="blog-tags__item"><a href="#goTag">Creative</a></li>
            <li class="blog-tags__item"><a href="#goTag">Beautiful</a></li>
            <li class="blog-tags__item"><a href="#goTag">Technique</a></li>
        </ul>
        <button class="blog-tags__button">Voir tous les tags</button>
    </section>

</aside>
