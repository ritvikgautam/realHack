<?php
ini_set('display_errors', 1); 
error_reporting(E_ALL);
   session_start();
   $masterarr = $_SESSION['keywords'];
   foreach ($masterarr as $x)
   {
	$query = $x."+in+bangalore";
	$key = "AIzaSyDpwfF8K8vjccnkdYz7Fxh8OVr9kiGjL2U";
	$json_raw = file_get_contents("https://maps.googleapis.com/maps/api/place/textsearch/json?query=".$query."&key=".$key);
	$json = json_decode($json_raw, true);

	$array = array();
	foreach($json['results'] as $result) 
{
   $lat = $result['geometry']['location']['lat'];
   $lng = $result['geometry']['location']['lng'];

   $query = "https://maps.googleapis.com/maps/api/geocode/json?latlng=".$lat.",".$lng."&result_type=street_address&key=".$key;
   $json_raw_down = file_get_contents($query);
   $json_down = json_decode($json_raw_down, true);
   foreach($json_down['results'] as $result_down)
   {
   		$yay =  (string)$result_down['address_components'][2]['long_name'];
   		array_push($array, $yay);
   }
}
}
$inputArray = $array;
$finalarr = $_SESSION['final'];

$countedArray = array_count_values($inputArray);
arsort($countedArray);

$topTen = array_slice($countedArray, 0, 5);
$keys = array_keys($topTen);
foreach ($keys as $items)
{
   array_push($finalarr, $items);
}
$_SESSION['final'] = $finalarr;
header("Location: housing.php");
?>