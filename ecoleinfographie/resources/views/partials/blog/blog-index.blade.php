<section class="blog__container">

  @if(Request::has('search'))
    <h2 role="heading" aria-level="2" id="anchor" class="blog-list__title">Résultats pour votre recherche
      <span class="blog-list__result">Pour le terme <strong>{{Request::get('search')}}</strong></span>
    </h2>
  @elseif(Request::has('category'))
    <h2 role="heading" aria-level="2" id="anchor" class="blog-list__title">Les articles de la catégorie <strong>{{$orientation[Request::get('category')]}}</strong>
    </h2>
  @else
    <h2 role="heading" aria-level="2" id="anchor" class="blog-list__title">Nos derniers articles</h2>
  @endif

    <div class="blog-list__container">

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

    </div>



    @include('partials.blog.aside');




      {!! $articles->render() !!}



</section>
