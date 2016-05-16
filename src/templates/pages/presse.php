<?
$this->pageTitle("Presse");
$this->pageDescription("Ekstra Bladet, mandag 27. september 2004. Seks stjerner ud af seks.");
?>
<div class="scene press" itemscope itemtype="http://schema.org/Article">
	<h1 itemprop="headline">Presse</h1>
	<div class="description" itemprop="articleBody">
		<h2>
			Ekstra Bladet, mandag 27. september 2004<br />
			<span>SEKS STJERNER UD AF SEKS</span>
		</h2>
		<p><strong>Konklusion:</strong> Fremragende behandling. Stor interesse for klienten. Grundig. Dejlige varme h&aelig;nder. God humor. Pris 400 kr.</p>
		<p>Dorthe Torp har mange varer p&aring; hylderne. Hun kan give zoneterapi, l&aelig;gge Tarotkort, foretage healing og s&aring; er hun clairvoyant. Hun kan ogs&aring; noget med sten og krystaller. Man skal normalt g&aring; langt uden om alternative behandlere, der mener at kunne det hele. Det er mit r&aring;d. V&aelig;lg en, som har specialiseret sig.</p>
		<p>Jeg kan ikke udtale mig om Dorthe Torps evner inden for tydning af spillekort og stenl&aelig;gning, men jeg kan anbefale hendes kunnen inden for zoneterapi p&aring; det varmeste. Med fire n&aring;le i skuldrene, lukkede &oslash;jne, n&oslash;gen overkrop og bare f&oslash;dder i Dorthe Torps varme h&aelig;nder var jeg solgt. Inden jeg gik blev jeg healet st&aring;ende.</p>
	</div>

	<ul class="info">
		<li class="published_at" itemprop="datePublished" content="<?= date("Y-m-d", filemtime(__FILE__)) ?>"><?= date("Y-m-d, H:i", filemtime(__FILE__)) ?></li>
		<li class="modified_at" itemprop="dateModified" content="<?= date("Y-m-d", filemtime(__FILE__)) ?>"><?= date("Y-m-d, H:i", filemtime(__FILE__)) ?></li>
		<li class="author" itemprop="author">Dorthe Torp</li>
		<li class="main_entity share" itemprop="mainEntityOfPage"><?= SITE_URL."/pages/presse" ?></li>
		<li class="publisher" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
			<ul class="publisher_info">
				<li class="name" itemprop="name">dorthetorp.dk</li>
				<li class="logo" itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
					<span class="image_url" itemprop="url" content="<?= SITE_URL ?>/img/logo-large.png"></span>
					<span class="image_width" itemprop="width" content="720"></span>
					<span class="image_height" itemprop="height" content="405"></span>
				</li>
			</ul>
		</li>
		<li class="image_info" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
			<span class="image_url" itemprop="url" content="<?= SITE_URL ?>/img/logo-large.png"></span>
			<span class="image_width" itemprop="width" content="720"></span>
			<span class="image_height" itemprop="height" content="405"></span>
		</li>
	</ul>
</div>
