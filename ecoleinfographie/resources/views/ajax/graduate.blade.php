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
