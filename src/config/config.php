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
define("SITE_URL", "dorthetorp.dk");
define("SITE_EMAIL", "dorthe.torp@mail.dk");

/**
* Optional constants
*/
define("DEFAULT_PAGE_DESCRIPTION", "Zoneterapi, Tankefeltterapi, Healing og Tarotkort. Behandling og kurser på Fyn.");
define("DEFAULT_LANGUAGE_ISO", "EN");
define("DEFAULT_COUNTRY_ISO", "DK");
define("DEFAULT_CURRENCY_ISO", "DKK");


// // Enable items model
// define("SITE_ITEMS", true);
// 
// // Enable shop model
// define("SITE_SHOP", true);


// Enable notifications (send collection email after N notifications)
define("SITE_COLLECT_NOTIFICATIONS", 50);

?>
