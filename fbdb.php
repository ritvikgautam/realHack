<?php
session_start();

$servername = "localhost";
$susername = "root";
$spassword = "123456";
$dbname = "realhack";
$conn = mysql_connect($servername, $susername, $spassword);
mysql_select_db($dbname, $conn);

$query  = "SELECT `locality` FROM `age_rec` GROUP BY `locality` ORDER BY COUNT(*) DESC LIMIT 1";
$result = mysql_query($query);
$res = mysql_fetch_array($result);


$listarr = array();
$_SESSION['final'] = $listarr;

foreach($res as $list)
{
	array_push($listarr, $list);
	break;
}
$_SESSION['final'] = $listarr;

header("Location: MakeTextQuery.php");

?>