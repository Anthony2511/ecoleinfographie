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
