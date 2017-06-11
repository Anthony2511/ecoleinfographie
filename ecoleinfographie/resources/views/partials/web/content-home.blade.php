<section class="web-what">
    <div class="web-what__wrapper">
        <img class="web-what__img" src="{{ asset('img/macbook-web-what.png') }}" width="764" height="879" alt="" data-type="parallax"
             data-depth="-0.07">
        <div class="web-what__wrapper-text">
            <h2 role="heading" aria-level="2" class="web-what__title">
                Le web, c’est quoi <span>?</span>
                {!! file_get_contents(asset('svg/question1.svg')) !!}
            </h2>
            <p class="web-what__text">
                Le web, c’est un monde fascinant. Grâce à quelques lignes de code, il est possible de réaliser une page web éblouissante qui permettra aux visiteurs d'accéder à l’information de partout dans le monde. Mais pas seulement, les technologies du web permettent de réaliser une multitude de choses, comme des applications mobiles, des applications complexe et même de super jeux en 3D directement dans le navigateur.
            </p>
        </div>
    </div>
</section>

<section class="webdesigner">
    <div class="webdesigner__wrapper">
        <div class="webdesigner__wrapper-text">
            <h2 role="heading" aria-level="2" class="webdesigner__title">
                Le designer web
            </h2>
            <p class="webdesigner__text">
                Il conçoit les interfaces et les manières de s’en servir. Ses outils sont plutôt des outils de graphistes que des outils de codeurs, mais il doit connaître le code et les contraintes techniques des navigateurs Web.
            </p>
            <a href="#webdesigner" class="webdesigner__link">Voir un ancien diplômé qui est designer web</a>
        </div>
        <img class="webdesigner__img" src="{{ asset('img/web-designerweb.png') }}" srcset="{{ asset('img/web-designerweb@2x.png') }} 2x" width="749" height="646" alt="">
    </div>
</section>

<section class="webintegrator">
    <div class="webintegrator__wrapper">
        <img class="webintegrator__img" src="{{ asset('img/webintegrator-desktop.png') }}" srcset="{{ asset('img/webintegrator-desktop@2x.png') }} 2x" width="1145" height="559" alt="">
        <img class="webintegrator__img--2" src="{{ asset('img/webintegrator-ipad.png') }}" srcset="{{ asset('img/webintegrator-ipad@2x.png') }} 2x" width="442" height="218" alt="">
        <div class="webintegrator__wrapper-text">
            <h2 role="heading" aria-level="2" class="webintegrator__title">
                L’intégrateur web
            </h2>
            <p class="webintegrator__text">
                Spécialiste du HTML, du CSS et du Javascript, il transforme des images fournies par le designer en vraies pages Web utilisables. La qualité pour lui, c’est de faire des sites accessibles dans un grand nombre de conditions d’utilisation, sur un téléphone, un vieil ordinateur, ou du matériel ultra-moderne.
            </p>
            <a href="#webintegrator" class="webintegrator__link">Voir un ancien diplômé qui est intégrateur web</a>
        </div>
    </div>
</section>

<section class="frontend">
    <div class="frontend__wrapper">
        <div class="frontend__anim-container">
            <div class="frontend__anim-wrapper">
                <div class="frontend__overflowh">
                    {!! file_get_contents(asset('svg/frontend.svg')) !!}
                </div>
                <img class="frontend__img" src="{{ asset('img/web-frontend.png') }}" srcset="{{ asset('img/web-frontend@2x.png') }} 2x" width="818" height="479" alt="">
            </div>
        </div>
        <div class="frontend__wrapper-text">
            <h2 role="heading" aria-level="2" class="frontend__title">
                Le développeur front-end
            </h2>
            <p class="frontend__text">
                Spécialiste du code Javascript, il anime les pages, réalise en codant des effets spectaculaires, sécurise l’expérience utilisateur. La qualité pour lui, c’est de savoir travailler pour l’avenir en écrivant du code facile à maintenir et à étendre, et pour le passé, en écrivant un code compatible. 
            </p>
            <a href="#webintegrator" class="frontend__link">Voir un ancien diplômé qui est développeur front-end</a>
        </div>
    </div>
</section>

<section class="devbackend">
    <div class="devbackend__wrapper">
        <img class="devbackend__img" src="{{ asset('img/backend_imac.png') }}" srcset="{{ asset('img/backend_imac@2x.png') }} 2x" width="1264" height="765" alt="">
        <img class="devbackend__img--2" src="{{ asset('img/backend__code.png') }}" srcset="{{ asset('img/backend__code@2x.png') }} 2x" width="1026" height="488" alt="">
        <div class="devbackend__wrapper-text">
            <h2 role="heading" aria-level="2" class="devbackend__title">
                Le développeur backend
            </h2>
            <p class="devbackend__text">
                Spécialiste des serveurs, des bases de données et des API. Il fait tout ce que le grand public ne voit pas, mais qui permet aux administrateurs d’un site de gérer leur contenu sans devoir tapper une ligne de code.
            </p>
            <a href="#devbackend" class="devbackend__link">Voir un ancien diplômé qui est développeur backend</a>
        </div>
    </div>
</section>

<section class="webmobile">
    <div class="webmobile__wrapper">
        <div class="webmobile__wrapper-text">
            <h2 role="heading" aria-level="2" class="webmobile__title">
                Le développeur mobile
            </h2>
            <p class="webmobile__text">
                Spécialiste des téléphones et tablettes, il peut créer de vraies applications pour iOS ou Android en utilisant des outils généralement rencontrés dans le Web traditionnel.
            </p>
            <a href="http://ecoleinfographie.app/etudiants/larry-lakin" class="webmobile__link">Voir un ancien diplômé qui est développeur mobile</a>
        </div>
        <img class="webmobile__img--1" src="{{ asset('img/webmobile-sketch.png') }}" srcset="{{ asset('img/webmobile-sketch@2x.png') }} 2x" width="760" height="398" alt="">
        <img class="webmobile__img--2" src="{{ asset('img/webmobile-connexion.png') }}" srcset="{{ asset('img/webmobile-connexion@2x.png') }} 2x" width="760" height="398" alt="">
        <img class="webmobile__img--3" src="{{ asset('img/webmobile-padlock.png') }}" srcset="{{ asset('img/webmobile-padlock@2x.png') }} 2x" width="760" height="398" alt="">
        <img class="webmobile__img--4" src="{{ asset('img/webmobile-code.png') }}" srcset="{{ asset('img/webmobile-code@2x.png') }} 2x" width="760" height="398" alt="">
    </div>
</section>

<div class="redirect">
    <strong class="redirect__title">La formation web couvre naturellement l’ensemble des techniques et savoir-faire requis pour exercer ces métiers.</strong>
    <ul class="redirect__list">
        <li class="redirect__item">
            <a href="{{ Route('webTraining') }}" class="redirect__link" title="">Voir la formation en web</a>
        </li>
        <li class="redirect__item">
            <a href="{{ Route('programWeb') }}" class="redirect__link" title="">Voir le programme des cours en web</a>
        </li>
        <li class="redirect__item">
            <a href="{{ Route('parcoursWeb') }}" class="redirect__link" title="">Voir les anciens bacheliers travaillant dans le web</a>
        </li>
    </ul>
</div>
