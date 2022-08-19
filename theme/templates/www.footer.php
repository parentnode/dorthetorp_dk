	</div>


<?php
$menu = array();

$menu[] = array("label" => "Forsiden", "url" => "/");
$menu[] = "separator";
$menu[] = array("label" => "Om mig", "url" => "/pages/om_mig");
$menu[] = array("label" => "EFT/TFT", "url" => "/pages/tankefeltterapi");
$menu[] = array("label" => "Healing", "url" => "/pages/healing");
$menu[] = array("label" => "Tarotkort", "url" => "/pages/tarotkort");
// $menu[] = array("label" => "Kurser", "url" => "/pages/kurser");
$menu[] = "separator";
$menu[] = array("label" => "Priser", "url" => "/pages/priser");
$menu[] = array("label" => "Anbefalinger", "url" => "/pages/anbefalinger");
$menu[] = array("label" => "Kontakt mig", "url" => "/pages/kontakt_mig");
?>

	<div id="navigation">
		<ul class="navigation">
			<?
				for($i = 0; $i < count($menu); $i++) {
					if($menu[$i] == "separator") {
						print '<li class="separator"></li>';
					}
					else {
						print '<li'.($menu[$i]["url"] == $this->url ? ' class="selected"' : '').'><a href="'.$menu[$i]["url"].'">'.$menu[$i]["label"].'</a></li>';
					}
				}
			?>
		</ul>
	</div>

	<div id="footer">
		<p>Circle of Life - Dorthe Torp - Telefon: 4092 0496</p>
	</div>

</div>

</body>
</html>