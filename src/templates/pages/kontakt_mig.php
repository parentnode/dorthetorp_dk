<?
$this->pageTitle("Kontakt mig");
$this->pageDescription("Clairvoyance er evnen til at opfatte situationer og oplevelser, der ligger uden for den almindelige opfattelsesevne.");
?>
<div class="scene contact">
	<h1>Kontakt mig</h1>

	<p>
		Du kan kontakte mig med sp&oslash;rgsm&aring;l og kommentarer via emailadressen 
		<a href="mailto:dorthe.torp@mail.dk"><?= SITE_EMAIL ?></a>. 
		Nedenst&aring;ende telefonnummer og adresse kan naturligvis ogs&aring; benyttes.
	</p>

	<h2>Postadresse:</h2>

	<div class="vcard organization" itemscope itemtype="http://schema.org/Organization">
		<div class="name fn" itemprop="name">Oasen</div>
		<div class="adr" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
			<div class="street-address" itemprop="streetAddress">Thorsgade 13</div>
			<div><span class="postal-code" itemprop="postalCode">5000</span> <span class="locality" itemprop="addressLocality">Odense</span></div>
			<div class="country-name" itemprop="addressCountry">Danmark</div>
		</div>
	</div>

	<p>eller</p>

	<div class="vcard person" itemscope itemtype="http://schema.org/Person">
		<div class="name fn" itemprop="name">Dorthe Torp Schines</div>
		<div class="adr" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
			<div class="street-address" itemprop="streetAddress">Rolf Krakes Vej 2</div>
			<div><span class="postal-code" itemprop="postalCode">5700</span> <span class="locality" itemprop="addressLocality">Svendborg</span></div>
			<div class="country-name" itemprop="addressCountry">Danmark</div>
		</div>
		<div class="tel" itemprop="telephone"><a href="callto:+4570205200">+45 4092 0496</a></div>
		<div class="email" itemprop="email"><a href="mailto:<?= SITE_EMAIL ?>"><?= SITE_EMAIL ?></a></div>
	</div>

</div>