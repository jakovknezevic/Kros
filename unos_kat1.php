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

    $sql = ("INSERT INTO kategorije (Id_Kat, Naziv_Kategorije) VALUES ('" . $_POST['Id_Kat'] ."','" . $_POST['Naziv'] ."')");

    $conn->query($sql);


    header("Location: unos_kat.php");
    ?>


    <br>
    <br>
    <a href="index.php">Početak</a>

</p>
</body>
</html>