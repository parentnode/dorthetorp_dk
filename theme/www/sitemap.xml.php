<?php
$access_item = false;
if(isset($read_access) && $read_access) {
	return;
}

include_once($_SERVER["FRAMEWORK_PATH"]."/config/init.php");

print '<?xml version="1.0" encoding="UTF-8"?>';
?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
	<url>
		<loc>http://dorthetorp.dk/</loc>
		<lastmod><?= date("Y-m-d", filemtime(LOCAL_PATH."/templates/pages/front.php")) ?></lastmod>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
	</url>
<? /*	<url>
		<loc>http://dorthetorp.dk/pages/om_mig</loc>
		<lastmod><?= date("Y-m-d", filemtime(LOCAL_PATH."/templates/pages/om_mig.php")) ?></lastmod>
		<changefreq>daily</changefreq>
		<priority>1</priority>
	</url>
	<url>
		<loc>http://dorthetorp.dk/pages/tankefeltterapi</loc>
		<lastmod><?= date("Y-m-d", filemtime(LOCAL_PATH."/templates/pages/tankefeltterapi.php")) ?></lastmod>
		<changefreq>weekly</changefreq>
		<priority>0.7</priority>
	</url>
	<url>
		<loc>http://dorthetorp.dk/pages/healing</loc>
		<lastmod><?= date("Y-m-d", filemtime(LOCAL_PATH."/templates/pages/healing.php")) ?></lastmod>
		<changefreq>weekly</changefreq>
		<priority>0.7</priority>
	</url>
	<url>
		<loc>http://dorthetorp.dk/pages/tarotkort</loc>
		<lastmod><?= date("Y-m-d", filemtime(LOCAL_PATH."/templates/pages/tarotkort.php")) ?></lastmod>
		<changefreq>weekly</changefreq>
		<priority>0.7</priority>
	</url>
	<url>
		<loc>http://dorthetorp.dk/pages/kurser</loc>
		<lastmod><?= date("Y-m-d", filemtime(LOCAL_PATH."/templates/pages/kurser.php")) ?></lastmod>
		<changefreq>weekly</changefreq>
		<priority>0.7</priority>
	</url>
	<url>
		<loc>http://dorthetorp.dk/pages/priser</loc>
		<lastmod><?= date("Y-m-d", filemtime(LOCAL_PATH."/templates/pages/priser.php")) ?></lastmod>
		<changefreq>weekly</changefreq>
		<priority>0.7</priority>
	</url>
	<url>
		<loc>http://dorthetorp.dk/pages/anbefalinger</loc>
		<lastmod><?= date("Y-m-d", filemtime(LOCAL_PATH."/templates/pages/anbefalinger.php")) ?></lastmod>
		<changefreq>weekly</changefreq>
		<priority>0.7</priority>
	</url>
	<url>
		<loc>http://dorthetorp.dk/pages/kontakt_mig</loc>
		<lastmod><?= date("Y-m-d", filemtime(LOCAL_PATH."/templates/pages/kontakt_mig.php")) ?></lastmod>
		<changefreq>weekly</changefreq>
		<priority>0.7</priority>
	</url> */ ?>
</urlset>