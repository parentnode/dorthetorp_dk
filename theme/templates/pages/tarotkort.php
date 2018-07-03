<?
$this->pageTitle("Tarotkort");
$this->pageDescription("Med Tarotkort kan du f&aring; svar p&aring; alt i fortid - nutid - fremtid.");
?>
<div class="scene tarot" itemscope itemtype="http://schema.org/Article">
	<h1 itemprop="headline">Tarotkort</h1>
	<div class="description" itemprop="articleBody">
		<p>Fortid - Nutid - Fremtid</p>
		<p>Med Tarotkort kan du f&aring; svar p&aring; alt i fortid - nutid - fremtid. Det sker p&aring; den m&aring;de, at det er dig der blander kortenen og det er dig der tr&aelig;kker kortene efter min anvisning - men s&aring; er det mig der tyder kortene for dig - er der noget i dit liv du er i tvivl om, s&aring; kontakt mig.</p>
		<p>Tarot kan derfor hj&aelig;lpe dig til at f&aring; st&oslash;rre forst&aring;else og indsigt i dit liv. s&aring; du kan komme videre ad den rigtige vej.</p>

		<ul class="slideshow">
			<li><img src="/img/pi_tarot.jpg" alt="Tarotkort" /></li>
		</ul>

		<h2>Du kan bruge Tarot-r&aring;dgivning til:</h2>
		<ul>
			<li>Arbejde eller uddannelse</li>
			<li>Parforhold</li>
			<li>Livskriser</li>
			<li>Personlig udvikling</li>
			<li>Ubeslutsomhed</li>
			<li>Eller hvis du bare er nysgerrig</li>
		</ul>
	</div>

	<ul class="info">
		<li class="published_at" itemprop="datePublished" content="<?= date("Y-m-d", filemtime(__FILE__)) ?>"><?= date("Y-m-d, H:i", filemtime(__FILE__)) ?></li>
		<li class="modified_at" itemprop="dateModified" content="<?= date("Y-m-d", filemtime(__FILE__)) ?>"><?= date("Y-m-d, H:i", filemtime(__FILE__)) ?></li>
		<li class="author" itemprop="author">Dorthe Torp</li>
		<li class="main_entity share" itemprop="mainEntityOfPage"><?= SITE_URL."/pages/tarotkort" ?></li>
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