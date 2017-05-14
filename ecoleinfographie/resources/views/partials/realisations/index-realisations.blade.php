<div class="index-rea__container">
    <ul class="index-rea__filter">
        <li class="index-rea__filter__item active">
            <a href="#tous" class="index-rea__filter__link">Tous</a>
        </li>
        <li class="index-rea__filter__item">
            <a href="#3D" class="index-rea__filter__link">3D et audiovisuel</a>
        </li>
        <li class="index-rea__filter__item">
            <a href="#dg" class="index-rea__filter__link">Design graphique</a>
        </li>
        <li class="index-rea__filter__item">
            <a href="#web" class="index-rea__filter__link">Web</a>
        </li>
    </ul>
    <section class="reas-wrapper">
        <h2 role="heading" aria-level="2" class="reas-wrapper__title">La liste des travaux de nos étudiants</h2>
        <ul class="reas">
            @include('partials.realisations.item-realisations')
        </ul>
    </section>
</div>

<div class="load-more__container">
    <noscript>
        {!! $works->render() !!}
    </noscript>
    <a href="{{ $works->nextPageUrl() }} " class="load-more" id="load-more">
        <span class="load-more__label">
            <span class="load-more__label-text">Charger plus</span>
            <span class="load-more__hidden">d’anciens étudiants diplômés</span>
        </span>
    </a>
</div>
