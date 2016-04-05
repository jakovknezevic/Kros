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

    //if ($result = $conn->query("SELECT * FROM students"))
    //{
    //    printf("Select returned $d rows.\n", $result->num_rows);
    //    $result->close();
    //}

    /*
    $conn->query("INSERT INTO ucenici (Id_Bar, Kat_Id, Ime, Prezime) VALUES ('" . $_POST['Id_Bar'] ."','" . $_POST['Kat_Id'] ."','" . $_POST['Ime'] ."','" . $_POST['Prezime'] ."');");

    $result = $conn->query("SELECT * FROM students ORDER BY surname");
    if($result)
    {

        while ($row = $result->fetch_object())
        {
            //print_r($row);
            echo ('Ime i prezime ucenika: ' . $row->name . ' ' . $row->surname . '<br>');

        }

        $result->close();
        $conn->next_result();

    }
    */
    if ($_POST['submit'] == true)
    {
        $conn->query("INSERT INTO ucenici (Id_Bar, Kat_Id, Ime, Prezime) VALUES ('" . $_POST['Id_Bar'] ."','" . $_POST['Kat_Id'] ."','" . $_POST['Ime'] ."','" . $_POST['Prezime'] ."');");
    }


    ?>

    <br>
    <br>
    <a href="index.php">Ponovni unos</a>

</p>
</body>
</html>