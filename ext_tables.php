<?php
if (!defined ("TYPO3_MODE")) 	die ("Access denied.");

if (TYPO3_MODE=="BE")	{
		
	t3lib_extMgm::addModule("tools","txdnsmanagerM1","",t3lib_extMgm::extPath($_EXTKEY)."mod1/");
}


if (TYPO3_MODE=="BE")	{
	$GLOBALS["TBE_MODULES_EXT"]["xMOD_alt_clickmenu"]["extendCMclasses"][]=array(
		"name" => "tx_dnsmanager_cm1",
		"path" => t3lib_extMgm::extPath($_EXTKEY)."class.tx_dnsmanager_cm1.php"
	);
}

$TCA["tx_dnsmanager_zone"] = Array (
	"ctrl" => Array (
		"title" => "LLL:EXT:dns_manager/locallang_db.php:tx_dnsmanager_zone",		
		"label" => "zone",	
		"tstamp" => "tstamp",
		"crdate" => "crdate",
		"cruser_id" => "cruser_id",
		"default_sortby" => "ORDER BY crdate",	
		"delete" => "deleted",	
		"enablecolumns" => Array (		
			"disabled" => "hidden",
		),
		"dynamicConfigFile" => t3lib_extMgm::extPath($_EXTKEY)."tca.php",
		"iconfile" => t3lib_extMgm::extRelPath($_EXTKEY)."icon_tx_dnsmanager_zone.gif",
	),
	"feInterface" => Array (
		"fe_admin_fieldList" => "hidden, zone, parent_zone, soa_default_ttl, soa_mname, soa_rname, soa_serial, soa_refresh, soa_retry, soa_expire, soa_negative_cache_ttl, ns, mx",
	)
);

$TCA["tx_dnsmanager_host"] = Array (
	"ctrl" => Array (
		"title" => "LLL:EXT:dns_manager/locallang_db.php:tx_dnsmanager_host",		
		"label" => "hostname",	
		"tstamp" => "tstamp",
		"crdate" => "crdate",
		"cruser_id" => "cruser_id",
		"default_sortby" => "ORDER BY crdate",	
		"delete" => "deleted",	
		"enablecolumns" => Array (		
			"disabled" => "hidden",
		),
		"dynamicConfigFile" => t3lib_extMgm::extPath($_EXTKEY)."tca.php",
		"iconfile" => t3lib_extMgm::extRelPath($_EXTKEY)."icon_tx_dnsmanager_host.gif",
	),
	"feInterface" => Array (
		"fe_admin_fieldList" => "hidden, hostname",
	)
);

$TCA["tx_dnsmanager_recordtype"] = Array (
	"ctrl" => Array (
		"title" => "LLL:EXT:dns_manager/locallang_db.php:tx_dnsmanager_recordtype",		
		"label" => "type",	
		"tstamp" => "tstamp",
		"crdate" => "crdate",
		"cruser_id" => "cruser_id",
		"default_sortby" => "ORDER BY crdate",	
		"delete" => "deleted",	
		"enablecolumns" => Array (		
			"disabled" => "hidden",
		),
		"dynamicConfigFile" => t3lib_extMgm::extPath($_EXTKEY)."tca.php",
		"iconfile" => t3lib_extMgm::extRelPath($_EXTKEY)."icon_tx_dnsmanager_recordtype.gif",
	),
	"feInterface" => Array (
		"fe_admin_fieldList" => "hidden, type",
	)
);

$TCA["tx_dnsmanager_zone_services"] = Array (
	"ctrl" => Array (
		"title" => "LLL:EXT:dns_manager/locallang_db.php:tx_dnsmanager_zone_services",		
		"label" => "uid",	
		"tstamp" => "tstamp",
		"crdate" => "crdate",
		"cruser_id" => "cruser_id",
		"default_sortby" => "ORDER BY crdate",	
		"delete" => "deleted",	
		"enablecolumns" => Array (		
			"disabled" => "hidden",
		),
		"dynamicConfigFile" => t3lib_extMgm::extPath($_EXTKEY)."tca.php",
		"iconfile" => t3lib_extMgm::extRelPath($_EXTKEY)."icon_tx_dnsmanager_zone_services.gif",
	),
	"feInterface" => Array (
		"fe_admin_fieldList" => "hidden, zone, host, service_type, priority",
	)
);
?>