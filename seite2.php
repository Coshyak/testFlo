<?php
$zahl1 = $_POST["z1"];  //die variable passwort bekommt vorname übergeben
$zahl2 = $_POST["z2"];
$zahl3 = $_POST["z3"];
$rechenZeichen = $_POST["rZeichen"];
$rechenZeichen2 = $_POST["rZeichen2"];

echo "= ";

switch ($rechenZeichen) {
    case "plus":
        echo $zahl1 + $zahl2;
        break;
    case "minus":
        echo $zahl1 - $zahl2;
        break;
    case "mal":
        echo $zahl1 * $zahl2;
        break;
    case "geteilt":
        echo $zahl1 / $zahl2;
        break;
}

echo nl2br (" \n");
echo "= ";


switch ($rechenZeichen2) {
    case "wurzel":
        echo sqrt($zahl3);
    break;
}
    
?>
