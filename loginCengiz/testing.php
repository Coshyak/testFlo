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


<meta charset="UTF-8">
<title>Sign Up</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<style type="text/css">
    body{ font: 14px sans-serif; }
    .wrapper{ width: 350px; padding: 20px; }
</style>
</head>
<body>
<div class="wrapper">
    <div class="wrapper">
        <h2>Registrieren</h2>
        <p>Bitte erstelle eine Account</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($usernameError)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $usernameError; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($passwordError)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $passwordError; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($passwordConfirmError)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="passwordConfirm" class="form-control" value="<?php echo $passwordConfirm; ?>">
                <span class="help-block"><?php echo $passwordConfirmError; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>

</body>
</html>