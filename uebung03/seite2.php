<html>
<head>
    <meta charset=""UTF-8>
    <title>"Bachelor Projekt: Taschenrechner"</title>
</head>

<body>
<h4>Basic Rechen Operationen</h4>

<form action="seite3.php" method="post">
    <input type="text" name="userName" placeholder="Username">
    <br>
    <br>
    <input type="text" name="z1" placeholder="Zahl 1">
    <input type="text" name="z2" placeholder="Zahl 2">
    <select name="rZeichen">
        <option>plus</option>
        <option>minus</option>
        <option>mal</option>
        <option>geteilt</option>
        <option>wurzel</option>
    </select>

    <br>
    <button type="submit" name="submit" value="submit">Berechne</button>
    <br>
    <h4>Erweiterte Rechen Operationen</h4>
    <input type="text" name="z3" placeholder="Zahl">
    <select name="rZeichen2">
        <option>wurzel</option>
    </select>

    <br>
    <button type="submit" name="submit" value="submit">Berechne</button>

</form>


<?php


?>


<h1></h1>
</body>
</html>