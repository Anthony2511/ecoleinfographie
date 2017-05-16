<div class="blog__container">

    <section class="blog-list__container">
        <h2 role="heading" aria-level="2" class="blog-list__title">Nos derniers articles</h2>

        <div class="blog-list">

            @foreach($articles as $article)
                @include('partials.article-card')
            @endforeach



        </div>

    </section>

    @include('partials.blog.aside');

    <div class="blog-pagination">
        <a href="#precedent" class="blog-pagination__button blog-pagination__button--prev blog-pagination__button--noclick" title="Aller à la page précédente">
            <span class="blog-pagination__button--hidden">Page </span><span>Précédent</span>
        </a>

        <a href="#suivant" class="blog-pagination__button blog-pagination__button--next" title="Aller à la page suivante">
            <span class="blog-pagination__button--hidden">Page </span><span>Suivant</span>
        </a>

        <ul class="blog-pagination__list">
            <li class="blog-pagination__item"><a href="#number" class="blog-pagination__link blog-pagination__link--active">1</a></li><!--
        --><li class="blog-pagination__item"><a href="#number" class="blog-pagination__link">2</a></li><!--
        --><li class="blog-pagination__item"><a href="#number" class="blog-pagination__link">3</a></li><!--
        --><li class="blog-pagination__item"><a href="#number" class="blog-pagination__link">4</a></li><!--
        --><li class="blog-pagination__item"><a href="#number" class="blog-pagination__link">5</a></li><!--
        --><li class="blog-pagination__item"><a href="#number" class="blog-pagination__link">6</a></li><!--
        --><li class="blog-pagination__item"><a href="#number" class="blog-pagination__link">7</a></li><!--
        --><li class="blog-pagination__item"><a href="#number" class="blog-pagination__link">8</a></li><!--
        --><li class="blog-pagination__item"><a href="#number" class="blog-pagination__link">9</a></li><!--
        --><li class="blog-pagination__item"><a href="#number" class="blog-pagination__link">10</a></li>
        </ul>
    </div>

</div>
