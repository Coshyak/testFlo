<?php
/**
 * Created by PhpStorm.
 * User: cengiz
 * Date: 22.11.18
 * Time: 21:39
 */

echo "fullamk";
// Verbindung zum server aufbauen;


$connection=mysqli_connect("localhost","cengiz","Jango12345@","crm");



$sqlStatement = "SELECT id, username FROM users";
$result = mysqli_query($connection, $sqlStatement);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
        $row["lastname"]. "<br>";
        }
    }
else {
    echo "No Results for your Query";
}

?>