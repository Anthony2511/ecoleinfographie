<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body style="background: #F5F5F4;">

<section class="mail" style="margin: 0 auto; width: 70%; background-color: #FFF; padding: 20px 50px; max-width: 950px">
	<h1 style="font-family: Helvetica, Arial, sans-serif; color: #243D59; text-transform: uppercase; font-weight: bolder; letter-spacing: 1px; font-family: Helvetica, Arial, sans-serif; font-size: 26px" role="heading" aria-level="1">{{ $subjectPdf }}</h1>
	<div class="mail-intro" style="margin-bottom: 20px;">
		<p style="font-family: Helvetica, Arial, sans-serif; color: #353D47; font-size: 18px; margin: 0; line-height: 1.4em;">Une offre de stage vient d’être déposée sur le site de l’école. L’expéditeur à préféré vous envoyer un fichier PDF.</p>
		<p style="font-family: Helvetica, Arial, sans-serif; color: #353D47; font-size: 18px; margin: 0; line-height: 1.4em;">Elle vous est envoyée car l’expéditeur a marqué la section dont vous êtes le résponsable comme cible.</p>
	</div>
	<div class="mail-content">
		<p style="color: #353D47; font-size: 20px; text-transform: uppercase; font-weight: bold; color: #243D59; line-height: 1.4em; letter-spacing: 1px; font-family: Helvetica, Arial, sans-serif;">Voici le contenu de l’offre&nbsp;:</p>
		<p class="mail-content__info" style="font-family: Helvetica, Arial, sans-serif; color: #353D47; font-size: 18px; margin: 0; line-height: 1.4em;"><strong style="color: #353D47; font-family: Helvetica, Arial, sans-serif; ">Nom de l’expéditeur&nbsp;:</strong> {{ $namePdf }}</p>
		<p class="mail-content__info" style="font-family: Helvetica, Arial, sans-serif; color: #353D47; font-size: 18px; margin: 5px 0 5px 0; line-height: 1.4em;"><strong style="color: #353D47; font-family: Helvetica, Arial, sans-serif; ">Nom de l’entreprise concernée&nbsp;:</strong> {{ $companyPdf }}</p>
		<p class="mail-content__info" style="font-family: Helvetica, Arial, sans-serif; color: #353D47; font-size: 18px; margin: 0; line-height: 1.4em;"><strong style="color: #353D47; font-family: Helvetica, Arial, sans-serif; ">Sujet du message&nbsp;:</strong> {{ $subjectPdf }}</p>

		@if(!empty($descriptionPdf))
		<div class="mail-content__description">
			<p style="color: #353D47; font-size: 20px; text-transform: uppercase; font-weight: bold; color: #243D59; line-height: 1.4em; letter-spacing: 1px; font-family: Helvetica, Arial, sans-serif;">Message de l’expéditeur&nbsp;:</p>
			<p style="font-family: Helvetica, Arial, sans-serif; color: #353D47; font-size: 18px; line-height: 1.6em">{{ $descriptionPdf }}</p>
		</div>
		@endif

	</div>

	<p style="font-family: Helvetica, Arial, sans-serif; color: #353D47; font-size: 18px; margin: 0; line-height: 1.4em;">Vous pouvez répondre directement à cet email pour contacter la personne.</p>
	<p style="font-family: Helvetica, Arial, sans-serif; color: #353D47; font-size: 18px; margin: 0; line-height: 1.4em;">Veuillez l’informer si sa proposition est conforme et si vous la transmettez aux élèves.</p>

</section>
</body>
</html>
