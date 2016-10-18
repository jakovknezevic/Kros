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


    $sql = ("INSERT IGNORE INTO ucenici (Kat_Id, Skole_Id, Razred, Ime, Prezime) VALUES ('" . $_GET['KatId'] ."','" . $_GET['SkoleId'] . "','" . $_GET['Razred'] ."','" . $_GET['Ime'] ."','" . $_GET['Prezime'] ."');");
    $result = $conn->query($sql);


    $sql1 = ("INSERT IGNORE INTO ucenici (Kat_Id, Skole_Id, Razred, Ime, Prezime) VALUES ('" . $_GET['KatId1'] ."','" . $_GET['SkoleId1'] . "','" . $_GET['Razred1'] ."','" . $_GET['Ime1'] ."','" . $_GET['Prezime1'] ."');");
    $result1 = $conn->query($sql1);
    echo($sql);
    echo($sql1);


    header("Location: upis.php");
    ?>

    


    <br>
    <br>

</p>
</body>
</html>