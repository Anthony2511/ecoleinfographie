@foreach($works as $work)
	<li class="reas__item">
		<a href="{{ url(trans('url.works')) . '/' . $work->slug }}" class="reas__link">
			<figure class="reas__figure">
				{{--<img class="reas__img" src="{{ $work->cover }}" width="" height="" alt="">--}}
				<div class="reas__img" role="img" style="background-image: url('{{ $work->getImageWork('_workIndex.jpg') }}');"></div>
				<figcaption class="reas__figcaption">
					<div class="reas__section">
						<span class="reas__section__name">
							<span class="reas__section__name-text">{{ $orientations[$work->orientation] }}</span>
						</span>
					</div>
					<div class="reas__desc">
						<div class="reas__desc-wrapper">
							<strong class="reas__desc__name">{{ $work->title }}</strong>
							<span class="reas__desc__author">
								Par
								@foreach($work->students as $student)
									{{ $student->fullname }}
								@endforeach
							</span>
						</div>
					</div>
				</figcaption>
			</figure>
		</a>
	</li>
@endforeach

