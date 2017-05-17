<div class="blog__container">

    <section class="blog-list__container" id="anchor">
        @if(Request::has('search'))
            <h2 role="heading" aria-level="2" class="blog-list__title">Résultats pour votre recherche
              <span class="blog-list__result">Pour le terme <strong>{{Request::get('search')}}</strong></span>
            </h2>
        @else
            <h2 role="heading" aria-level="2" class="blog-list__title">Nos derniers articles</h2>
        @endif

        @if (count($articles) >= 1)
          <div class="blog-list">
              @foreach($articles as $article)
                  @include('partials.article-card')
              @endforeach
          </div>
        @else
          <p class="no-articles">Aucun article ne correspond à votre recherche.</p>
          <p class="no-articles">Réessayez ou retourner à <a href="{{ Route('blog') }}">l’accueil du blog</a>.</p>
        @endif

    </section>

    @include('partials.blog.aside');




      {!! $articles->render() !!}



</div>
