<?php
/**
 * Created by PhpStorm.
 * User: cengiz
 * Date: 23.11.18
 * Time: 00:09
 */

include("config.php");

//Variablen deklarieren und mit leeren Werten initalisieren

$username = "";
$password = "";
$passwordConfirm = "";
$usernameError = "";
$passwordError ="";
$passwordConfirmError ="";

//USERNAMEN Prüfen
//Diese IF Abfrage weil ich sonst Fehler bekommen, da beim ersten Aufruf noch kein post geschehen ist
if($_SERVER["REQUEST_METHOD"] == "POST"){



    /*Das empty prüft ob die Variable leer ist
    **Das trim entfernt die Leerzeichen
     mit $_POST["username"] hole ich mir das password aus meiner HTML Form
    Insgesamt wird hier geschaut ob das passwort leer ist
    */
    if(empty(trim($_POST["username"]))) {
        $usernameError =  "Bitte geben Sie einen Benutzernamen ein";

    }else {
        $username = trim($_POST["username"]);
    }
}

//Passwort prüfen

if(empty(trim($_POST["password"]))) {
    $passwordError = "Bitte geben Sie ein Passwort ein";

} elseif (strlen(trim($_POST["password"])) < 6) {
    $passwordError = "Password muss mindestens 6 Zeichen lang sein";

} else {
    $password = trim($_POST["password"]);
}

//Passwort bestätigung prüfen

if(empty(trim($_POST["passwordConfirm"]))) {
    $passwordConfirmError = "Bitte bestätigen Sie ihr Passwort.";


} else {
    $passwordConfirm = trim($_POST["passwordConfirm"]);
    if($password != $passwordConfirm) {
        $passwordConfirmError = "Passwörter stimmen nicht überein";
    }
}

//Überprüfen auf Eingabefehler
if(empty($usernameError) && empty($passwordError) && empty($passwordConfirmError)) {

    //SQL Statement Variable übergeben
    $sqlStatement = "INSERT INTO users (username, password) 
                     VALUES ('$username', '$password')";

    //SQL Insert durchführen mit mysqli query

    if(mysqli_query($connection, $sqlStatement)) {
        echo "Registrierung erfolgreich";
    } else {
        echo "Error:" .$sqlStatement . "<br>" . mysqli_error($connection);
    }
}
//Close connection
    mysqli_close($connection);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registrieren </title>
</head>
<body>

<div>
    <h2>Registrieren</h2>
    <p>Bitte erstelle eine Account</p>
    <form action="register.php" method="post">
        <?php echo $usernameError; ?>
        <?php echo $passwordError; ?>
        <?php echo $passwordConfirmError; ?>
        <input type="text" name="username" placeholder="Benutzername">
        <input type="text" name="password" placeholder="Passwort">
        <input type="password" name="passwordConfirm" placeholder="Passwort bestätigen">
        <br>
        <button type="submit" name="submit" value="submit">Registrieren</button>
        <br>
    </form>
</div>
</body>
</html>