<div class="index-rea__container">
	<ul class="index-rea__filter" id="anchor">
		<li class="index-rea__filter__item <?php echo (Request::get('orientation') == '') ? 'active' : '' ;?>">
			<a href="{{ url(trans('url.works')) }}" class="index-rea__filter__link">Tous</a>
		</li>
		<li class="index-rea__filter__item <?php echo (Request::get('orientation') == '3D') ? 'active' : '' ;?>">
			<a href="?orientation=3D#anchor" class="index-rea__filter__link">3D et audiovisuel</a>
		</li>
		<li class="index-rea__filter__item <?php echo (Request::get('orientation') == '2D') ? 'active' : '' ;?>">
			<a href="?orientation=2D#anchor" class="index-rea__filter__link">Design graphique</a>
		</li>
		<li class="index-rea__filter__item <?php echo (Request::get('orientation') == 'web') ? 'active' : '' ;?>">
			<a href="?orientation=web#anchor" class="index-rea__filter__link">Web</a>
		</li>
	</ul>
	<section class="reas-wrapper">
		<h2 role="heading" aria-level="2" class="reas-wrapper__title">La liste des travaux de nos étudiants</h2>


		<ul class="reas">
			@include('partials.realisations.item-realisations')
		</ul>


	</section>
</div>

<div class="load-more__container">
	<noscript>
		{!! $works->render() !!}
	</noscript>
	<a href="{{ $works->nextPageUrl() . $getLoadMoreLink }}" class="load-more" id="load-more">
		<span class="load-more__label">
			<span class="load-more__label-text">Charger plus</span>
			<span class="load-more__hidden">d’anciens étudiants diplômés</span>
		</span>
	</a>
</div>
