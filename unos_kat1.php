<?php require('check.php'); ?>
<?php require('db.php'); ?>

    <?php

    $sql = ("INSERT INTO kategorije (Id_Kat, Naziv_Kategorije) VALUES ('" . $_GET['Id_Kat'] ."','" . $_GET['Naziv'] ."');");

    $conn->query($sql);

    header("Location: unos_kat.php");
    ?>
