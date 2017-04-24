<?php require('check.php'); ?>
<?php require('db.php'); ?>
<?php require('generator.php'); ?>
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
    <link href="css/style.css" rel="stylesheet">
	<link href="css/style1.css" rel="stylesheet">
    
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
                <li class="active1"><a href="unos_barkod.php">Barkod Generator</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">

    <div class="starter-template">

        <p class="lead"></p>
    </div>

    <div class="font resize border1">


<?php

$sql = "SELECT Id, Ime, Prezime FROM ucenici WHERE Ime='" . $_GET['Ime'] ."' AND Prezime='". $_GET['Prezime'] ."'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc())
    {

        echo('<tr>');
        echo('<td>' . $row['Id'] . ' ' . '</td>');
        echo('<td>' . $row['Ime'] . ' ' . '</td>');
        echo('<td>' . $row['Prezime'] . '</td>');
        generate_barcode($row['Id']);
        echo('</tr>');


    }
} else {
    echo "Učenik ne postoji u bazi, provjerite jeste li ispravno unijeli podatke!<br>";
    echo "Kliknite na strelicu gore da biste otišli korak nazad.";
}
$conn->close();
?>

        <body>


        <button onclick="myFunction()" class="login hovershadow print-button no-print">Print</button>

        <script>

            function myFunction() {
                window.print();
            }
        </script>

        </body>



    </div>

</div>