<?php
$access_item = false;
if(isset($read_access) && $read_access) {
	return;
}

include_once($_SERVER["FRAMEWORK_PATH"]."/config/init.php");


$action = $page->actions();


$page->bodyClass("page");
$page->pageTitle("Circle of life - Dorthe Torp - Tankefeltterapi, Healing og Tarotkort");


header("Location: /");
exit();

if(is_array($action) && count($action)) {

	// fix redirect google issue
	if(preg_match("/\.php$/", $action[0])) {
		
		header("Location: ".preg_replace("/\.php$/", "", $page->url), true, 301);
		exit();
	}


	if(count($action) == 1) {

		$page->page(array(
			"templates" => "pages/".$action[0].".php"
			)
		);
		exit();

	}

}

$page->page(array(
	"templates" => "pages/front.php"
	)
);

?>
