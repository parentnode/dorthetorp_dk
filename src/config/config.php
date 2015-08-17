<?php
/**
* This file contains definitions
*
* @package Config
*/
header("Content-type: text/html; charset=UTF-8");
error_reporting(E_ALL);

/**
* Required site information
*/
define("SITE_UID", "DOTO");
define("SITE_NAME", "Circle of Life");
define("SITE_URL", $_SERVER["SERVER_NAME"]);
define("SITE_EMAIL", "mail@dorthetorp.dk");

/**
* Optional constants
*/
define("DEFAULT_PAGE_DESCRIPTION", "Zoneterapi, Tankefeltterapi, Healing og Tarotkort. Behandling og kurser på Fyn.");
define("DEFAULT_LANGUAGE_ISO", "DA");
define("DEFAULT_COUNTRY_ISO", "DK");


// // Enable items model
// define("SITE_ITEMS", true);
// 
// // Enable shop model
// define("SITE_SHOP", true);


// Enable notifications (send collection email after N notifications)
define("SITE_COLLECT_NOTIFICATIONS", 50);

?>
