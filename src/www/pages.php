<?php
$access_item = false;
if(isset($read_access) && $read_access) {
	return;
}

include_once($_SERVER["FRAMEWORK_PATH"]."/config/init.php");


$action = $page->actions();


$page->bodyClass("page");
$page->pageTitle("Circle of life - Dorthe Torp - Zoneterapi, Tankefeltterapi, Healing og Tarotkort");


if(is_array($action) && count($action)) {

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