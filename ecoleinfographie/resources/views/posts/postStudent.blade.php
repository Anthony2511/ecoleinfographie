@extends('layout')

@section('header')
	@include('partials.header-min')
@endsection

@section('class', 'student-post')

@section('content')
	@include('partials.breadcrumb')
	<div class="former-interview__container" >
		<article class="former-interview">
			<h2 role="heading" aria-level="2" class="former-interview__title">
				<span>Le parcours de </span>
				<strong>{{ $student->fullname  }}</strong>
			</h2>
			<div class="former-interview__question-container">
				<?php $interview = json_decode($student->interview, true); ?>
				@foreach($interview as $row)
				<section class="former-interview__question">
					<h3>{{ $row['question'] }}</h3>
					{{ $row['response'] }}
				</section>
				@endforeach
			</div>
		</article>
		<div class="former-info__container">
			<aside class="former-info" id="sticky-sidebar" itemscope itemtype="http://schema.org/Person">
				<img class="former-info__pics" src="{{ $studentImageAside }}" width="200" height="200" alt="@lang('students.alt1') {{ $student->fullname }}, @lang('students.alt2') {{ $orientations[$student->orientation] }}">
				<h2 role="heading" aria-level="2" class="former-info__name">
					<span class="former-info__name--hidden">Quelques informations sur </span>
					<span itemprop="name">{{ $student->fullname }}</span></h2>
				<span class="former-info__job" itemprop="jobTitle">{{ $student->profession }}</span>
				<span class="former-info__diploma">Diplômé en {{ $student->year }} - {{ $orientations[$student->orientation] }}</span>


				<?php $ratio = json_decode($student->company, true); ?>
				@foreach($ratio as $row)
					@if($student->is_freelance == 1)
						<span class="former-info__company">
							Travaille comme freelance
						</span>
					@elseif(empty($row['url']))
						<span class="former-info__company">
							Travaille chez <span itemprop="worksFor">{{ $row['name'] }}</span>
						</span>
					@else
						<span class="former-info__company">
							Travaille chez <a href="{{ $row['url'] }}"><span itemprop="worksFor">{{ $row['name'] }}</span></a>
						</span>
					@endif
				@endforeach

				<ul class="social-list-circle">
					<li class="social-list-circle__item">
						<a href="" class="social-list-circle__link facebook" rel="me"><span>Vers le Facebook de Kévin Dessouroux</span></a>
					</li><!--
                --><li class="social-list-circle__item">
						<a href="" class="social-list-circle__link twitter" rel="me"><span>Vers le Facebook de Kévin Dessouroux</span></a>
					</li><!--
                --><li class="social-list-circle__item">
						<a href="" class="social-list-circle__link pinterest" rel="me"><span>Vers le Facebook de Kévin Dessouroux</span></a>
					</li><!--
                --><li class="social-list-circle__item">
						<a href="" class="social-list-circle__link behance" rel="me"><span>Vers le Facebook de Kévin Dessouroux</span></a>
					</li><!--
                --><li class="social-list-circle__item">
						<a href="" class="social-list-circle__link dribble" rel="me"><span>Vers le Facebook de Kévin Dessouroux</span></a>
					</li><!--
                --><li class="social-list-circle__item">
						<a href="" class="social-list-circle__link youtube" rel="me"><span>Vers le Facebook de Kévin Dessouroux</span></a>
					</li><!--
                --><li class="social-list-circle__item">
						<a href="" class="social-list-circle__link vimeo" rel="me"><span>Vers le Facebook de Kévin Dessouroux</span></a>
					</li><!--
                --><li class="social-list-circle__item">
						<a href="" class="social-list-circle__link linkedin" rel="me"><span>Vers le Facebook de Kévin Dessouroux</span></a>
					</li><!--
                --><li class="social-list-circle__item">
						<a href="" class="social-list-circle__link portfolio" rel="me"><span>Vers le Facebook de Kévin Dessouroux</span></a>
					</li>
				</ul>
			</aside>
		</div>
	</div>

@endsection

