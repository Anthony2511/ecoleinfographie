<section class="footer__wrapper" itemscope itemtype="http://schema.org/Organization">
    <header class="footer__header">
        <h2 role="heading" aria-level="2" class="footer__title">
            <span>Bas de page de l’</span>École d’infographie<br /> de la Province de Liège
        </h2>
        <link itemprop="url" href="http://ecoleinfographie.be">
        <ul class="social">
            <li class="social__item">
                <a href="" itemprop="sameAs" rel="external" title="Vers Facebook" class="social__link social__link--facebook">
                    {!! file_get_contents(asset('svg/facebook.svg')) !!}
                    <span>Vers Facebook</span>
                </a>
            </li>
            <li class="social__item">
                <a href="" itemprop="sameAs" rel="external" title="Vers Twitter" class="social__link social__link--twitter">
                    {!! file_get_contents(asset('svg/twitter.svg')) !!}
                    <span>Vers Twitter</span>
                </a>
            </li>
            <li class="social__item">
                <a href="" itemprop="sameAs" rel="external" title="Vers Pinterest" class="social__link social__link--pinterest">
                    {!! file_get_contents(asset('svg/pinterest.svg')) !!}
                    <span>Vers Pinterest</span>
                </a>
            </li>
            <li class="social__item">
                <a href="" itemprop="sameAs" rel="external" title="Vers Behance" class="social__link social__link--behance">
                    {!! file_get_contents(asset('svg/behance.svg')) !!}
                    <span>Vers Behance</span>
                </a>
            </li>
            <li class="social__item">
                <a href="" itemprop="sameAs" rel="external" title="Vers Dribble" class="social__link social__link--dribble">
                    {!! file_get_contents(asset('svg/dribble.svg')) !!}
                    <span>Vers Dribble</span>
                </a>
            </li>
        </ul>
    </header>
    <section class="section section--contact">
        <h3 role="heading" aria-level="3" class="section__title">Contact</h3>
        <address class="section__address" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
            <span itemprop="streetAddress">Rue Peetermans, 80</span>
            <span><span itemprop="postalCode">4100</span> - <span itemprop="addressLocality">Seraing</span></span>
            <span itemprop="addressCountry">Belgique</span>
        </address>
        <meta itemprop="name" content="Haute École de la Province de Liège - Infographie" />
        <a href="tel:085211113" class="section__tel" itemprop="telephone" itemprop="faxNumber">085 21 11 13</a>
        <a href="#contact" class="section__contact">@lang('footer.contact-us')</a>
    </section>
    <section class="section section--explorez">
        <h3 role="heading" aria-level="3" class="section__title">@lang('footer.explore')</h3>
        <ul class="section__list">
            <li class="section__item">
                <a href="#web" class="section__link">@lang('footer.news')</a>
            </li>
            <li class="section__item">
                <a href="{{ Route('blog') }}" class="section__link">@lang('footer.blog')</a>
            </li>
            <li class="section__item">
                <a href="{{ Route('internship') }}" class="section__link">@lang('footer.internship')</a>
            </li>
            <li class="section__item">
                <a href="{{ Route('teachers') }}" class="section__link">@lang('footer.teachers')</a>
            </li>
        </ul>
    </section>
    <section class="section section--formations">
        <h3 role="heading" aria-level="3" class="section__title">@lang('footer.training')</h3>
        <ul class="section__list">
            <li class="section__item">
                <a href="#web" class="section__link">@lang('footer.webtraining')</a>
            </li>
            <li class="section__item">
                <a href="#web" class="section__link">@lang('footer.2Dtraining')</a>
            </li>
            <li class="section__item">
                <a href="#web" class="section__link">@lang('footer.3Dtraining')</a>
            </li>
        </ul>
        <a href="#inscription" class="section__cta">@lang('footer.inscription')</a>
    </section>
</section>
