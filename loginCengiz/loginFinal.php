<?php
/**
 * Created by PhpStorm.
 * User: cengiz
 * Date: 23.11.18
 * Time: 00:09
 */

include("config.php");

//Variablen deklarieren und mit leeren Werten initalisieren


$checkPassword = false;
$checkPasswordConfirm = false;
//USERNAMEN Prüfen
//Diese IF Abfrage weil ich sonst Fehler bekommen, da beim ersten Aufruf noch kein post geschehen ist
if($_SERVER["REQUEST_METHOD"] == "POST"){

    if (empty($_POST['username'])) {
         echo "Bitte Benutzernamen eingeben";
    } else {
     $username =  mysqli_real_escape_string($connection, $_POST["username"]);
    }

    if (empty($_POST['password'])) {
        echo "Bitte passwort eingeben";
    } else {
        $password =  mysqli_real_escape_string($connection, $_POST["password"]);
        $checkPassword = true;
    }

    if (empty($_POST['passwordConfirm'])) {
        echo "Bitte Passwort bestätigen";
    } else {
        $passwordConfirm =  mysqli_real_escape_string($connection, $_POST["password"]);
        $checkPasswordConfirm = true;
    }

    if($password  != $passwordConfirm) {
        echo "Passwörter stimmen nicht überein";
    }

}



//Passwort prüfen

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <title>Registrieren </title>
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
<form action="register.php"?>" method="post">  // hier poste ich es an mich selber
    <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
        <label>Benutzername</label>
        <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
        <span class="help-block"><?php echo $username_err; ?></span>
    </div>
    <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
        <label>Passwort</label>
        <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
        <span class="help-block"><?php echo $password_err; ?></span>
    </div>
    <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
        <label>Passwort bestätigen</label>
        <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
        <span class="help-block"><?php echo $confirm_password_err; ?></span>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Submit">
        <input type="reset" class="btn btn-default" value="Reset">
    </div>
    <p>Sie haben bereits einen Account? <a href="login.php">Login hier</a>.</p>
</form>

</body>

</html>



