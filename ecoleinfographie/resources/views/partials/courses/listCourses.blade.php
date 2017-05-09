<section class="program">

    <?php $orientations = array(
        'all' => trans('programCourse.all'),
        '2D'  => trans('programCourse.2D'),
        '3D'  => trans('programCourse.3D'),
        'web' => trans('programCourse.web')
    ); ?>


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
					@include('partials.courses.webBloc1')
					@include('partials.courses.allBloc1')
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
					@include('partials.courses.webBloc2')
					@include('partials.courses.allBloc2')
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
					@include('partials.courses.webBloc3')
					@include('partials.courses.allBloc3')
				</div>

			</div>
		</div>
	</section>
</section>

<div class="redirect">
	<strong class="redirect__title">Ce programme t'as plus&nbsp;? N’hésites pas à t’inscrire ou à consulter le programme
																	des autres options.</strong>
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
