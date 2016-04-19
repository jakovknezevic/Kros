<?php require('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <!--
    <link rel="stylesheet" type="text/css" href="forma.css">
    -->
    <title>Kros</title>
</head>

<body>
<h1>Kros</h1>

<p>
    <?php

    $sql = ("SELECT Kat_Id, Ime, Prezime FROM ucenici");

    $result = $conn->query($sql);

    header("Location: ocitavanje.php");
    ?>


    
    <br>
    <br>
    <a href="index.php">Početak</a>

</p>
</body>
</html>