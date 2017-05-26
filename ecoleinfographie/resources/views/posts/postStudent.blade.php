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
				<span>@lang('students.titlePost') </span>
				<strong>{{ $student->fullname  }}</strong>
			</h2>
			<div class="former-interview__question-container">
				<?php $interview = json_decode($student->interview, true); ?>
				@foreach($interview as $row)
				<section class="former-interview__question">
					<h3>{{ $row['question'] }}</h3>
					<?php echo '<p>' . preg_replace("~[\r\n]+~", '</p><p>', $row['response']) . '</p>' ;?>
				</section>
				@endforeach
			</div>
		</article>
		<div class="former-info__container">
			<aside class="former-info" id="sticky-sidebar" itemscope itemtype="http://schema.org/Person">
				<img class="former-info__pics" src="{{ $studentImageAside }}" width="200" height="200" alt="@lang('students.alt1') {{ $student->fullname }}, @lang('students.alt2') {{ $orientations[$student->orientation] }}">
				<h2 role="heading" aria-level="2" class="former-info__name">
					<span class="former-info__name--hidden">@lang('students.someInfos') </span>
					<span itemprop="name">{{ $student->fullname }}</span></h2>
				<span class="former-info__job" itemprop="jobTitle">{{ $student->profession }}</span>
				<span class="former-info__diploma">@lang('students.graduadeIn') {{ $student->year }} - {{ $orientations[$student->orientation] }}</span>


				@foreach($student->company as $row)
					@if($student->is_freelance == 1)
						<span class="former-info__company">
							@lang('students.workAs') freelance
						</span>
					@elseif(empty($row['url']))
						<span class="former-info__company">
							@lang('students.workFor') <span itemprop="worksFor">{{ $row['name'] }}</span>
						</span>
					@else
						<span class="former-info__company">
							@lang('students.workFor') <a href="{{ $row['url'] }}"><span itemprop="worksFor">{{ $row['name'] }}</span></a>
						</span>
					@endif
				@endforeach

				<ul class="social-list-circle">


					@if(!empty($student->social))
						@foreach($student->social as $row)
							<li class="social-list-circle__item">
								<a href="{{ $row['url'] }}" class="social-list-circle__link {{ $row['type'] }}" rel="me" title="Vers le {{ $row['type'] }} de {{ $student->fullname }}"><span>Vers le {{ strtoupper($row['type']) }} de {{ $student->fullname }}</span></a>
							</li>
						@endforeach
					@endif

				</ul>
			</aside>
		</div>
	</div>

@endsection

