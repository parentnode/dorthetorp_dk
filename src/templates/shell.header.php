<? include_once("segment.php") ?>
<?php
$menu = array();
$menu_url = array();

$menu[] = array("label" => "forsiden", "url" => "/pages/index.php");
$menu[] = "separator";
$menu[] = array("label" => "tarotkort", "url" => "/pages/tarotkort.php");
$menu[] = array("label" => "bodytalk", "url" => "/pages/bodytalk.php");
$menu[] = array("label" => "tankefeltterapi", "url" => "/pages/tankefeltterapi.php");
$menu[] = array("label" => "healing", "url" => "/pages/healing.php");
$menu[] = array("label" => "binyre", "url" => "/pages/binyre.php");
$menu[] = array("label" => "zoneterapi", "url" => "/pages/zoneterapi.php");
//$menu[] = "clairvoyance";
$menu[] = array("label" => "tarotkursus", "url" => "/pages/tarotkursus.php");
//$menu[] = "amalfikysten";
$menu[] = "separator";
$menu[] = array("label" => "priser", "url" => "/pages/priser.php");
$menu[] = array("label" => "presse", "url" => "/pages/presse.php");
$menu[] = array("label" => "transport", "url" => "/pages/transport.php");
$menu[] = array("label" => "kontakt mig", "url" => "/pages/kontaktmig.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="da" lang="da">
<head>
	<!-- All material protected by copyrightlaws (as if you didnt know) //-->
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<title><?= isset($title) ? $title." - " : "" ?> dorthe torp - 40 92 04 96 </title>
	<style type="text/css">@import url(../css/basics.css);</style>
	<script language="javascript" type="text/javascript" src="../js/basics.js"></script>
</head>
<body>

<div id="pageWrap">
	<div id="headerWrap">
		<span class="fleft"><img src="../img/hd_dorthetorp.gif" alt="" /></span>
		<span class="fright"><a href="../pages/index.php"><img src="../img/pi_eye.png" alt="Til forsiden" /></a></span>
	</div>

	<div id="menuWrap">
		<ul>
			<?
				for($i = 0; $i < count($menu); $i++) {
					if($menu[$i] == "separator") {
						print '<li class="separator"></li>';
					}
					else {
//						print '<li><a href="../pages/'.$menu[$i].'.php" onmouseover="Util.over(this);"><img src="../img/bn_'.$menu[$i].'_'.($menu[$i] == $page ? 'over' : 'out').'.gif" alt="'.ucfirst($menu[$i]).'" /></a></li>';
						print '<li'.($menu[$i]["url"] == $page ? ' class="sel"' : '').'><a href="'.$menu[$i]["url"].'">'.$menu[$i]["label"].'</a></li>';
					}
				}
			?>
		</ul>
	</div>
	
	<div id="contentWrap">