<?php require('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="forma.css">
    <title>Forme</title>
</head>

<body>
<h1>Forme</h1>

<p>
    <?php

    //if ($result = $conn->query("SELECT * FROM students"))
    //{
    //    printf("Select returned $d rows.\n", $result->num_rows);
    //    $result->close();
    //}


    $conn->query("INSERT INTO students (name, surname) VALUES ('" . $_POST['ime'] ."','" . $_POST['prezime'] . "');");

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





    //$conn->close();
    /*

    if ($_POST['spol'] == 'M')
    {
        echo '<p class="musko">' . 'Vaše ime je: ' . htmlspecialchars($_POST["ime"]) . '<br>';
        echo 'Vaše prezime je: ' . htmlspecialchars($_POST["prezime"]) . '</p><br>';
        //echo 'Spol: ' . htmlspecialchars($_POST["spol"]) . '<br><br>';
    }

    elseif ($_POST['spol'] == 'Ž')
    {
        echo '<p class="zensko">' . 'Vaše ime je: ' . htmlspecialchars($_POST["ime"]) . '<br>';
        echo 'Vaše prezime je: ' . htmlspecialchars($_POST["prezime"]) . '</p><br>';
        //echo 'Spol: ' . htmlspecialchars($_POST["spol"]) . '<br><br>';
    }

    elseif ($_POST['spol'] == 'JD')
    {
        echo '<p class="jd">' . 'Vaše ime je: ' . htmlspecialchars($_POST["ime"]) . '<br>';
        echo 'Vaše prezime je: ' . htmlspecialchars($_POST["prezime"]) . '</p><br>';
        //echo 'Spol: ' . htmlspecialchars($_POST["spol"]) . '<br><br>';
    }

    */

    if ($_POST['spol'] == 'M')
    {
        echo ('Vi ste pravi muškarac!');
    }
    elseif ($_POST['spol'] == 'Ž')
    {
        echo ('Vi ste prava žena!');
    }
    elseif  ($_POST['spol'] == 'JD')
    {
        echo ('Što ste vi!?');
    }

    /*
    if ($_POST['ime'] and $_POST['prezime'] == '')
    {
        echo ('Niste unesli ime i prezime!' . '<br>');
    }
    elseif ($_POST['ime'] == '')
    {
        echo ('Niste unesli ime!' . '<br>');
    }
    elseif ($_POST['prezime'] == '')
    {
        echo('Niste unesli prezime!' . '<br>');
    }
    else
    {
        echo('');
    }

    */

    ?>

    <br>
    <br>
    <a href="index.php">Ponovni unos</a>

</p>
</body>
</html>