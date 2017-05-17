<div class="blog-pagination">
	{{-- Previous Page Link --}}
    <?php
    if (Request::has('search')) {
        $param = '&search=' . Request::get('search');
    } elseif (Request::has('category')) {
        $param = '&category=' . Request::get('category');
    } else {
        $param = '';
    }
    ;?>


	@if ($paginator->onFirstPage())
		<span class="blog-pagination__button blog-pagination__button--prev blog-pagination__button--noclick" rel="prev">
			<span class="blog-pagination__button--hidden">Page </span><span>Précédent</span>
		</span>
	@else
		<a href="{{ $paginator->previousPageUrl() . $param . '#anchor' }}"
			 class="blog-pagination__button blog-pagination__button--prev" rel="prev">
			<span class="blog-pagination__button--hidden">Page </span><span>Précédent</span>
		</a>
	@endif

	{{-- Next Page Link --}}
	@if ($paginator->hasMorePages())
		<a href="{{ $paginator->nextPageUrl() . $param . '#anchor'}}" class="blog-pagination__button blog-pagination__button--next"
			 rel="prev">
			<span class="blog-pagination__button--hidden">Page </span><span>Suivant</span>
		</a>
	@else
		<span class="blog-pagination__button blog-pagination__button--next blog-pagination__button--noclick" rel="prev">
			<span class="blog-pagination__button--hidden">Page </span><span>Précédent</span>
		</span>
	@endif



	@if ($paginator->hasPages())
		<ul class="blog-pagination__list">
			{{-- Previous Page Link --}}
			@if ($paginator->onFirstPage())
			@else
				<li class="blog-pagination__item">
					<a class="blog-pagination__link" href="{{ Route(Route::currentRouteName()) .'?page=1' . $param . '#anchor'}}"
						 rel="prev">
						&laquo;
					</a>
				</li>
			@endif

			{{-- Pagination Elements --}}
			@foreach ($elements as $element)
				{{-- "Three Dots" Separator --}}
				@if (is_string($element))
					<li class="disabled"><span>{{ $element }}</span></li>
				@endif

				{{-- Array Of Links --}}
				@if (is_array($element))
					@foreach ($element as $page => $url)
						@if ($page == $paginator->currentPage())
							<li class="blog-pagination__item"><span
												class="blog-pagination__link blog-pagination__link--active">{{ $page }}</span></li>
						@else
							<li class="blog-pagination__item">
								<a class="blog-pagination__link" href="{{ $url . $param }}#anchor">{{ $page }}</a>
							</li>
						@endif
					@endforeach
				@endif
			@endforeach

			{{-- Next Page Link --}}

			@if ($paginator->hasMorePages())
				<li class="blog-pagination__item">
					<a class="blog-pagination__link"
						 href="
                    {{ Route(Route::currentRouteName()) . '?page=' . $paginator->lastPage() . $param . '#anchor' }}"
						 rel="next">
						&raquo;
					</a>
				</li>
			@endif
		</ul>
	@endif


</div>
