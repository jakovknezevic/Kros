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

    $sql = ("INSERT INTO kategorije (Id_Kat, Naziv_Kategorije) VALUES ('" . $_GET['Id_Kat'] ."','" . $_GET['Naziv'] ."');");

    $conn->query($sql);

    if($result)
    {
        echo "Success executing : $sql";
    }
    else
    {
        echo "Failed executing : $sql";
    }

    //header("Location: unos_kat.php");
    ?>


    <br>
    <br>
    <a href="index.php">Početak</a>

</p>
</body>
</html>