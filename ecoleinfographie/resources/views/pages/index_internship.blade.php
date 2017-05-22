@extends('layout')
@section('header')
	@include('partials.header-min')
@endsection

@section('class', 'internship')

@section('content')

	<div class="breadcrumb">
		<ol class="breadcrumb__list" itemscope itemtype="http://schema.org/BreadcrumbList">
			<li class="breadcrumb__item" itemprop="itemListElement" itemscope
					itemtype="http://schema.org/ListItem">
				<a href="#" class="breadcrumb__link breadcrumb__link--home" itemscope itemtype="http://schema.org/Thing"
					 itemprop="item">
					<span itemprop="name">Page d’accueil</span>
				</a>
				<meta itemprop="position" content="1" />
			</li>
			<li class="breadcrumb__item" itemprop="itemListElement" itemscope
					itemtype="http://schema.org/ListItem">
				<a href="{{ Route('internship') }}" class="breadcrumb__link breadcrumb__link--active" itemscope itemtype="http://schema.org/Thing"
					 itemprop="item">
					<span itemprop="name">@lang('internship.title')</span>
				</a>
				<meta itemprop="position" content="2" />
			</li>
		</ol>
	</div>

	<section class="propose">
		<h2 role="heading" aria-level="2" class="propose__title">Proposer une offre de stage</h2>
		<p class="propose__paragraph">Maecenas tincidunt iaculis consectetur. Quisque quis suscipit orci, et tincidunt nunc. Mauris arcu lorem, aliquam vitae aliquet ac, egestas ut nisl. Sed bibendum ac justo non consectetur. Duis eleifend dolor enim, sed rutrum est dictum ut. Nulla neque risus, mattis pretium vulputate eu, ultrices ac elit. Vivamus in nunc nec ipsum luctus vestibulum. Pellentesque maximus lorem lobortis, vestibulum ante ac, efficitur augue. Quisque varius leo vitae aliquam volutpat.
		</p>
		<div class="propose__infos">
			<span class="propose__info propose__info--duration">Durée de <strong>12</strong> semaines</span>
			<span class="propose__info propose__info--date">Du <strong>13</strong> janvier au <strong>30</strong> mars</span>
			<span class="propose__info propose__info--convention"><strong>Signature</strong><br/> d’une convention</span>
		</div>
	</section>

	<section class="form">
		<div class="form__container">
			<h2 role="heading" aria-level="2" class="form__title">Déposer une offre</h2>
			<p class="form__paragraph">Vous reçevrez un email de confirmation de la part du professeur responsable une fois que votre offre aura été validée. Elle sera ensuite transmise aux élèves.</p>
			<div class="form__button-container" id="form">
				<button class="form__button form__button--detail {{ Request::get('form') !== 'pdf' ? 'form__button--active' : '' }}">
					<span class="form__button__label">Je remplis un formulaire détaillé</span>
				</button>
				<button class="form__button form__button--pdf {{ Request::get('form') == 'pdf' ? 'form__button--active' : '' }}">
					<span class="form__button__label">J’envoie une offre au format PDF</span>
				</button>
			</div>
		</div>

		<div class="tab-wrapper">
			<div class="tab tab--1 {{ Request::get('form') !== 'pdf' ? 'active' : '' }}">
				{{ Form::open([ 'method' => 'POST', 'class' => 'form-full', 'route' => ['mail-internship-full']]) }}
				<div class="form__container">
					<div class="form__block">
						<div class="form-float-left">
							@if ($errors->has('name'))
								<span class="form-error">
									{{ $errors->first('name') }}
								</span>
							@endif
						<div class="form__wrapper form__wrapper--col2 form__wrapper--left">
							<label for="name" class="form__label">Votre nom</label>
							<input type="text" name="name" required id="name" class="form__input floatLabel {{ $errors->has('name') ? 'error-input' : '' }}" value="{{ old('name') }}">
						</div>
						</div>
						<div class="form-float-right">
							@if ($errors->has('company'))
								<span class="form-error">
									{{ $errors->first('company') }}
								</span>
							@endif
						<div class="form__wrapper form__wrapper--col2 form__wrapper--right">
							<label for="company" class="form__label">Nom de l’entreprise concernée</label>
							<input type="text" name="company" required id="company" class="form__input floatLabel {{ $errors->has('company') ? 'error-input' : '' }}" value="{{ old('company') }}">
						</div>
						</div>
					</div>
					<div class="form__block">
						@if ($errors->has('subject'))
							<span class="form-error">
								{{ $errors->first('subject') }}
							</span>
						@endif
						<div class="form__wrapper">
							<label for="subject" class="form__label">Quel est le sujet de votre demande ?</label>
							<input type="text" name="subject" required id="subject" class="form__input floatLabel {{ $errors->has('subject') ? 'error-input' : '' }}" value="{{ old('subject') }}">
						</div>
					</div>
					<div class="form__block">
						@if ($errors->has('email'))
						<span class="form-error">
							{{ $errors->first('email') }}
						</span>
						@endif
						<div class="form__wrapper">
							<label for="email" class="form__label">Quel est votre adresse e-mail ?</label>
							<input type="email" name="email" required id="email" class="form__input floatLabel {{ $errors->has('email') ? 'error-input' : '' }}" value="{{ old('email') }}">
						</div>
					</div>
					<div class="form__block">
						<div class="form__wrapper">
							<span for="recipient" class="form__fakeLabel">À quelle option s’adresse votre offre&nbsp;?</span>
							<span class="form-error">
								{{ $errors->first('cbox1') }}
							</span>
							<div class="form__checkbox-btn">
								<label for="cbox1" class="form__labelCheckbox">
									<span class="form__labelCheckbox__span">3D et Audiovisuel</span>
									<input type="checkbox" id="cbox1" name="cbox1" value="3D" class="form__checkbox">
									<div class="form__control-indicator"></div>
								</label>
							</div>
							<div class="form__checkbox-btn">
								<label for="cbox2" class="form__labelCheckbox">
									<span class="form__labelCheckbox__span">Design graphique</span>
									<input type="checkbox" id="cbox2" name="cbox2" value="2D" class="form__checkbox">
									<div class="form__control-indicator"></div>
								</label>
							</div>
							<div class="form__checkbox-btn">
								<label for="cbox3" class="form__labelCheckbox">
									<span class="form__labelCheckbox__span">Web</span>
									<input type="checkbox" id="cbox3" name="cbox3" value="WEB" class="form__checkbox">
									<div class="form__control-indicator"></div>
								</label>
							</div>
						</div>
					</div>
					@if ($errors->has('description'))
						<span class="form-error">
							{{ $errors->first('description') }}
						</span>
					@endif
					<div class="form__block">
						<div class="form__wrapperTextarea">
							<label for="description" class="form__labelTextarea">Décrivez votre entreprise en quelques mots ?</label>
							<textarea name="description" id="description" required class="form__textarea {{ $errors->has('description') ? 'error-input' : '' }}">{{ old('description') }}</textarea>
						</div>
					</div>
					@if ($errors->has('profils'))
						<span class="form-error">
							{{ $errors->first('profils') }}
						</span>
					@endif
					<div class="form__block">
						<div class="form__wrapperTextarea">
							<label for="profils" class="form__labelTextarea">Quels sont les profils que vous recherchez&nbsp;?</label>
							<textarea name="profils" id="profils" required class="form__textarea {{ $errors->has('profils') ? 'error-input' : '' }}">{{ old('profils') }}</textarea>
						</div>
					</div>
					@if ($errors->has('proposition'))
						<span class="form-error">
							{{ $errors->first('proposition') }}
						</span>
					@endif
					<div class="form__block">
						<div class="form__wrapperTextarea">
							<label for="proposition" class="form__labelTextarea">Que proposez-vous&nbsp;?</label>
							<textarea name="proposition" required id="proposition" class="form__textarea {{ $errors->has('proposition') ? 'error-input' : '' }}">{{ old('proposition') }}</textarea>
						</div>
					</div>
					<p class="form-success">{!! session('success') !!}</p>
					<button class="form__submit">Envoyer l’offre de stage</button>
				</div>
				{{ Form::close() }}
			</div>

			<div class="tab tab--2 {{ Request::get('form') == 'pdf' ? 'active' : '' }}">
				{{ Form::open([ 'method' => 'POST', 'class' => 'form-pdf', 'route' => ['mail-internship-file'], 'files' => true]) }}
				<div class="form__container">
					<div class="form__block">
						<div class="form-float-left">
							@if ($errors->has('name-pdf'))
								<span class="form-error">
									{{ $errors->first('name-pdf') }}
								</span>
							@endif
							<div class="form__wrapper form__wrapper--col2 form__wrapper--left">
								<label for="name-pdf" class="form__label">Votre nom</label>
								<input type="text" name="name-pdf" required  id="name-pdf" class="form__input floatLabel {{ $errors->has('name-pdf') ? 'error-input' : '' }}" value="{{ old('name-pdf') }}">
							</div>
						</div>
						<div class="form-float-right">
							@if ($errors->has('company-pdf'))
								<span class="form-error">
									{{ $errors->first('company-pdf') }}
								</span>
							@endif
							<div class="form__wrapper form__wrapper--col2 form__wrapper--right">
								<label for="company-pdf" class="form__label">Nom de l’entreprise concernée</label>
								<input type="text" name="company-pdf" required  id="company-pdf" class="form__input floatLabel {{ $errors->has('company-pdf') ? 'error-input' : '' }}" value="{{ old('company-pdf') }}">
							</div>
						</div>
					</div>
					<div class="form__block">
						@if ($errors->has('subject-pdf'))
							<span class="form-error">
								{{ $errors->first('subject-pdf') }}
							</span>
						@endif
						<div class="form__wrapper">
							<label for="subject-pdf" class="form__label">Quel est le sujet de votre demande ?</label>
							<input type="text" name="subject-pdf" required  id="subject-pdf" class="form__input floatLabel {{ $errors->has('subject-pdf') ? 'error-input' : '' }}" value="{{ old('subject-pdf') }}">
						</div>
					</div>
					<div class="form__block">
						@if ($errors->has('email-pdf'))
							<span class="form-error">
								{{ $errors->first('email-pdf') }}
							</span>
						@endif
						<div class="form__wrapper">
							<label for="email-pdf" class="form__label">Quel est votre adresse e-mail ?</label>
							<input type="email" name="email-pdf" id="email-pdf" class="form__input floatLabel {{ $errors->has('email-pdf') ? 'error-input' : '' }}" value="{{ old('email-pdf') }}" required value="{{ old('email-pdf') }}">
						</div>
					</div>
					<div class="form__block">
						@if ($errors->has('file-pdf'))
							<span class="form-error">
								{{ $errors->first('file-pdf') }}
							</span>
						@endif
						<div class="form__wrapper form-wrapper--file">
							<input type="file" name="file-pdf" id="file-pdf" class="form__inputFile">
							<label for="file-pdf" class="form__labelFile"><span>Choisissez un fichier PDF</span></label>
						</div>
					</div>
					<div class="form__block">
						<div class="form__wrapper">
							<span for="recipient" class="form__fakeLabel">À quelle option s’adresse votre offre&nbsp;?</span>
							<span class="form-error">
								{{ $errors->first('cbox1-pdf') }}
							</span>
							<div class="form__checkbox-btn">
								<label for="cbox1-pdf" class="form__labelCheckbox">
									<span class="form__labelCheckbox__span">3D et Audiovisuel</span>
									<input type="checkbox" name="cbox1-pdf" id="cbox1-pdf" value="3D-pdf" class="form__checkbox">
									<div class="form__control-indicator"></div>
								</label>
							</div>
							<div class="form__checkbox-btn">
								<label for="cbox2-pdf" class="form__labelCheckbox">
									<span class="form__labelCheckbox__span">Design graphique</span>
									<input type="checkbox" name="cbox2-pdf" id="cbox2-pdf" value="2D-pdf" class="form__checkbox">
									<div class="form__control-indicator"></div>
								</label>
							</div>
							<div class="form__checkbox-btn">
								<label for="cbox3-pdf" class="form__labelCheckbox">
									<span class="form__labelCheckbox__span">Web</span>
									<input type="checkbox" id="cbox3-pdf" value="WEB-pdf" name="cbox3-pdf" class="form__checkbox">
									<div class="form__control-indicator"></div>
								</label>
							</div>
						</div>
					</div>
					@if ($errors->has('description-pdf'))
						<span class="form-error">
							{{ $errors->first('description-pdf') }}
						</span>
					@endif
					<div class="form__block">
						<div class="form__wrapperTextarea">
							<label for="description-pdf" class="form__labelTextarea">Vous désirez ajouter quelque chose&nbsp;?</label>
							<textarea name="description-pdf" id="description-pdf" class="form__textarea {{ $errors->has('description-pdf') ? 'error-input' : '' }}">{{ old('description-pdf') }}</textarea>
						</div>
					</div>
					<p class="form-success">{!! session('success') !!}</p>
					<button class="form__submit">Envoyer l’offre de stage</button>
				</div>
				{{ Form::close() }}
			</div>
		</div>

	</section>






@endsection
