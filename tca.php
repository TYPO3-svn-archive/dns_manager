<?php
if (!defined ("TYPO3_MODE")) 	die ("Access denied.");

$TCA["tx_dnsmanager_zone"] = Array (
	"ctrl" => $TCA["tx_dnsmanager_zone"]["ctrl"],
	"interface" => Array (
		"showRecordFieldList" => "hidden,zone,parent_zone,soa_default_ttl,soa_mname,soa_rname,soa_serial,soa_refresh,soa_retry,soa_expire,soa_negative_cache_ttl,ns,mx"
	),
	"feInterface" => $TCA["tx_dnsmanager_zone"]["feInterface"],
	"columns" => Array (
		"hidden" => Array (		
			"exclude" => 1,	
			"label" => "LLL:EXT:lang/locallang_general.php:LGL.hidden",
			"config" => Array (
				"type" => "check",
				"default" => "0"
			)
		),
		"zone" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:dns_manager/locallang_db.php:tx_dnsmanager_zone.zone",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"eval" => "required,trim",
			)
		),
		"parent_zone" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:dns_manager/locallang_db.php:tx_dnsmanager_zone.parent_zone",		
			"config" => Array (
				"type" => "select",	
				"items" => Array (
					Array("",0),
				),
				"foreign_table" => "tx_dnsmanager_zone",	
				"foreign_table_where" => "AND tx_dnsmanager_zone.pid=###STORAGE_PID### ORDER BY tx_dnsmanager_zone.uid",	
				"size" => 1,	
				"minitems" => 0,
				"maxitems" => 1,
			)
		),
		"soa_default_ttl" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:dns_manager/locallang_db.php:tx_dnsmanager_zone.soa_default_ttl",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"eval" => "required,trim",
			)
		),
		"soa_mname" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:dns_manager/locallang_db.php:tx_dnsmanager_zone.soa_mname",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"eval" => "required,trim",
			)
		),
		"soa_rname" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:dns_manager/locallang_db.php:tx_dnsmanager_zone.soa_rname",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"eval" => "required,trim",
			)
		),
		"soa_serial" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:dns_manager/locallang_db.php:tx_dnsmanager_zone.soa_serial",		
			"config" => Array (
				"type" => "none",
			)
		),
		"soa_refresh" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:dns_manager/locallang_db.php:tx_dnsmanager_zone.soa_refresh",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"eval" => "required,trim",
			)
		),
		"soa_retry" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:dns_manager/locallang_db.php:tx_dnsmanager_zone.soa_retry",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"eval" => "required,trim",
			)
		),
		"soa_expire" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:dns_manager/locallang_db.php:tx_dnsmanager_zone.soa_expire",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"eval" => "required,trim",
			)
		),
		"soa_negative_cache_ttl" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:dns_manager/locallang_db.php:tx_dnsmanager_zone.soa_negative_cache_ttl",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"eval" => "required,trim",
			)
		),
		"ns" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:dns_manager/locallang_db.php:tx_dnsmanager_zone.ns",		
			"config" => Array (
				"type" => "select",	
				"foreign_table" => "tx_dnsmanager_host",	
				"foreign_table_where" => "AND tx_dnsmanager_host.pid=###STORAGE_PID### ORDER BY tx_dnsmanager_host.uid",	
				"size" => 10,	
				"minitems" => 0,
				"maxitems" => 10,	
				"MM" => "tx_dnsmanager_zone_ns_mm",
			)
		),
		"mx" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:dns_manager/locallang_db.php:tx_dnsmanager_zone.mx",		
			"config" => Array (
				"type" => "select",	
				"foreign_table" => "tx_dnsmanager_host",	
				"foreign_table_where" => "AND tx_dnsmanager_host.pid=###STORAGE_PID### ORDER BY tx_dnsmanager_host.uid",	
				"size" => 10,	
				"minitems" => 0,
				"maxitems" => 10,	
				"MM" => "tx_dnsmanager_zone_mx_mm",
			)
		),
	),
	"types" => Array (
		"0" => Array("showitem" => "hidden;;1;;1-1-1, zone, parent_zone, soa_default_ttl, soa_mname, soa_rname, soa_serial, soa_refresh, soa_retry, soa_expire, soa_negative_cache_ttl, ns, mx")
	),
	"palettes" => Array (
		"1" => Array("showitem" => "")
	)
);



$TCA["tx_dnsmanager_host"] = Array (
	"ctrl" => $TCA["tx_dnsmanager_host"]["ctrl"],
	"interface" => Array (
		"showRecordFieldList" => "hidden,hostname,zone,recordtype,ttl,address,comment"
	),
	"feInterface" => $TCA["tx_dnsmanager_host"]["feInterface"],
	"columns" => Array (
		"hidden" => Array (		
			"exclude" => 1,	
			"label" => "LLL:EXT:lang/locallang_general.php:LGL.hidden",
			"config" => Array (
				"type" => "check",
				"default" => "0"
			)
		),
		"hostname" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:dns_manager/locallang_db.php:tx_dnsmanager_host.hostname",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"eval" => "required,trim",
			)
		),
	),
	"types" => Array (
		"0" => Array("showitem" => "hidden;;1;;1-1-1, hostname, zone, recordtype, ttl, address, comment")
	),
	"palettes" => Array (
		"1" => Array("showitem" => "")
	)
);



