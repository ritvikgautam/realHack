<?php
session_start();

ini_set('display_errors', 1); 
error_reporting(E_ALL);

/*
$lists = range('A','B');
$variable = "diseaseList";
foreach($lists as $list)
{
    $arr = $variable.$list;
    
    if(!empty($_POST[$arr])) {
        foreach($_POST[$arr] as $check) {
                    $_SESSION['city'] = $check;               
                }
        }
    }
}




$lists = range('B','C');
$variable = "diseaseList";
foreach($lists as $list)
{
    $arr = $variable.$list;
    
    if(!empty($_POST[$arr])) {
        foreach($_POST[$arr] as $check) {
                    $_SESSION['purpose'] = $check;
                }
        }
    }
}

*/

$lists = range('C','Z');
$variable = "diseaseList";
$listarr = array();
foreach($lists as $list)
{
    $arr = $variable.$list;
    
    if(!empty($_POST[$arr])) {
        foreach($_POST[$arr] as $check) {
                if($check != "no")
                {
                    array_push($listarr, $check);
                #echo "<h2>".$check."</h2>"; //echoes the value set in the HTML form for each checked checkbox.
                             //so, if I were to check 1, 3, and 5 it would echo value 1, value 3, value 5.
                             //in your case, it would echo whatever $row['Report ID'] is equivalent to.
                }
        }
    }
}
$_SESSION['keywords'] = $listarr; 
header("Location: fbdb.php");
?>