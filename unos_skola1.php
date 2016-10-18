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

    $sql = ("INSERT INTO skole (Naziv) VALUES ('" . $_GET['naziv'] ."');");

    $result = $conn->query($sql);
    echo($sql);

    header("Location: unos_skola.php");
    ?>

</p>
</body>
</html>