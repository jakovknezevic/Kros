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
    /*
    $sql = ("SELECT Kat_Id, Ime, Prezime FROM ucenici WHERE Id_Bar=7622210471871");

    $result = $conn->query($sql);

    if($result)
    {
        echo "Success executing : $sql";
    }
    else
    {
        echo "Failed executing : $sql";
    }

    */
    //header("Location: ocitavanje.php");
    ?>

    <?php
    $sql = "SELECT Kat_Id, Ime, Prezime FROM ucenici WHERE Id_Bar='" . $_GET['Bar'] ."'";
    $result = $conn->query($sql);
    //echo($_GET['Bar'] . "????? ");
    if ($result->num_rows > 0) {
        // output data of each row
        echo('<table>');

        while($row = $result->fetch_assoc()) {

            echo('<td>' . $row['Kat_Id'] . '</td>');
            echo('<td>' . $row['Ime'] . '</td>');
            echo('<td>' . $row['Prezime'] . '</td>');
            echo('</tr>');
        }
        echo('</table>');
    } else {
        echo "Nema ucenika";
    }
    $conn->close();
    ?>


    <br>
    <br>
    <!--
    <a href="index.php">Početak</a>
    -->

</p>
</body>
</html>