<?php
ini_set('display_errors', 1); 
error_reporting(E_ALL);
	$query = "restaurants+in+bangalore";
	$key = "AIzaSyAW-yGEXwonnvbo_OqAbsuKh3iWzaA6Puw";
	$json_raw = file_get_contents("https://maps.googleapis.com/maps/api/place/radarsearch/json?location=12.980468,77.604721&radius=50000&types=food&key=".$key);
	$json = json_decode($json_raw, true);


	foreach($json['results'] as $result) 
{
   $lat = $result['geometry']['location']['lat'];
   $lng = $result['geometry']['location']['lng'];

   $query = "https://maps.googleapis.com/maps/api/geocode/json?latlng=".$lat.",".$lng."&result_type=street_address&key=".$key;
   $json_raw_down = file_get_contents($query);
   $json_down = json_decode($json_raw_down, true);
   foreach($json_down['results'] as $result_down)
   {
   		echo $result_down['address_components'][2]['long_name'];
   		echo "<br>";
   }
}
?>