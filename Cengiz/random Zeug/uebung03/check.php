<?php
/**
 * Created by PhpStorm.
 * User: cengizguertusgil
 * Date: 11.11.18
 * Time: 19:34
 */


$username = $_POST["userName"];
$password = $_POST["password"];
$email = $_POST["email"];
$alter = $_POST["age"];

session_start();
$_SESSION['username'] = $username;

function checkEmail($email)
{
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        echo("$email is a valid email address" . "<br>");
    } else {
        echo("$email is not a valid email address, please try again" . "<br>");
    }
}

checkEmail($email);


function checkAlter($alter)
{
    if (ctype_digit($alter) == false) {
        throw new Exception("Ungültige Eingabe für das alter"."<br>");
    }
    return true;
}

try {
    checkAlter($alter);
    echo "age is valid!" . "<br>";
} catch (Exception $e) {
    echo 'Message:' . $e->getMessage();
}


if ($username == "Jango" && $password == "fulda123" && $email == "cengiz.guertusgil@gmail.com") {
    include 'seite2.php';
} else {
    echo "ungültige Daten" . "<br>";
}

?>