<?php
$zahl1 = $_POST["z1"];  //die variable passwort bekommt vorname übergeben
$zahl2 = $_POST["z2"];
$zahl3 = $_POST["z3"];
$rechenZeichen = $_POST["rZeichen"];
$rechenZeichen2 = $_POST["rZeichen2"];
session_start();
$username = $_SESSION['username'];



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

file_put_contents("log.txt", "Taschenrechner wurde von " . $username . " benutzt: \r\n", FILE_APPEND);
/*
\r = CR (Carriage Return) // Used as a new line character in Mac OS before X

\n = LF (Line Feed) // Used as a new line character in Unix/Mac OS X

\r\n = CR + LF // Used as a new line character in Windows
/*
    
?>
