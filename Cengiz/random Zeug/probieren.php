<?php

$zahlen = array("5", "3", "4","9");

sort($zahlen);

foreach($zahlen as $zahl){
    echo $zahl . "<br>";
}

/*

$kalender = array();
$kalender["woche1"]["termin1"] = "Vorlesung";
$kalender["woche2"]["termin1"] = "Praktikum";

foreach($kalender as $woche => $inhalt) {
    //echo "{$woche} => {$inhalt}";
    //echo "{$woche} => {$inhalt} <br>";
    echo $kalender . "=>" . $inhalt . "=>" . $inhalt['termin1'] . "<br>";
}
/*
echo $zahlen[4];

//assoziativ array
$wochentage = array("so" =>"Sonntag", "mo" => "Montag", "di" => "Dienstag");
echo $wochentage["mo"];
*/


?>

