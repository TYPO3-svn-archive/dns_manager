#
# Table structure for table 'tx_dnsmanager_zone_ns_mm'
# 
#
CREATE TABLE tx_dnsmanager_zone_ns_mm (
  uid_local int(11) unsigned DEFAULT '0' NOT NULL,
  uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
  tablenames varchar(30) DEFAULT '' NOT NULL,
  sorting int(11) unsigned DEFAULT '0' NOT NULL,
  KEY uid_local (uid_local),
  KEY uid_foreign (uid_foreign)
);




#
# Table structure for table 'tx_dnsmanager_zone_mx_mm'
# 
#
CREATE TABLE tx_dnsmanager_zone_mx_mm (
  uid_local int(11) unsigned DEFAULT '0' NOT NULL,
  uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
  tablenames varchar(30) DEFAULT '' NOT NULL,
  sorting int(11) unsigned DEFAULT '0' NOT NULL,
  KEY uid_local (uid_local),
  KEY uid_foreign (uid_foreign)
);



#
# Table structure for table 'tx_dnsmanager_zone'
#
CREATE TABLE tx_dnsmanager_zone (
	uid int(11) unsigned DEFAULT '0' NOT NULL auto_increment,
	pid int(11) unsigned DEFAULT '0' NOT NULL,
	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	zone varchar(255) DEFAULT '' NOT NULL,
	parent_zone int(11) unsigned DEFAULT '0' NOT NULL,
	soa_default_ttl varchar(255) DEFAULT '' NOT NULL,
	soa_mname varchar(255) DEFAULT '' NOT NULL,
	soa_rname varchar(255) DEFAULT '' NOT NULL,
	soa_serial tinytext NOT NULL,
	soa_refresh varchar(255) DEFAULT '' NOT NULL,
	soa_retry varchar(255) DEFAULT '' NOT NULL,
	soa_expire varchar(255) DEFAULT '' NOT NULL,
	soa_negative_cache_ttl varchar(255) DEFAULT '' NOT NULL,
	is_dirty tinyint(4) unsigned DEFAULT '0' NOT NULL,
	ns int(11) unsigned DEFAULT '0' NOT NULL,
	mx int(11) unsigned DEFAULT '0' NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);




#
# Table structure for table 'tx_dnsmanager_host_zone_mm'
# 
#
CREATE TABLE tx_dnsmanager_host_zone_mm (
  uid int(11) unsigned DEFAULT '0' NOT NULL auto_increment,
  uid_local int(11) unsigned DEFAULT '0' NOT NULL,
  uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
  recordtype int(11) unsigned DEFAULT '0' NOT NULL,
  ttl varchar(255) DEFAULT '' NOT NULL,
  address varchar(255) DEFAULT '' NOT NULL,
  comment varchar(255) DEFAULT '' NOT NULL,
  tablenames varchar(30) DEFAULT '' NOT NULL,
  sorting int(11) unsigned DEFAULT '0' NOT NULL,
  PRIMARY KEY (uid),
  KEY uid_local (uid_local),
  KEY uid_foreign (uid_foreign)
);



#
# Table structure for table 'tx_dnsmanager_host'
#
CREATE TABLE tx_dnsmanager_host (
	uid int(11) unsigned DEFAULT '0' NOT NULL auto_increment,
	pid int(11) unsigned DEFAULT '0' NOT NULL,
	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hostname varchar(255) DEFAULT '' NOT NULL,
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_dnsmanager_recordtype'
#
CREATE TABLE tx_dnsmanager_recordtype (
	uid int(11) unsigned DEFAULT '0' NOT NULL auto_increment,
	pid int(11) unsigned DEFAULT '0' NOT NULL,
	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	type varchar(255) DEFAULT '' NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_dnsmanager_zone_services'
#
CREATE TABLE tx_dnsmanager_zone_services (
	uid int(11) unsigned DEFAULT '0' NOT NULL auto_increment,
	pid int(11) unsigned DEFAULT '0' NOT NULL,
	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	zone int(11) unsigned DEFAULT '0' NOT NULL,
	host int(11) unsigned DEFAULT '0' NOT NULL,
	service_type int(11) unsigned DEFAULT '0' NOT NULL,
	priority int(11) DEFAULT '0' NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);
