<?php
$IC = new Items();
$items = $IC->getItems(array("itemtype" => "post", "status" => 1, "extend" => array("tags" => true, "user" => true)));
	
?>
<div class="scene front i:front">

	<div class="article" itemscope itemtype="http://schema.org/Article">
		<ul class="slideshow">
			<li><img src="/img/pi_front.jpg" alt="Dorthe Torp" /></li>
		</ul>

		<h1 itemprop="headline">Velkommen til Circle of Life</h1>

		<div class="description" itemprop="articleBody">
			<p>
				Efter 16 år i det Sydfynske er jeg vendt tilbage til Sjælland, nærmere bestemt København.
				Jeg vil fra den 1/10 2022 have klinik på Murergade 8, 2200 København N.
			</p>
			<p>
				EFT og TFT er effektiv til at afhjælpe Post Traumatisk Stress, angst, forbier, vrede, sorg og svigt. 
				TFT og EFT er forkortelser for Tankefeltterapi og følelsesmæssig terapi (emotionel terapi). 
				TFT og EFT hjælper med at ophæve følelsesmæssige blokeringer, der kommer af svigt, angst, vrede, 
				sorg, mindreværd, post traumatisk stress (ptsd) o.s.v.
			</p>
			<p>
				Reikihealing / Healing er noget af det mest afstressende du kan give dig selv og din krop. 
				Desuden hjælper Healing mod smerter og hjælper din krop med at udrense giftstoffer.
			</p>
			<p>
				Tarotkort er Sjælens spejl og du kan spørge kortene om alt og få svar. Tarot hjælper dig til 
				at få afklaret livets store og små problemer og hvordan du håndterer dem.
			</p>

		</div>

		<ul class="info">
			<li class="published_at" itemprop="datePublished" content="<?= date("Y-m-d", filemtime(__FILE__)) ?>"><?= date("Y-m-d, H:i", filemtime(__FILE__)) ?></li>
			<li class="modified_at" itemprop="dateModified" content="<?= date("Y-m-d", filemtime(__FILE__)) ?>"><?= date("Y-m-d, H:i", filemtime(__FILE__)) ?></li>
			<li class="author" itemprop="author">Dorthe Torp</li>
			<li class="main_entity share" itemprop="mainEntityOfPage"><?= SITE_URL."/" ?></li>
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


<?	if($items): ?>
	<ul class="items posts">
		<? foreach($items as $item): 
			$media = $IC->sliceMediae($item); ?>
		<li class="item article id:<?= $item["item_id"] ?>" itemscope itemtype="http://schema.org/NewsArticle">

			<h3 itemprop="headline"><?= $item["name"] ?></h3>

			<ul class="info">
				<li class="published_at" itemprop="datePublished" content="<?= date("Y-m-d", strtotime($item["published_at"])) ?>"><?= date("Y-m-d, H:i", strtotime($item["published_at"])) ?></li>
				<li class="modified_at" itemprop="dateModified" content="<?= date("Y-m-d", strtotime($item["modified_at"])) ?>"><?= date("Y-m-d, H:i", strtotime($item["published_at"])) ?></li>
				<li class="author" itemprop="author"><?= $item["user_nickname"] ?></li>
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
				<? if($media): ?>
					<span class="image_url" itemprop="url" content="<?= SITE_URL ?>/images/<?= $item["item_id"] ?>/<?= $media["variant"] ?>/720x.<?= $media["format"] ?>"></span>
					<span class="image_width" itemprop="width" content="720"></span>
					<span class="image_height" itemprop="height" content="<?= floor(720 / ($media["width"] / $media["height"])) ?>"></span>
				<? else: ?>
					<span class="image_url" itemprop="url" content="<?= SITE_URL ?>/img/logo-large.png"></span>
					<span class="image_width" itemprop="width" content="720"></span>
					<span class="image_height" itemprop="height" content="405"></span>
				<? endif; ?>
				</li>
			</ul>

			<? if($item["html"]): ?>
			<div class="articlebody" itemprop="articleBody">
				<?= $item["html"] ?>
			</div>
			<? endif; ?>

		</li>
		<? endforeach; ?>
	</ul>
<? endif; ?>

</div>
