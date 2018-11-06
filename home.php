<?php


/*
 * Written by: Cormac Callan, DKIT, D00182306
 * Web Services CA2 2018
 */


include 'soap-client.php';



$clientResult1 = displayAllArtists();
$results = json_decode($clientResult1, true);







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
    <body background="img/home.jpg">
        
        
        <table style="width: 20%;border: 1px solid black; background-color: #0695AB">
            <tr>
                <th style="color:white;font-size: 25px;"colspan="3">This Weeks Hot Artists</th>
            </tr>
                        <tr>
							<th style="padding: 15px;">Website</th>
                 <th style="padding: 15px;">Name</th>
                  <th style="padding: 15px;">Avg. Spotify Hits</th>
            </tr>
             <?php foreach ($results as $artist) : ?>
            
            <tr>
                <th> <img style="width: 100px;height: 100px; border-radius: 20px;" src="<?php echo $artist['artist_pic']; ?>"></th>
                <th style="background-color: #f68800;font-size: 100%; border-radius: 20px 0 0 20px"><?php echo $artist['artist_name'];?></th>
                <th style="background-color: #1DB954;border-radius: 0 20px 20px 0 "><?php echo $artist['artist_plays'];?></th>
                
            </tr>
             <?php endforeach; ?>
            
        </table>
        <?php
        // put your code here
        ?>
    </body>
</html>
