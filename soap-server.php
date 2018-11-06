<?php

require('database.php');

/*
 * Written by: Cormac Callan, DKIT, D00182306
 * Web Services CA2 2018
 */

function getAllArtists() {
    global $db;


    $response = '';

    try {

        $queryDisplay = $db->prepare('SELECT * from artist order by artist_plays desc');
        $queryDisplay->execute();
        $rows = $queryDisplay->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $ex) {
        echo "Error fetching";
    }




    //return $response;
    return json_encode($rows);
}

function getArtistByCountry($country) {
    global $db;




    $response = '';

    try {

        $queryDisplay = $db->prepare('SELECT `artist`.`artist_name`, `country`.`country_name`
FROM `country`
    LEFT JOIN `artist` ON `artist`.`country_id` = `country`.`country_id`
    Where country_name = "' . $country . '"');


        $queryDisplay->execute();
        $rows = $queryDisplay->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $ex) {
        echo "Error fetching";
    }



    return json_encode($rows);
}

function getPopularTracks($plays, $countryName) {
    global $db;

   
    $countryName = "United Kingdom";

    $response = '';

    try {

        $queryDisplay = $db->prepare('SELECT `country`.`country_name`, `tracks`.`track_name`, `tracks`.`track_plays`, `artist`.`artist_name`
FROM `artist`
    LEFT JOIN `tracks` ON `tracks`.`artist_id` = `artist`.`artist_id`
    LEFT JOIN `country` ON `artist`.`country_id` = `country`.`country_id`
    WHERE track_plays >=' . $plays . ' AND  country_name = "' . $countryName . '"');
        $queryDisplay->execute();
        $rows = $queryDisplay->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $ex) {
        echo "Error fetching";
    }

    return json_encode($rows);
}

ini_set("soap.wsdl_cache_enabled", "0");
$server = new SoapServer("Artist.wsdl");
$server->addFunction("getArtistByCountry");
$server->addFunction("getAllArtists");
$server->addFunction("getPopularTracks");
$func = $server->getFunctions();
$server->handle();
?>

