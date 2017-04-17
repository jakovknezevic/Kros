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
    
    <link href="css/template.css" rel="stylesheet">

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
                <li class="active1"><a href="ispis.php">Lista</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">

    <div class="starter-template">
        <h1>Poredak</h1>
        <p class="lead"></p>
    </div>

    <div>



        <p>
            


            <?php
            $sql = "SELECT Id, Ime, Prezime FROM ispis";
            $result = $conn->query($sql);
            //echo($_GET['Bar'] . "????? ");
            if ($result->num_rows > 0) {
                // output data of each row
                echo('<table>');

                echo('<tr>');
                echo('<th>' . 'Mjesto' . '</th>');
                echo('<th>' . 'Ime' . '</th>');
                echo('<th>' . 'Prezime' . '</th>');
                echo('</tr>');

                while($row = $result->fetch_assoc()) {


                    echo('<tr>');
                    echo('<td>' . $row['Id'] . '</td>');
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

        </p>

        <p>
        <form action="ocitavanje.php">
            <input type="submit" class="button button1" value="Nazad"><br><br>
        </form>

        </p>

    </div>

</div>
