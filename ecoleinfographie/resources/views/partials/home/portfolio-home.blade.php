<div class="portfolio-home">
    <section class="portfolio-home__intro">
        <div class="portfolio-home__intro__wrapper">
            <h2 role="heading" aria-level="2" class="portfolio-home__intro__title">
                {{ $page->titlePortfolioHome }}
            </h2>
            <p class="portfolio-home__intro__text">
                {{ $page->descPortfolioHome }}
            </p>
            <a href="#portfolio" class="portfolio-home__intro__link">Voir les travaux de nos étudiants</a>
        </div>

        <?php
            $image = $page->p1_image;
            Image::make($image)->fit(536, 439)->save();
            $width = Image::make($image)->width();
            $height = Image::make($image)->height();
        ?>

        <div class="project__container-all">
            <div class="project__wrapper-top-inner">
                <div class="project__wrapper-top">
                    <article class="project project--small project--{{ $page->p1_option }}">
                        <figure class="project__figure">
                            <img src="{{ $image }}" width="{{ $width }}" height="{{ $height }}" alt="{{ $page->p1_metaDesc }}" class="project__img">
                        </figure>
                        <div class="project__infos-wrapper">
                            <div class="project__infos-container">
                                <span class="project__category">Métiers de la 3D et de l’audiovisuel</span>
                                <h3 role="heading" aria-level="3" class="project__title">{{ $page->p1_name }}</h3>
                                <p class="project__description">{{ $page->p1_desc }}</p>
                                <span class="project__author">Par {{ $page->p1_author }}</span>
                            </div>
                        </div>
                        <a href="#project" class="project__link">
                            <span>Voir la fiche de présentation {{ $page->p1_name }}</span>
                        </a>
                    </article>
                </div>
            </div>
            <div class="project__wrapper">

                <?php
                $image3 = $page->p3_image;
                Image::make($image3)->fit(654, 375)->save();
                $width = Image::make($image3)->width();
                $height = Image::make($image3)->height();
                ?>

                <article class="project project--middle project--{{ $page->p3_option }}">
                    <figure class="project__figure">
                        <img src="{{ $image3 }}" width="{{ $width }}" height="{{ $height }}" alt="{{ $page->p3_metaDesc }}" class="project__img">
                    </figure>
                    <div class="project__infos-wrapper">
                        <div class="project__infos-container">
                            <span class="project__category">Métiers du design graphique</span>
                            <h3 role="heading" aria-level="3" class="project__title">{{ $page->p3_name }}</h3>
                            <p class="project__description">{{ $page->p3_desc }}</p>
                            <span class="project__author">Par {{ $page->p3_author }}</span>
                        </div>
                    </div>
                    <a href="#project" class="project__link">
                        <span>Voir la fiche de présentation de {{ $page->p3_name }}</span>
                    </a>
                </article>

                    <?php
                    $image2 = $page->p2_image;
                    Image::make($image2)->fit(1011, 580)->save();
                    $width = Image::make($image2)->width();
                    $height = Image::make($image2)->height();
                    ?>

                <article class="project project--big project--{{ $page->p2_option }}">
                    <figure class="project__figure">
                        <img src="{{ $image2 }}" width="{{ $width }}" height="{{ $height }}" alt="{{ $page->p2_metaDesc }}" class="project__img">
                    </figure>
                    <div class="project__infos-wrapper">
                        <div class="project__infos-container">
                            <span class="project__category">Métiers du web</span>
                            <h3 class="project__title">{{ $page->p2_name }}</h3>
                            <p class="project__description">{{ $page->p2_desc }}</p>
                            <span class="project__author">Par {{ $page->p2_author }}</span>
                        </div>
                    </div>
                    <a href="#project" class="project__link">
                        <span>Voir la fiche de présentation de {{ $page->p2_name }}</span>
                    </a>
                </article>
            </div>
        </div>
    </section>
</div>



