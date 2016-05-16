<?
$this->pageTitle("Binyretræthed");
//$this->pageDescription("");
?>
<div class="scene" itemscope itemtype="http://schema.org/Article">
	<h1 itemprop="headline">Binyretr&aelig;thed</h1>

	<div class="description" itemprop="articleBody">
		<p>Personer der lider af &rdquo;Binyretr&aelig;thed&rdquo; har udtalte symptomer som:</p>
		<ul>
			<li>F&oslash;lelsen af udbr&aelig;ndthed</li>
			<li>Tilbagevendende inflamationer</li>
			<li>Vejrtr&aelig;kningsproblemer</li>
			<li>Manglende sexlyst</li>
			<li>Nedsat evne til at h&aring;ndtere stress</li>
			<li>Mild depression</li>
			<li>Manglende overblik</li>
			<li>O.s.v</li>
		</ul>

		<p>Behandling af Binyretr&aelig;thed er individuel fra person til person. Din behandling vil blive tilrettelagt efter dine behov.</p>

		<p>Jeg behandler med:</p>
		<ul>
			<li>Hom&oslash;opatisk medicin</li>
			<li>Vitaminer &amp; mineraler</li>
			<li>Kostvejledning</li>
			<li>Tankefeltterapi</li>
		</ul>
	</div>

	<ul class="info">
		<li class="published_at" itemprop="datePublished" content="<?= date("Y-m-d", filemtime(__FILE__)) ?>"><?= date("Y-m-d, H:i", filemtime(__FILE__)) ?></li>
		<li class="modified_at" itemprop="dateModified" content="<?= date("Y-m-d", filemtime(__FILE__)) ?>"><?= date("Y-m-d, H:i", filemtime(__FILE__)) ?></li>
		<li class="author" itemprop="author">Dorthe Torp</li>
		<li class="main_entity share" itemprop="mainEntityOfPage"><?= SITE_URL."/pages/binyre" ?></li>
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