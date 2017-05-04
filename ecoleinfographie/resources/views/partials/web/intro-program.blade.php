<section class="program">
    <div class="program__container-top">
        <h2 role="heading" aria-level="2" class="program__title">
            <span>@lang('programCourse.discover') </span>
            <strong>@lang('programCourse.title')</strong>
        </h2>
        <div class="program__redirect">
            <a href="#b1" class="program__redirect-link">
                <figure class="program__redirect__figure">
                    <div class="program__redirect__img-wrapper">
                        <img class="program__redirect__img" src="./img/program-redirect--1.jpg" width="315" height="202" alt="Bureau vue de haut contenant des images en rapport avec l’infographie (smartphone, livre, brochures, crayons,…)">
                    </div>
                    <figcaption class="program__redirect__figcaption">
                        <span>@lang('programCourse.theProgram') </span>
                        <strong>@lang('programCourse.firstbloc')</strong>
                    </figcaption>
                </figure>
            </a>
            <a href="#b2" class="program__redirect-link">
                <figure class="program__redirect__figure">
                    <div class="program__redirect__img-wrapper">
                        <img class="program__redirect__img" src="./img/program-redirect--2.jpg" width="315" height="202" alt="Un groupe de personne réunit autour d’une table qui contient des éléments en rapport avec l’infographie (smartphone, crayons, ordinateur,…)">
                    </div>
                    <figcaption class="program__redirect__figcaption">
                        <span>@lang('programCourse.theProgram') </span>
                        <strong>@lang('programCourse.secondbloc')</strong>
                    </figcaption>
                </figure>
            </a>
            <a href="#b3" class="program__redirect-link">
                <figure class="program__redirect__figure">
                    <div class="program__redirect__img-wrapper">
                        <img class="program__redirect__img" src="./img/program-redirect--3.jpg" width="315" height="202" alt="Deux personnes travaillant ensemble sur un visuel sur un ordinateur">
                    </div>
                    <figcaption class="program__redirect__figcaption">
                        <span>@lang('programCourse.theProgram') </span>
                        <strong>@lang('programCourse.thirdbloc')</strong>
                    </figcaption>
                </figure>
            </a>
        </div>
    </div>


    <section class="program-bloc program-bloc--1 option-visible">
        <div class="program-bloc__wrapper">
            <h3 role="heading" aria-level="3" class="program-bloc__title">@lang('programCourse.thefirstbloc')</h3>
            <span class="program-bloc__text">@lang('programCourse.thefirstblocintro')</span>
            <span class="program-bloc__text">@lang('programCourse.clicOnCourseInfo')</span>
            <div class="probram-bloc__container">

                <div class="program-bloc__filter">
                    <span class="program-bloc__filter-title">@lang('programCourse.filter')</span>
                    <button class="program-bloc__button program-bloc__button--all">@lang('programCourse.allCourses')</button>
                    <button class="program-bloc__button program-bloc__button--option program-bloc__button--active">@lang('programCourse.webOnly')</button>
                </div>

                <div class="program-table__container">
                    <table class="program-table program-table--option">
                        <thead class="program-table__thead">
                        <tr>
                            <th class="program-table__orientation" data-sort="string"><span>@lang('programCourse.orientation')</span></th>
                            <th class="program-table__course" data-sort="string" data-sort-default="desc"><span>@lang('programCourse.nameOfCourse')</span></th>
                            <th class="program-table__hour" data-sort="int"><span>@lang('programCourse.hours')</span></th>
                            <th class="program-table__ects" data-sort="int"><span>@lang('programCourse.credits')</span></th>
                            <th class="program-table__quad"><span>@lang('programCourse.quadrimester')</span></th>
                        </tr>
                        </thead>
                        <tbody class="program-table__tbody">

                        @foreach($getWebCoursesBloc1 as $key => $course)
                            <tr class="link-row" data-href="temp-page-cours" >
                                <td class="program-table__orientation">{{ $course->orientation }}</td>
                                <td class="program-table__course">
                                    <a href="{{ $course->slug }}" class="program-table__course__link">
                                        <span class="program-table__course__name">{{ $course->name }}</span>
                                    </a>
                                    <span class="program-table__course__desc">{{ $course->shortdescription }}</span>
                                </td>
                                <td class="program-table__hour"><span>{{ $course->duration }}</span></td>
                                <td class="program-table__ects"><span>{{ $course->ects }}</span></td>
                                <td class="program-table__quad"><span>{{ $course->quadrimester }}</span></td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                    <table class="program-table program-table--all">
                        <thead class="program-table__thead">
                        <thead class="program-table__thead">
                        <tr>
                            <th class="program-table__orientation" data-sort="string"><span>@lang('programCourse.orientation')</span></th>
                            <th class="program-table__course" data-sort="string" data-sort-default="desc"><span>@lang('programCourse.nameOfCourse')</span></th>
                            <th class="program-table__hour" data-sort="int"><span>@lang('programCourse.hours')</span></th>
                            <th class="program-table__ects" data-sort="int"><span>@lang('programCourse.credits')</span></th>
                            <th class="program-table__quad"><span>@lang('programCourse.quadrimester')</span></th>
                        </tr>
                        </thead>
                        <tbody class="program-table__tbody">
                        @foreach($getAllCoursesBloc1 as $key => $course)
                            <tr class="link-row" data-href="temp-page-cours" >
                                <td class="program-table__orientation">{{ $course->orientation }}</td>
                                <td class="program-table__course">
                                    <a href="temp-page-cours" class="program-table__course__link">
                                        <span class="program-table__course__name">{{ $course->name }}</span>
                                    </a>
                                    <span class="program-table__course__desc">{{ $course->shortdescription }}</span>
                                </td>
                                <td class="program-table__hour"><span>{{ $course->duration }}</span></td>
                                <td class="program-table__ects"><span>{{ $course->ects }}</span></td>
                                <td class="program-table__quad"><span>{{ $course->quadrimester }}</span></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </section>
    <section class="program-bloc program-bloc--2 option-visible">
        <div class="program-bloc__wrapper">
            <h3 role="heading" aria-level="3" class="program-bloc__title">@lang('programCourse.thesecondbloc')</h3>
            <span class="program-bloc__text">@lang('programCourse.thesecondblocintro')</span>
            <span class="program-bloc__text">@lang('programCourse.clicOnCourseInfo')</span>
            <div class="probram-bloc__container">

                <div class="program-bloc__filter">
                    <span class="program-bloc__filter-title">@lang('programCourse.filter')</span>
                    <button class="program-bloc__button program-bloc__button--all">@lang('programCourse.allCourses')</button>
                    <button class="program-bloc__button program-bloc__button--option program-bloc__button--active">@lang('programCourse.webOnly')</button>
                </div>

                <div class="program-table__container">
                    <table class="program-table program-table--option">
                        <thead class="program-table__thead">
                            <tr>
                                <th class="program-table__orientation" data-sort="string"><span>@lang('programCourse.orientation')</span></th>
                                <th class="program-table__course" data-sort="string" data-sort-default="desc"><span>@lang('programCourse.nameOfCourse')</span></th>
                                <th class="program-table__hour" data-sort="int"><span>@lang('programCourse.hours')</span></th>
                                <th class="program-table__ects" data-sort="int"><span>@lang('programCourse.credits')</span></th>
                                <th class="program-table__quad"><span>@lang('programCourse.quadrimester')</span></th>
                            </tr>
                        </thead>
                        <tbody class="program-table__tbody">
                        @foreach($getWebCoursesBloc2 as $key => $course)
                            <tr class="link-row" data-href="temp-page-cours" >
                                <td class="program-table__orientation">{{ $course->orientation }}</td>
                                <td class="program-table__course">
                                    <a href="temp-page-cours" class="program-table__course__link">
                                        <span class="program-table__course__name">{{ $course->name }}</span>
                                    </a>
                                    <span class="program-table__course__desc">{{ $course->shortdescription }}</span>
                                </td>
                                <td class="program-table__hour"><span>{{ $course->duration }}</span></td>
                                <td class="program-table__ects"><span>{{ $course->ects }}</span></td>
                                <td class="program-table__quad"><span>{{ $course->quadrimester }}</span></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <table class="program-table program-table--all">
                        <thead class="program-table__thead">
                        <tr>
                            <th class="program-table__orientation" data-sort="string"><span>@lang('programCourse.orientation')</span></th>
                            <th class="program-table__course" data-sort="string" data-sort-default="desc"><span>@lang('programCourse.nameOfCourse')</span></th>
                            <th class="program-table__hour" data-sort="int"><span>@lang('programCourse.hours')</span></th>
                            <th class="program-table__ects" data-sort="int"><span>@lang('programCourse.credits')</span></th>
                            <th class="program-table__quad"><span>@lang('programCourse.quadrimester')</span></th>
                        </tr>
                        </thead>
                        <tbody class="program-table__tbody">
                        @foreach($getAllCoursesBloc2 as $key => $course)
                            <tr class="link-row" data-href="temp-page-cours" >
                                <td class="program-table__orientation">{{ $course->orientation }}</td>
                                <td class="program-table__course">
                                    <a href="temp-page-cours" class="program-table__course__link">
                                        <span class="program-table__course__name">{{ $course->name }}</span>
                                    </a>
                                    <span class="program-table__course__desc">{{ $course->shortdescription }}</span>
                                </td>
                                <td class="program-table__hour"><span>{{ $course->duration }}</span></td>
                                <td class="program-table__ects"><span>{{ $course->ects }}</span></td>
                                <td class="program-table__quad"><span>{{ $course->quadrimester }}</span></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </section>
    <section class="program-bloc program-bloc--3 option-visible">
        <div class="program-bloc__wrapper">
            <h3 role="heading" aria-level="3" class="program-bloc__title">@lang('programCourse.thethirdbloc')</h3>
            <span class="program-bloc__text">@lang('programCourse.thethirdblocintro')</span>
            <span class="program-bloc__text">@lang('programCourse.clicOnCourseInfo')</span>
            <div class="probram-bloc__container">

                <div class="program-bloc__filter">
                    <span class="program-bloc__filter-title">@lang('programCourse.filter')</span>
                    <button class="program-bloc__button program-bloc__button--all">@lang('programCourse.allCourses')</button>
                    <button class="program-bloc__button program-bloc__button--option program-bloc__button--active">@lang('programCourse.webOnly')</button>
                </div>

                <div class="program-table__container">
                    <table class="program-table program-table--option">
                        <thead class="program-table__thead">
                        <tr>
                            <th class="program-table__orientation" data-sort="string"><span>@lang('programCourse.orientation')</span></th>
                            <th class="program-table__course" data-sort="string" data-sort-default="desc"><span>@lang('programCourse.nameOfCourse')</span></th>
                            <th class="program-table__hour" data-sort="int"><span>@lang('programCourse.hours')</span></th>
                            <th class="program-table__ects" data-sort="int"><span>@lang('programCourse.credits')</span></th>
                            <th class="program-table__quad"><span>@lang('programCourse.quadrimester')</span></th>
                        </tr>
                        </thead>
                        <tbody class="program-table__tbody">
                        @foreach($getWebCoursesBloc3 as $key => $course)
                            <tr class="link-row" data-href="temp-page-cours" >
                                <td class="program-table__orientation">{{ $course->orientation }}</td>
                                <td class="program-table__course">
                                    <a href="temp-page-cours" class="program-table__course__link">
                                        <span class="program-table__course__name">{{ $course->name }}</span>
                                    </a>
                                    <span class="program-table__course__desc">{{ $course->shortdescription }}</span>
                                </td>
                                <td class="program-table__hour"><span>{{ $course->duration }}</span></td>
                                <td class="program-table__ects"><span>{{ $course->ects }}</span></td>
                                <td class="program-table__quad"><span>{{ $course->quadrimester }}</span></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <table class="program-table program-table--all">
                        <thead class="program-table__thead">
                        <tr>
                            <th class="program-table__orientation" data-sort="string"><span>@lang('programCourse.orientation')</span></th>
                            <th class="program-table__course" data-sort="string" data-sort-default="desc"><span>@lang('programCourse.nameOfCourse')</span></th>
                            <th class="program-table__hour" data-sort="int"><span>@lang('programCourse.hours')</span></th>
                            <th class="program-table__ects" data-sort="int"><span>@lang('programCourse.credits')</span></th>
                            <th class="program-table__quad"><span>@lang('programCourse.quadrimester')</span></th>
                        </tr>
                        </thead>
                        <tbody class="program-table__tbody">
                        @foreach($getAllCoursesBloc3 as $key => $course)
                            <tr class="link-row" data-href="temp-page-cours" >
                                <td class="program-table__orientation">{{ $course->orientation }}</td>
                                <td class="program-table__course">
                                    <a href="temp-page-cours" class="program-table__course__link">
                                        <span class="program-table__course__name">{{ $course->name }}</span>
                                    </a>
                                    <span class="program-table__course__desc">{{ $course->shortdescription }}</span>
                                </td>
                                <td class="program-table__hour"><span>{{ $course->duration }}</span></td>
                                <td class="program-table__ects"><span>{{ $course->ects }}</span></td>
                                <td class="program-table__quad"><span>{{ $course->quadrimester }}</span></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </section>
</section>
<div class="redirect">
    <strong class="redirect__title">Ce programme t'as plus&nbsp;? N’hésites pas à t’inscrire ou à consulter le programme des autres options.</strong>
    <ul class="redirect__list">
        <li class="redirect__item">
            <a href="#" class="redirect__link" title="">S’inscrire à la HEPL en infographie</a>
        </li>
        <li class="redirect__item">
            <a href="#" class="redirect__link" title="">Consulter le programme des cours de la 3D et l’audiovisuel</a>
        </li>
        <li class="redirect__item">
            <a href="#" class="redirect__link" title="">Consulter le programme des cours en design graphique</a>
        </li>
    </ul>
</div>
