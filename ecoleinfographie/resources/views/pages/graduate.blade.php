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
            <li class="index-rea__filter__item active">
                <a href="#tous" class="index-rea__filter__link">Tous</a>
            </li>
            <li class="index-rea__filter__item">
                <a href="#3D" class="index-rea__filter__link">3D/Vidéo</a>
            </li>
            <li class="index-rea__filter__item">
                <a href="#dg" class="index-rea__filter__link">Design graphique</a>
            </li>
            <li class="index-rea__filter__item">
                <a href="#web" class="index-rea__filter__link">Web</a>
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
                </div>
            </li>
            @endforeach
        </ul>

        {{--{!! $students->render() !!}--}}

        <button id="load-more" data-next-page="{{ $students->nextPageUrl() }}" style="padding: .6em 1.5em; color: #FFF; background-color: lightslategrey; text-transform: uppercase; text-align: center">Charger plus</button>

    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#load-more').on('click', function(e){
                e.preventDefault();
                var page = $(this).data('next-page');
                if (page !== null){
                    /*$.get(page, function (data) {
                        $('.former-students__list').append(data.students);
                        $('#load-more').data('next-page', data.next_page);
                    })*/
                    $.ajax({
                        url: page,
                        beforeSend: function () {
                            $('#load-more').addClass('test');
                        },
												success: function (data) {
                            $('.former-students__list').append(data.students);
                            $('#load-more').data('next-page', data.next_page);
                            $('#load-more').removeClass('test');
                        },
										})
                }
            })
        })
    </script>

@endsection
