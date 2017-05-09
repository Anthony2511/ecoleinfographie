<section class="former-students">
    <div class="former-students__top-wrapper">
        <img src="{{ asset('./img/anciens-etudiants.png') }}" width="629" height="464" alt="" class="former-students__img">
        <div class="former-students__text-wrapper">
            <h2 role="heading" aria-level="2" class="former-students__title">
                <span>@lang('students.title1') </span>
                <strong>@lang('students.title2')</strong>
            </h2>
            <p class="former-students__text-intro">
                @lang('students.intro1')
            </p>
            <p class="former-students__text-intro">
                @lang('students.intro2')
            </p>
        </div>
    </div>

    <div class="former-students__content">
        <ul class="former-students__list">
            @foreach($getStudentsWebWithInterview as $key => $student)
            <li class="former-students__item">
                <a href="{{ url('etudiants/'.$student->slug) }}" class="card_student">
                    <figure class="card_student__figure">
                        <div class="card_student__picture-wrapper">
                            <img class="card_student__picture" src="{{ $student->getImageStudent('_cards.jpg') }}" width="350" height="200" alt="@lang('students.alt1') {{ $student->fullname }}, @lang('students.alt2') {{ strtolower($student->orientation) }}" >
                        </div>
                        <figcaption class="card_student__figcaption">
                            <strong class="card_student__name">
                                {{ $student->firstname }} <span>{{ $student->lastname }}</span>
                            </strong>
                            <span class="card_student__profession">
                                {{ $student->profession }}
                            </span>
                        </figcaption>
                    </figure>
                    <div class="card_student__fake-link">
                        <span class="card_student__fake-link__text">@lang('students.view1')</span>
                    </div>
                </a>
            </li>
            @endforeach

            <!-- TODO : En PHP, compter le nombre d’anciens étudiants avec un modulo, si le nombre de li%3 == 2, ajouter un li vide, sinon rien
            <li class="former-students__item" style="width: 19.6875em"></li>-->

        </ul>
    </div>
</section>

<div class="redirect">
    <div class="redirect-wrapper">
        <strong class="redirect__title">Pour pouvoir exercer l’un de ces métiers, n’hésites pas à t’inscrire dans notre école pour y recevoir la formation nécessaire..</strong>
        <ul class="redirect__list">
            <li class="redirect__item">
                <a href="#" class="redirect__link" title="">S’inscrire à la HEPL en infographie</a>
            </li>
        </ul>
    </div>
</div>

