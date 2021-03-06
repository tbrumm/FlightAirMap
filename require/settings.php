<?php
//INSTALLED OR NOT ?
$globalInstalled = FALSE;

//GLOBAL SITE NAME
$globalName = "";

// GLOBAL URL
$globalURL = "";

// Logo URL
$logoURL = "/images/logo2.png";

// LANGUAGE
$globalLanguage = 'EN'; // Used only for wikipedia links for now

// MAP PROVIDER
$globalMapProvider = 'MapQuest-OSM'; // Can be Mapbox, OpenStreetMap, MapQuest-OSM or MapQuest-Aerial
$globalMapboxId = 'examples.map-i86nkdio'; // Mapbox id

//COVERAGE AREA (its based on a box model. i.e. top-left | top-right | bottom-right | bottom-left)
$globalLatitudeMax = '46.92'; //the maximum latitude (north)
$globalLatitudeMin = '42.14'; //the minimum latitude (south)
$globalLongitudeMax = '6.2'; //the maximum longitude (west)
$globalLongitudeMin = '1.0'; //the minimum longitude (east)

$globalCenterLatitude = '46.38'; //the latitude center of your coverage area
$globalCenterLongitude = '5.29';//the longitude center of your coverage area

// DATABASE CONNECTION LOGIN
$globalDBdriver = 'mysql'; // PDO driver used. Tested with mysql, maybe pgsql or others work...
$globalDBhost = 'localhost'; //database connection url
$globalDBuser = ''; //database username
$globalDBpass = ''; //database password
$globalDBname = ''; //database name

//FLIGHTAWARE API INFO
$globalFlightAware = FALSE; //set to TRUE to use FlightAware as data import
$globalFlightAwareUsername = ''; //FlightAware Username
$globalFlightAwarePassword = ''; //FlightAware Password/API key

// TIMEZONE
$globalTimezone = 'Europe/Paris';

//ADS-B, SBS1 FORMAT
$globalSBS1 = TRUE; //set to FALSE to not use SBS1 as data import
$globalSBS1Host = '127.0.0.1';
$globalSBS1Port = '30003';
$globalSBS1TimeOut = '15';

// To display Squawk usage we need Squawk country for now
$globalSquawkCountry = 'UK';

//BIT.LY API INFO (used in the search page for a shorter URL)
$globalBitlyAccessToken = ''; //the access token from the bit.ly API

//BRITISH AIRWAYS API INFO
$globalBritishAirwaysKey = '';

//ignore the flights during imports that have the following airports (departure/arrival) associated with them
$globalAirportIgnore = array();

?>
