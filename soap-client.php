<?php

/*
 * Written by: Cormac Callan, DKIT, D00182306
 * Web Services CA2 2018
 */


//uncomment these echos to see the string from the server;

//echo "<h3>0 Parameter JSON String</h3><pre>";
//print_r(displayAllArtists());
//echo "</pre><br><br>";
////
////
//echo "<h3>1 Parameter JSON String</h3><pre>";
//print_r(displayArtistsByCountry());
//echo "</pre><br><br>";
//
//echo "<h3>2 Parameter JSON String</h3><pre>";
//print_r(displayPopularTracks());
//echo "</pre><br><br>";

function displayAllArtists() {
	$client = new SoapClient("Artist.wsdl");
	$response = $client->getAllArtists();
	return $response;
}

function displayArtistsByCountry() {
	$country = 'Germany';
	$client = new SoapClient("Artist.wsdl");
	$response = $client->getArtistByCountry($country);
	return $response;
}

function displayPopularTracks() {
	$plays = 500000;
	$countryName = 'Germany';

	$client = new SoapClient("Artist.wsdl");
	$response = $client->getPopularTracks($plays, $countryName);
	return $response;
}