$TCA["tx_dnsmanager_recordtype"] = Array (
	"ctrl" => $TCA["tx_dnsmanager_recordtype"]["ctrl"],
	"interface" => Array (
		"showRecordFieldList" => "hidden,type"
	),
	"feInterface" => $TCA["tx_dnsmanager_recordtype"]["feInterface"],
	"columns" => Array (
		"hidden" => Array (		
			"exclude" => 1,	
			"label" => "LLL:EXT:lang/locallang_general.php:LGL.hidden",
			"config" => Array (
				"type" => "check",
				"default" => "0"
			)
		),
		"type" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:dns_manager/locallang_db.php:tx_dnsmanager_recordtype.type",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"eval" => "required,trim",
			)
		),
	),
	"types" => Array (
		"0" => Array("showitem" => "hidden;;1;;1-1-1, type")
	),
	"palettes" => Array (
		"1" => Array("showitem" => "")
	)
);



$TCA["tx_dnsmanager_zone_services"] = Array (
	"ctrl" => $TCA["tx_dnsmanager_zone_services"]["ctrl"],
	"interface" => Array (
		"showRecordFieldList" => "hidden,zone,host,service_type,priority"
	),
	"feInterface" => $TCA["tx_dnsmanager_zone_services"]["feInterface"],
	"columns" => Array (
		"hidden" => Array (		
			"exclude" => 1,	
			"label" => "LLL:EXT:lang/locallang_general.php:LGL.hidden",
			"config" => Array (
				"type" => "check",
				"default" => "0"
			)
		),
		"zone" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:dns_manager/locallang_db.php:tx_dnsmanager_zone_services.zone",		
			"config" => Array (
				"type" => "select",	
				"foreign_table" => "tx_dnsmanager_zone",	
				"foreign_table_where" => "AND tx_dnsmanager_zone.pid=###STORAGE_PID### ORDER BY tx_dnsmanager_zone.uid",	
				"size" => 1,	
				"minitems" => 0,
				"maxitems" => 1,
			)
		),
		"host" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:dns_manager/locallang_db.php:tx_dnsmanager_zone_services.host",		
			"config" => Array (
				"type" => "select",	
				"foreign_table" => "tx_dnsmanager_host",	
				"foreign_table_where" => "AND tx_dnsmanager_host.pid=###STORAGE_PID### ORDER BY tx_dnsmanager_host.uid",	
				"size" => 1,	
				"minitems" => 0,
				"maxitems" => 1,
			)
		),
		"service_type" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:dns_manager/locallang_db.php:tx_dnsmanager_zone_services.service_type",		
			"config" => Array (
				"type" => "select",
				"items" => Array (
					Array("LLL:EXT:dns_manager/locallang_db.php:tx_dnsmanager_zone_services.service_type.I.0", "0"),
				),
				"size" => 1,	
				"maxitems" => 1,
			)
		),
		"priority" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:dns_manager/locallang_db.php:tx_dnsmanager_zone_services.priority",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"eval" => "int",
			)
		),
	),
	"types" => Array (
		"0" => Array("showitem" => "hidden;;1;;1-1-1, zone, host, service_type, priority")
	),
	"palettes" => Array (
		"1" => Array("showitem" => "")
	)
);

/*
                "zone" => Array (
                        "exclude" => 1,
                        "label" => "LLL:EXT:dns_manager/locallang_db.php:tx_dnsmanager_host.zone",
                        "config" => Array (
                                "type" => "select",
                                "foreign_table" => "tx_dnsmanager_zone",
                                "foreign_table_where" => "AND tx_dnsmanager_zone.pid=###STORAGE_PID### ORDER BY tx_dnsmanager_zone.uid",
                                "size" => 10,
                                "minitems" => 0,
                                "maxitems" => 10,
                                "MM" => "tx_dnsmanager_host_zone_mm",
                        )
                ),
                "recordtype" => Array (
                        "exclude" => 1,
                        "label" => "LLL:EXT:dns_manager/locallang_db.php:tx_dnsmanager_host.recordtype",
                        "config" => Array (
                                "type" => "select",
                                "foreign_table" => "tx_dnsmanager_recordtype",
                                "foreign_table_where" => "AND tx_dnsmanager_recordtype.pid=###STORAGE_PID### ORDER BY tx_dnsmanager_recordtype.uid",
                                "size" => 1,
                                "minitems" => 0,
                                "maxitems" => 1,
                        )
                ),
                "ttl" => Array (
                        "exclude" => 1,
                        "label" => "LLL:EXT:dns_manager/locallang_db.php:tx_dnsmanager_host.ttl",
                        "config" => Array (
                                "type" => "input",
                                "size" => "30",
                                "eval" => "trim",
                        )
                ),
                "address" => Array (
                        "exclude" => 1,
                        "label" => "LLL:EXT:dns_manager/locallang_db.php:tx_dnsmanager_host.address",
                        "config" => Array (
                                "type" => "input",
                                "size" => "30",
                                "eval" => "required,trim",
                        )
                ),
                "comment" => Array (
                        "exclude" => 1,
                        "label" => "LLL:EXT:dns_manager/locallang_db.php:tx_dnsmanager_host.comment",
                        "config" => Array (
                                "type" => "input",
                                "size" => "30",
                                "eval" => "trim",
                        )
                ),



*/
?>