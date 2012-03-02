<?php
/*
 * Enthält die Einstellungen für den Harvester.
 */


// ***** MYSQL Verbindungsdaten *****
include(dirname(__FILE__) . '/db_connect.php');



// ***** Allgmein *****

// Name des Dienstes; wird auf den Webseiten genutzt
define("SERVICE_NAME", 		'SUB');

// Adresse des Solr-Index
define("SOLR",				'http://vlib.sub.uni-goettingen.de/solr');

define("DATA_FOLDER",		'/var/www/harvesting/data/geo-leo-artikel');
//define("DATA_FOLDER",		'C:/harvest_data');



// ***** gemeinsam genutzte Einstellungen *****
include(dirname(__FILE__) . '/../settings-common.php');


?>
