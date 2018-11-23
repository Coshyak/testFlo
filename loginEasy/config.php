<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'cengiz');
define('DB_PASSWORD', 'Jango12345@');
define('DB_DATABASE', 'crm');
$connect = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if($connect === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
