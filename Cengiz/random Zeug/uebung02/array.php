<html>
<head>
    <meta charset=""UTF-8>
    <title>"Array Übung"</title>
</head>

<body>

<form action="array2.php" method="post">
    <input type="text" name="suchBegriff" placeholder="Suchbegriff eingeben">
    <br>
    <button type="submit" name="submit" value="submit">suche</button>
</form>

<?php
/**
 * Created by PhpStorm.
 * User: cengizguertusgil
 * Date: 11.11.18
 * Time: 16:51
 */

//Array zahlen erstellen und danach sortieren und ausgeben
$zahlen = array("5", "3", "4","9");

sort($zahlen);
foreach($zahlen as $zahl){
    echo $zahl . "<br>";
}

?>

</body>
</html>

