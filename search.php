<?php
/*
 * Written by: Cormac Callan, DKIT, D00182306
 * Web Services CA2 2018
 */


include 'soap-client.php';



$clientResult1 = displayAllArtists();
$results = json_decode($clientResult1, true);

$clientResult2 = displayArtistsByCountry();
$results1 = json_decode($clientResult2, true);

$clientResult3 = displayPopularTracks();
$results2 = json_decode($clientResult3, true);


//print json array
//echo "<pre>";
//print_r($results3);
//echo "</pre>";
//foreach ($results as $artist) {
//    echo $artist['artist_name'];
//    echo " ---";
//    echo $artist['artist_plays'];
//    echo "<br>";
//}

//echo "<br><br>";
//
//
//foreach ($results1 as $artist) {
//	echo $artist['artist_name'];
//	echo " ---";
//	echo $artist['country_name'];
//	echo "<br>";
//}
//
//echo "<br><br>";
//
//foreach ($results2 as $artist) {
//	echo $artist['country_name'];
//	echo " ---";
//	echo $artist['track_name'];
//	echo " ---";
//	echo $artist['track_plays'];
//	echo " ---";
//	echo $artist['artist_name'];
//
//	echo "<br>";
//}
?>



<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            th{
                width: auto; font-family: arial; color: white; 
            }
			tr{
				border: 1px solid black;

			}
			table{
				padding: 10px; border-radius: 15px;
			}

        </style>
    </head>
    <body background="img/search.jpg">
		<div style="height:250px;">
			
		</div>



		<table style="width: 20%;border: 1px solid black; background-color: #0695AB">
            <tr>
                <th style="color:white;font-size: 25px;"colspan="3">Artists Related to Search</th>
            </tr>
			<tr>
				
				<th style="padding: 15px;">Name</th>
				<th style="padding: 15px;">Origin</th>
            </tr>
<?php foreach ($results1 as $artist) : ?>

	            <tr>
	               
	                <th style="background-color: #f68800;font-size: 100%; border-radius: 20px 0 0 20px"><?php echo $artist['artist_name']; ?></th>
	                <th style="background-color: #1DB954;border-radius: 0 20px 20px 0 "><?php echo $artist['country_name']; ?></th>

	            </tr>
<?php endforeach; ?>

        </table>
		
		
			
	
		
		


		
		

			<?php
			// put your code here
			?>
    </body>
</html>
