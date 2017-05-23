<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body style="background: #F5F5F4;">

<section class="mail" style="margin: 0 auto; width: 70%; background-color: #FFF; padding: 20px 50px; max-width: 950px">
	<h1 style="font-family: Helvetica, Arial, sans-serif; color: #243D59; text-transform: uppercase; font-weight: bolder; letter-spacing: 1px; font-family: Helvetica, Arial, sans-serif; font-size: 26px" role="heading" aria-level="1">Vous venez de reçevoir un email de {{ ucfirst($firstname) }} {{ ucfirst($lastname) }}</h1>
	<div class="mail-intro" style="margin-bottom: 20px;">
		<p style="font-family: Helvetica, Arial, sans-serif; color: #353D47; font-size: 18px; margin: 0; line-height: 1.4em;">Cet email a été envoyé à partir du formulaire de contact du site ecoleinfographie.be.</p>
	</div>
	<div class="mail-content">
			<div class="mail-content__description">
				<p style="color: #353D47; font-size: 20px; text-transform: uppercase; font-weight: bold; color: #243D59; line-height: 1.4em; letter-spacing: 1px; font-family: Helvetica, Arial, sans-serif;">Message de l’expéditeur&nbsp;:</p>
				<p style="font-family: Helvetica, Arial, sans-serif; color: #353D47; font-size: 18px; line-height: 1.6em">{{ $content }}</p>
			</div>

	</div>

	<p style="font-family: Helvetica, Arial, sans-serif; color: #353D47; font-size: 18px; margin: 0; line-height: 1.4em;">Vous pouvez répondre directement à cet email pour contacter la personne.</p>
</section>
</body>
</html>
