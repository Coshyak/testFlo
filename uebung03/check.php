<?php
/**
 * Created by PhpStorm.
 * User: cengizguertusgil
 * Date: 11.11.18
 * Time: 19:34
 */

$zahl1 = $_POST["z1"];  //die variable passwort bekommt vorname übergeben
$zahl2 = $_POST["z2"];
$zahl3 = $_POST["z3"];
$rechenZeichen = $_POST["rZeichen"];
$rechenZeichen2 = $_POST["rZeichen2"];
$username = $_POST["userName"];

$username =$_POST["userName"];
$password =$_POST["password"];
$email=$_POST["email"];

if($userName == "Jango" && $password == "fulda123" && $email == "cengiz.guertusgil@gmail.com") {
    include'seite2.php';
} echo "ungültige Daten";

?>