<div class="portfolio-home">
	<section class="portfolio-home__intro">
		<div class="portfolio-home__intro__wrapper">
			<h2 role="heading" aria-level="2" class="portfolio-home__intro__title">
				Nos étudiants réalisent des travaux fantastiques
			</h2>
			<p class="portfolio-home__intro__text">
				Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500. Le Lorem Ipsum est simplement du faux texte employé dans la composition.
			</p>
			<a href="{{ Route('realisations') }}" class="portfolio-home__intro__link">Voir les travaux de nos étudiants</a>
		</div>

		<div class="project__container-all">
			<div class="project__wrapper-top-inner">
				<div class="project__wrapper-top">
					<article class="project project--small project--3D">
						<figure class="project__figure">
							<img src="{{ $w3d->getImageWork('_middle.jpg') }}" width="522" height="436" alt="" class="project__img">
						</figure>
						<div class="project__infos-wrapper">
							<div class="project__infos-container">
								<span class="project__category">Métiers de la 3D et de l’audiovisuel</span>
								<h3 role="heading" aria-level="3" class="project__title">{{ $w3d->title }}</h3>
								<p class="project__description">Lorem ipsum dolor sit amet aspilicueta</p>
								<span class="project__author">Par
									@foreach($w3d->students as $student)
										{{ $student->fullname }}
									@endforeach
								</span>
							</div>
						</div>
						<a href="{{ Route('realisations') . '/' . $w3d->slug }}" class="project__link">
							<span>Voir la fiche de présentation {{ $w3d->title }}</span>
						</a>
					</article>
				</div>
			</div>
			<div class="project__wrapper">

				<article class="project project--middle project--2D">
					<figure class="project__figure">
						<img src="{{ $w2d->getImageWork('_small.jpg') }}" width="566" height="365" alt="" class="project__img">
					</figure>
					<div class="project__infos-wrapper">
						<div class="project__infos-container">
							<span class="project__category">Métiers du design graphique</span>
							<h3 role="heading" aria-level="3" class="project__title">{{ $w2d->title }}</h3>
							<p class="project__description">Lorem ipsum dolor sit amet aspilicueta</p>
							<span class="project__author">Par
								@foreach($w2d->students as $student)
									{{ $student->fullname }}
								@endforeach
							</span>
						</div>
					</div>
					<a href="{{ Route('realisations') . '/' . $w2d->slug }}" class="project__link">
						<span>Voir la fiche de présentation de {{ $w2d->title }}</span>
					</a>
				</article>


				<article class="project project--big project--web">
					<figure class="project__figure">
						<img src="{{ $wWeb->getImageWork('_big.jpg') }}" width="875" height="502" alt="" class="project__img">
					</figure>
					<div class="project__infos-wrapper">
						<div class="project__infos-container">
							<span class="project__category">Métiers du web</span>
							<h3 class="project__title">{{ $wWeb->title }}</h3>
							<p class="project__description">Un site web réalisé lors du cours de design web du bloc 2</p>
							<span class="project__author">Par
								@foreach($wWeb->students as $student)
									{{ $student->fullname }}
								@endforeach
							</span>
						</div>
					</div>
					<a href="{{ Route('realisations') . '/' . $wWeb->slug }}" class="project__link">
						<span>Voir la fiche de présentation de {{ $wWeb->title }}</span>
					</a>
				</article>
			</div>
		</div>
	</section>
</div>



