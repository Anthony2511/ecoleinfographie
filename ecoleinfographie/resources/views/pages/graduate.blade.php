@extends('layout')
@section('header')
    @include('partials.header-min')
@endsection

@section('class', 'graduate')

@section('content')
    @include('partials.breadcrumb')


    <section class="graduateList">
        <h2 role="heading" aria-level="2" class="graduateList__title">Nos anciens diplômés</h2>

        <ul class="index-rea__filter">
            <li class="index-rea__filter__item <?php echo (Request::get('orientation') == '') ? 'active' : '' ;?>">
                <a href="{{ url(trans('url.graduated')) }}" class="index-rea__filter__link">Tous</a>
            </li>
            <li class="index-rea__filter__item <?php echo (Request::get('orientation') == '3D') ? 'active' : '' ;?>">
                <a href="?orientation=3D" class="index-rea__filter__link">3D/Vidéo</a>
            </li>
            <li class="index-rea__filter__item <?php echo (Request::get('orientation') == '2D') ? 'active' : '' ;?>">
                <a href="?orientation=2D" class="index-rea__filter__link">Design graphique</a>
            </li>
            <li class="index-rea__filter__item <?php echo (Request::get('orientation') == 'web') ? 'active' : '' ;?>">
                <a href="?orientation=web" class="index-rea__filter__link">Web</a>
            </li>
            <li class="index-rea__filter__item no-effect <?php echo (Request::get('request') == '') ? 'active' : '' ;?>">
                <form action="{{ Request::url() }}" method="get" class="select-form">
                    <select name="year" id="year" class="select-year" onchange="this.form.submit()" >
                        <option value="">Années</option>
                        @foreach($selectYear as $year)
                            <option value="{{ $year->year }}"  <?php if($year->year == Request::get('year')){echo 'selected'; } ;?>  >{{ $year->year }}</option>
                        @endforeach
                    </select>
                    <input type="submit" value="Envoyer" class="select-submit">
                    <input type="hidden" name="orientation" value="{{ Request::get('orientation') }}">
                </form>
            </li>
        </ul>


        <ul class="former-students__list">
            @foreach($students as $student)
            <li class="former-students__item">
                <div class="card_student">
                    <figure class="card_student__figure">
                        <div class="card_student__picture-wrapper">
                            <img class="card_student__picture" src="{{ $student->getImageStudent('_cards.jpg') }}" width="313" height="180" alt="Photo de {{ $student->fullname }}, étudiant diplômé de la Haute École de la Province de Liège en {{ $student->year }}." >
                        </div>
                        <figcaption class="card_student__figcaption">
                            <strong class="card_student__name">
                                {{ $student->firstname }} <span>{{ $student->lastname }}</span>
                            </strong>
                            <span class="card_student__year">
                                Diplômé en {{ $student->year }}
                            </span>
                            <span class="card_student__profession">
                                En {{ $orientations[$student->orientation] }}
                            </span>
                        </figcaption>
                    </figure>
                    @if($student->has_interview === 1)
                        <div class="card_student__fake-link">
                            <span class="card_student__fake-link__text">@lang('students.view1')</span>
                        </div>
                        <a href="{{ url(trans('url.students')) . '/' . $student->slug }}" class="card_student__real-link"><span>Voir le parcours de {{ $student->fullname }}</span></a>

                    @elseif(!empty($student->social))
                        @foreach($student->social as $row)

                            @if( $row['type'] === 'portfolio')
                                <div class="card_student__fake-link">
                                    <span class="card_student__fake-link__text">@lang('students.view2')</span>
                                </div>
                                <a href="{{ $row['url'] }}" class="card_student__real-link"><span>Voir le parcours de {{ $student->fullname }}</span></a>
                            @endif
                        @endforeach
                    @endif
                </div>
            </li>
            @endforeach
        </ul>

        {{--{!! $students->render() !!}--}}
        <div class="load-more__container">
            {{--<a href="{{ $students->nextPageUrl().'&orientation='.Request::get('orientation') }} " class="load-more" id="load-more">--}}
            <a href="{{ $students->nextPageUrl() . $getLoadMoreLink }} " class="load-more" id="load-more">
						<span class="load-more__label">
							<span class="load-more__label-text">Charger plus</span>
							<span class="load-more__hidden">d’anciens étudiants diplômés</span>
						</span>
					  </a>
        </div>

    </section>
@endsection
