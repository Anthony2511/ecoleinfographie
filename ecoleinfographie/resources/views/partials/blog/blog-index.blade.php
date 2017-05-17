<div class="blog__container">

    <section class="blog-list__container" id="anchor">
        <h2 role="heading" aria-level="2" class="blog-list__title">Nos derniers articles</h2>

        <div class="blog-list">

            @foreach($articles as $article)
                @include('partials.article-card')
            @endforeach



        </div>

    </section>

    @include('partials.blog.aside');


    {!! $articles->render() !!}

</div>
