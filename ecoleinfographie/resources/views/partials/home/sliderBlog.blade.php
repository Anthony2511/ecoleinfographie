<section class="sliderBlog-section">
    <h2 role="heading" aria-level="2" class="sliderBlog-section__title">
        <span class="sliderBlog-section__title--hidden">Les derniers articles de </span>
        <span class="sliderBlog-section__title--display">notre blog</span>
    </h2>
    <div class="sliderBlog-wrapper">
        <article class="sliderBlog">
            <div class="sliderBlog__imgWrapper" style="background-image:url('{{ asset('img/home-blog.jpg') }}')">
                {{--<img src="./img/home-blog.jpg" alt="#" width="535" height="527" class="sliderBlog__imgWrapper__img">--}}
            </div>
            <div class="sliderBlog__contentWrapper">
                <a href="" title="#" class="sliderBlog__category">Web</a>
                <h3 role="heading" aria-level="3" class="sliderBlog__title">Automatisez vos tâches grâce à Grunt</h3>
                <p class="sliderBlog__excerpt">
                    Contrairement à une opinion répandue, le Lorem Ipsum n'est pas simplement du texte aléatoire. Il trouve ses racines dans une oeuvre de la littérature qui dit qu’il faut avoir du faux texte pour combler les trous, ça permet de faire des...
                </p>
            </div>
            <a href="#" class="sliderBlog__link">Retrouvez l’article</a>
        </article>
    </div>
    <div class="sliderBlog__dots-wrapper">
        <ul class="sliderBlog__dots-list">
            <li class="sliderBlog__dots-item">
                <button class="sliderBlog__dots-item__dot">
                    <span>Voir l’article #1</span>
                </button>
            </li>
            <li class="sliderBlog__dots-item">
                <button class="sliderBlog__dots-item__dot">
                    <span>Voir l’article #2</span>
                </button>
            </li>
            <li class="sliderBlog__dots-item">
                <button class="sliderBlog__dots-item__dot">
                    <span>Voir l’article #3</span>
                </button>
            </li>
        </ul>
    </div>
</section>
