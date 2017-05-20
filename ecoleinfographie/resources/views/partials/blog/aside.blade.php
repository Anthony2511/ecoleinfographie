<aside class="blog-aside">
    <h2 role="heading" aria-level="2" class="blog-aside__title">Actions et autre articles</h2>
    <section class="blog-search">
        <h3 role="heading" aria-level="3" class="blog-search__title">Chercher un article</h3>
        <div class="blog-search__container-form">

            {{ Form::open(['action' => ['ArticleController@autocomplete'], 'method' => 'GET', 'class' => 'blog-search__form', 'url' => Route('blog').'#anchor', 'role' => 'search']) }}
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
                @foreach($subCategoriesWeb as $category)
                    <a href="{{ Route('blog') . '?category=web&subcategory=' . $category->slug  . '#anchor'}}"><li class="blog-category__subitem">{{ $category->name }}</li></a>
                @endforeach
                <a href="{{ Route('blog') . '?category=web#anchor' }}"><li class="blog-category__subitem">Tous les articles</li></a>
            </ul>
        </ul>
        <ul class="blog-category__list">
            <li class="blog-category__main-item blog-category__main-item--2D"><span>Design graphique</span></li>
            <ul class="blog-category__sublist">
                @foreach($subCategories2d as $category)
                    <a href="{{ Route('blog') . '?category=2D&subcategory=' . $category->slug . '#anchor'}}"><li class="blog-category__subitem">{{ $category->name }}</li></a>
                @endforeach
                <a href="{{ Route('blog') . '?category=2D#anchor' }}"><li class="blog-category__subitem">Tous les articles</li></a>
            </ul>
        </ul>
        <ul class="blog-category__list">
            <li class="blog-category__main-item blog-category__main-item--3D"><span>3D/Vidéo</span></li>
            <ul class="blog-category__sublist">
                @foreach($subCategories3d as $category)
                    <a href="{{ Route('blog') . '?category=3D&subcategory=' . $category->slug . '#anchor'}}"><li class="blog-category__subitem">{{ $category->name }}</li></a>
                @endforeach
                <a href="{{ Route('blog') . '?category=3D#anchor' }}"><li class="blog-category__subitem">Tous les articles</li></a>
            </ul>
        </ul>
    </section>

    <section class="blog-popular">
        <h3 role="heading" aria-level="3" class="blog-popular__title">Sujets populaire</h3>
        <ul class="blog-popular__list">
            @foreach($getMostPopularArticles as $key => $article)
            <li class="blog-popular__item">
                <figure class="blog-popular__figure">
                    <img src="{{ $article->getImageArticle('_popular.jpg') }}" width="56" height="54" alt="" class="blog-popular__img" srcset="{{ $article->getImageArticle('_popular2x.jpg') }} 2x">
                    <figcaption class="blog-popular__figcaption">{{ str_limit($article->title, 45, '…') }}</figcaption>
                </figure>
                <a href="{{ Route('blog') . '/' . $article->slug }}" class="blog-popular__link"><span>Vers l’article populaire « {{ $article->title }} »</span></a>
            </li>
            @endforeach
        </ul>
    </section>

    <section class="blog-tags">
        <h3 role="heading" aria-level="3" class="blog-tags__title">Quelques tags</h3>
        <ul class="blog-tags__list">
            @foreach($getAllTags as $key => $tag)
                <li class="blog-tags__item"><a href="{{ Route('blog') . '?tag=' . $tag->slug . '#anchor' }}">{{ $tag->name }}</a></li>
            @endforeach
        </ul>
        <button class="blog-tags__button">Voir tous les tags</button>
    </section>

</aside>
