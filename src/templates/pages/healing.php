<?
$this->pageTitle("Healing");
$this->pageDescription("Healing er en formidling af livsenergi, som igangs&aelig;tter en process. b&aring;de fysisk og psykisk.");
?>
<div class="scene healing" itemscope itemtype="http://schema.org/Article">
	<h1 itemprop="headline">Healing</h1>

	<div class="description" itemprop="articleBody">
		<p>Healing betyder hel. N&aring;r man er hel, er man i balance med sine tanker, f&oslash;lelser og krop.</p>
		<p>Healing er en formidling af livsenergi, som igangs&aelig;tter en process. b&aring;de fysisk og psykisk.</p>
		<p>Ved healing tilf&oslash;rer man kroppen energi, d&eacute;r hvor ubalancen er st&oslash;rst. Energien bliver kanaliseret fra healerens h&aelig;nder til patientens krop.</p>

		<ul class="slideshow">
			<li><img src="/img/pi_healing.jpg" alt="Healing" /></li>
		</ul>

		<h2>Reiki-healing anbefales til:</h2>
		<ul>
			<li>Fjerne smerter</li>
			<li>Fjerne stress</li>
			<li>Genoprette psykiske ubalancer</li>
			<li>Oph&aelig;ve blokeringer</li>	
			<li>Udrense giftstoffer</li>
			<li>Modvirke udbr&aelig;nthed</li>
			<li>&Oslash;ge kropsbevistheden</li>
			<li>Give total afsp&aelig;nding</li>
		</ul>
	</div>

	<ul class="info">
		<li class="published_at" itemprop="datePublished" content="<?= date("Y-m-d", filemtime(__FILE__)) ?>"><?= date("Y-m-d, H:i", filemtime(__FILE__)) ?></li>
		<li class="modified_at" itemprop="dateModified" content="<?= date("Y-m-d", filemtime(__FILE__)) ?>"><?= date("Y-m-d, H:i", filemtime(__FILE__)) ?></li>
		<li class="author" itemprop="author">Dorthe Torp</li>
		<li class="main_entity share" itemprop="mainEntityOfPage"><?= SITE_URL."/pages/healing" ?></li>
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