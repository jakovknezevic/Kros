<?php require('check.php'); ?>
<?php require('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Kros</title>
</head>

<body>
<h1>Kros</h1>

<p>
    <?php

    $sql = ("INSERT INTO nastavnici (Ime, Prezime, Username, Password) VALUES ('" . $_GET['ime'] ."','" . $_GET['prezime'] . "','" . $_GET['username'] ."','" . $_GET['password'] ."');");

    $result = $conn->query($sql);
    echo($sql);

    header("Location: unos_nastavnika.php");
    ?>

</p>
</body>
</html>