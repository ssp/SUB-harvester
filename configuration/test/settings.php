<?php
/*
 * Enthält die Einstellungen für den Harvester.
 */


// ***** MYSQL Verbindungsdaten *****
include(dirname(__FILE__) . '/db_connect.php');



// ***** Allgmein *****

// Name des Dienstes; wird auf den Webseiten genutzt
define("SERVICE_NAME", 		'Test');

// Adresse des Solr-Index
define("SOLR",				'http://localhost:8080/solr/test');

define("DATA_FOLDER",		'/var/www/htdocs/harvester/data/test');
//define("DATA_FOLDER",		'C:/harvest_data');

define("METADATA_FORMAT",	'extpp');

// File name of stylesheet in software/xsl to convert the downloaded OAI-XML to Solr XML.
define("XSL_FILENAME",		'pica2solr.xsl');



// ***** gemeinsam genutzte Einstellungen *****
include(dirname(__FILE__) . '/../settings-common.php');


?>
