@extends('layout')
@section('header')
	@include('partials.header-min')
@endsection

@section('class', 'contact-us')

@section('content')

	<div class="breadcrumb">
		<ol class="breadcrumb__list" itemscope itemtype="http://schema.org/BreadcrumbList">
			<li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				<a href="#" class="breadcrumb__link breadcrumb__link--home" itemscope itemtype="http://schema.org/Thing"
					 itemprop="item">
					<span itemprop="name">Page d’accueil</span>
				</a>
				<meta itemprop="position" content="1"/>
			</li>
			<li class="breadcrumb__item" itemprop="itemListElement" itemscope
					itemtype="http://schema.org/ListItem">
				<a href="{{ Route('internship') }}" class="breadcrumb__link breadcrumb__link--active" itemscope
					 itemtype="http://schema.org/Thing"
					 itemprop="item">
					<span itemprop="name">@lang('contact.title')</span>
				</a>
				<meta itemprop="position" content="2"/>
			</li>
		</ol>
	</div>

	<section itemscope itemtype="http://schema.org/Organization" class="contact">
		<meta name="name" content="École d’infographie de la Province de Liège">
		<div class="contact__top-wrapper">
			<div class="contact__content-wrapper">
				<h2 role="heading" aria-level="2" class="contact__title">@lang('contact.title')</h2>
				<p class="contact__paragraph">@lang('contact.intro')</p>

				<ul class="responsible">
					<li class="responsible__item" itemprop="alumni" itemscope itemtype="http://schema.org/Person">
						<strong class="responsible__label">@lang('contact.res2d')</strong>
						<span class="responsible__name" itemprop="name">Véronique Etienne</span>
						<a href="mailto:{{ Config::get('settings.email_2d') }}" class="responsible__mail" itemprop="email">{{ Config::get('settings.email_2d') }}</a>
					</li>
					<li class="responsible__item" itemprop="alumni" itemscope itemtype="http://schema.org/Person">
						<strong class="responsible__label">@lang('contact.res3d')</strong>
						<span class="responsible__name" itemprop="name">Nicolas Claisses</span>
						<a href="mailto:{{ Config::get('settings.email_3d') }}" class="responsible__mail" itemprop="email">{{ Config::get('settings.email_3d') }}</a>
					</li>
					<li class="responsible__item" itemprop="alumni" itemscope itemtype="http://schema.org/Person">
						<strong class="responsible__label">@lang('contact.resWeb')</strong>
						<span class="responsible__name" itemprop="name">Dominique Vilain</span>
						<a href="mailto:{{ Config::get('settings.email_web') }}" class="responsible__mail" itemprop="email">{{ Config::get('settings.email_web') }}</a>
					</li>
				</ul>

				<link itemprop="url" href="http://ecoleinfographie.be">
				<ul class="social-list-circle">
					<li class="social-list-circle__item">
						<a href="{{ Config::get('settings.social_fb') }}" title="@lang('contact.to') Facebook" class="social-list-circle__link facebook" rel="me" itemprop="sameAs"><span>@lang('contact.goPage') Facebook @lang('contact.linkSchool')</span></a>
					</li>
					<li class="social-list-circle__item">
						<a href="{{ Config::get('settings.social_tw') }}" title="@lang('contact.to') Twitter" class="social-list-circle__link twitter" rel="me" itemprop="sameAs"><span>@lang('contact.goPage') Twitter @lang('contact.linkSchool')</span></a>
					</li>
					<li class="social-list-circle__item">
						<a href="{{ Config::get('settings.social_pinterest') }}" title="@lang('contact.to') Pinterest" class="social-list-circle__link pinterest" rel="me" itemprop="sameAs"><span>@lang('contact.goPage') Pinterest @lang('contact.linkSchool')</span></a>
					</li>
					<li class="social-list-circle__item">
						<a href="{{ Config::get('settings.social_behance') }}" title="@lang('contact.to') Behance" class="social-list-circle__link behance" rel="me" itemprop="sameAs"><span>@lang('contact.goPage') Behance @lang('contact.linkSchool')</span></a>
					</li>
					<li class="social-list-circle__item">
						<a href="{{ Config::get('settings.social_dribble') }}" class="social-list-circle__link dribble" title="@lang('contact.to') Dribble" rel="me" itemprop="sameAs"><span>@lang('contact.goPage') Dribbble @lang('contact.linkSchool')</span></a>
					</li>
				</ul>
			</div>

			<img class="contact__img" src="{{ asset('img/contact-img.jpg') }}" width="610" height="662" alt="">
		</div>
		</div>

		<div class="map">
			<div class="map__container">
				<div class="map__canvas" id="map__canvas" data-url="https://goo.gl/maps/CHa2UzKkaJ92" data-map-lat="50.6108382"
						 data-map-lgt="5.509964699999955"></div>
				<script async defer
								src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCuE1aAL7WbDtG7mQ94AfUNaRay-tR_5Sk">
				</script>
			</div>
		</div>

		<div class="contact-form__container">

			<div class="contact-form__wrapper" id="form">
				<section class="contact-form">
					<h3 role="heading" aria-level="3" class="contact-form__title">@lang('form.sendMsg')</h3>
					{{ Form::open([ 'method' => 'POST', 'class' => 'contact-form__form', 'route' => ['mail-contact-form']]) }}
					<div class="form__container">
						<div class="form__block">
							<div class="form-float-left">
								@if ($errors->has('firstname'))
									<span class="form-error">
										{{ $errors->first('firstname') }}
									</span>
								@endif
								<div class="form__wrapper form__wrapper--col2 form__wrapper--left">
									<label for="firstname" class="form__label">@lang('form.firstname')</label>
									<input type="text" name="firstname" required id="firstname"
												 class="form__input floatLabel {{ $errors->has('firstname') ? 'error-input' : '' }}"
												 value="{{ old('firstname') }}">
								</div>
							</div>
							<div class="form-float-right">
								@if ($errors->has('lastname'))
									<span class="form-error">
										{{ $errors->first('lastname') }}
									</span>
								@endif
								<div class="form__wrapper form__wrapper--col2 form__wrapper--right">
									<label for="lastname" class="form__label">@lang('form.lastname')</label>
									<input type="text" name="lastname" required id="lastname"
												 class="form__input floatLabel {{ $errors->has('lastname') ? 'error-input' : '' }}"
												 value="{{ old('lastname') }}">
								</div>
							</div>
						</div>
						<div class="form__block">
							@if ($errors->has('email'))
								<span class="form-error">
									{{ $errors->first('email') }}
								</span>
							@endif
							<div class="form__wrapper">
								<label for="email" class="form__label">@lang('form.youremail')</label>
								<input type="email" name="email" id="email"
											 class="form__input floatLabel {{ $errors->has('email') ? 'error-input' : '' }}"
											 value="{{ old('email') }}" required value="{{ old('email') }}">
							</div>
						</div>
						@if ($errors->has('content'))
							<span class="form-error">
								{{ $errors->first('content') }}
							</span>
						@endif
						<div class="form__block">
							<div class="form__wrapperTextarea">
								<label for="content" class="form__labelTextarea">@lang('form.yourMsg')&nbsp;:</label>
								<textarea name="content" id="content"
													class="form__textarea {{ $errors->has('content') ? 'error-input' : '' }}">{{ old('content') }}</textarea>
							</div>
						</div>
						<p class="form-success">{!! session('success') !!}</p>
						<button class="form__submit">@lang('form.sendTheMsg')</button>
					</div>
					{{ Form::close() }}

				</section>
				<section class="contact-more">
					<h3 role="heading" aria-level="3" class="contact-more__title">@lang('contact.infoContact')</h3>
					<ul class="contact-more__list">
						<li class="contact-more__item address">
							<address class="contact-more__address" itemprop="address adr" itemscope itemtype="http://schema.org/PostalAddress">
								<span class="street-address" itemprop="streetAddress">{{ Config::get('settings.address_street') }}, {{ Config::get('settings.address_num') }}</span><br/>
								<span class="postal-code" itemprop="postalCode">{{ Config::get('settings.address_cp') }}</span> - <span class="locality" itemprop="addressLocality">{{ Config::get('settings.address_town') }}</span><br/>
								<span class="country-name" itemprop="addressCountry">{{ Config::get('settings.address_country') }}</span><br/>
							</address>
						</li>
						<li class="contact-more__item tel">
							<a itemprop="telephone" href="tel:{{ str_replace(' ', '', Config::get('settings.contact_tel')) }}" class="contact-more__link contact-more__link--tel tel">{{ Config::get('settings.contact_tel') }}</a>
						</li>
						<li class="contact-more__item mail">
							<a itemprop="email" href="mailto:{{ Config::get('settings.contact_email') }}" class="contact-more__link contact-more__link--mail">
								{{ Config::get('settings.contact_email') }}
							</a>
						</li>
						<li class="contact-more__item timetable">
							<dl class="contact-more__timetable contact-more__timetable">
								<dt class="contact-more__day">Lundi&nbsp;-&nbsp;Vendredi</dt>
								<dd class="contact-more__hour">9h-12h30&nbsp;/&nbsp;/13h30-16h</dd>
							</dl>
						</li>
					</ul>
				</section>
			</div>
		</div>

	</section>










@endsection
