<!DOCTYPE html>
<html lang="<?= $this->language() ?>">
<head>
	<!-- (c) & (p) parentNode.dk 2009-2018 //-->
	<!-- All material protected by copyrightlaws, as if you didnt know //-->
	<!-- We build websites for good causes – visit parentnode.dk to learn more -->
	<title><?= $this->pageTitle() ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="keywords" content="Tankefeltterapi Healing Tarotkort Alternativ Behandling i København" />
	<meta name="description" content="<?= $this->pageDescription() ?>" />
	<meta name="viewport" content="initial-scale=1, user-scalable=no" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />

	<?= $this->sharingMetaData() ?>

	<link rel="apple-touch-icon" href="/touchicon.png">
	<link rel="icon" href="/favicon.png">

<? if(session()->value("dev")) { ?>
	<link type="text/css" rel="stylesheet" media="all" href="/css/lib/seg_<?= $this->segment() ?>_include.css" />
	<script type="text/javascript" src="/js/lib/seg_<?= $this->segment() ?>_include.js"></script>
<? } else { ?>
	<link type="text/css" rel="stylesheet" media="all" href="/css/seg_<?= $this->segment() ?>.css?rev=20230217-101145" />
	<script type="text/javascript" src="/js/seg_<?= $this->segment() ?>.js?rev=20230217-101145"></script>
<? } ?>

	<?= $this->headerIncludes() ?>
</head>

<body<?= $HTML->attribute("class", $this->bodyClass()) ?>>

<div id="page" class="i:page">

	<div id="header">
		<ul class="servicenavigation">
			<li class="keynav navigation nofollow"><a href="#navigation">Circle of Life</a></li>
		</ul>
	</div>

	<div id="content">
