<table class="program-table program-table--all">
	<thead class="program-table__thead">
	<thead class="program-table__thead">
	<tr>
		<th class="program-table__orientation" data-sort="string"><span>@lang('programCourse.orientation')</span></th>
		<th class="program-table__course" data-sort="string" data-sort-default="desc">
			<span>@lang('programCourse.nameOfCourse')</span></th>
		<th class="program-table__hour" data-sort="int"><span>@lang('programCourse.hours')</span></th>
		<th class="program-table__ects" data-sort="int"><span>@lang('programCourse.credits')</span></th>
		<th class="program-table__quad"><span>@lang('programCourse.quadrimester')</span></th>
	</tr>
	</thead>
	<tbody class="program-table__tbody">
	@foreach($getAllCoursesBloc1 as $key => $course)
		<tr class="link-row" data-href="{{ url('cours/'.$course->slug) }}">
			<td class="program-table__orientation">{{ $orientations[$course->orientation] }}</td>
			<td class="program-table__course">
				<a href="{{ url('cours/'.$course->slug) }}" class="program-table__course__link">
					<span class="program-table__course__name">{{ $course->title }}</span>
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
