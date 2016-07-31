<?php require('check.php'); ?>
<?php require('db.php'); ?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kros</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/template.css" rel="stylesheet">
    <![endif]-->
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top hovershadow">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="logout.php">Odjava</a>
            <a class="navbar-brand" href="index.php">Početna</a>
            <ul class="nav navbar-nav">
                <li class="active1"><a href="ocitavanje.php">Očitavanje</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">

    <div class="starter-template">
        <h1>Lista</h1>
        <p class="lead"></p>
    </div>

    <div>



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
    $sql = "SELECT Razred, Ime, Prezime FROM ucenici WHERE Id='" . $_GET['Bar'] ."'";
    $result = $conn->query($sql);
    //echo($_GET['Bar'] . "????? ");
    if ($result->num_rows > 0) {
        // output data of each row
        echo('<table>');

        while($row = $result->fetch_assoc()) {


            echo('<tr>');
            echo('<th>' . 'Ime' . '</th>');
            echo('<th>' . 'Prezime' . '</th>');
            echo('<th>' . 'Razred' . '</th>');
            echo('</tr>');
            echo('<tr>');
            echo('<td>' . $row['Ime'] . '</td>');
            echo('<td>' . $row['Prezime'] . '</td>');
            echo('<td>' . $row['Razred'] . '</td>');
            echo('</tr>');
        }
        echo('</table>');

        $sql1 = "INSERT IGNORE INTO ispis (Ime, Prezime) SELECT Ime, Prezime FROM ucenici WHERE Id='" . $_GET['Bar'] ."'";
        $result1 = $conn->query($sql1);
        header("Location: ocitavanje.php");
    } else {
        echo "Nema ucenika";
    }
    $conn->close();
    ?>

    <?php

    echo($sql);
    echo($sql1);

    ?>


    <br>
    <br>
    <!--
    <a href="index.php">Početak</a>
    -->

</p>
    </div>

</div><!-- /.container


</body>
</html>
