<?php
/**
 * Created by PhpStorm.
 * User: cengizguertusgil
 * Date: 11.11.18
 * Time: 16:59
 */
$x = $_POST["suchBegriff"]; //die Variable x bekommt den Wert von suchBegriff zugeordnet

$begriffe = array("kanye", "drake", "cengiz");


/*
foreach($begriffe as $i) {
    if (strcmp($x ,$i)) {
        echo "Treffer, der gesuchte Begriff ist im Array" . "<br>";
        break;
    } echo "Kein Treffer! probieren Sie es erneut" . "<br>";
}
*/

foreach($begriffe as $begriff) {

    if (strcmp($x ,$begriff)) {
        echo "Treffer, der gesuchte Begriff ist im Array" . "<br>";
    } else {
        echo "Kein Treffer! probieren Sie es erneut" . "<br>";
    }
}



//alternative Lösung
/*
if (in_array($x, $begriffe)) {
    echo "Treffer";
} echo "kein Treffer";

*/

?>