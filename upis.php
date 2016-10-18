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
    <link href="css/style.css" rel="stylesheet">
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
                <li class="active1"><a href="upis.php">Unos učenika</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">

    <div class="starter-template">
        <h1>Unos učenika</h1>
        <p class="lead"></p>
    </div>

    <div>
        <p>



        <form method="GET" class="font spacing center" action="upis1.php">

            <strong>Prva Forma</strong><br><br>

            Kategorija:
            <input type="number" class="textbox hovershadow" autocomplete="off" name="KatId"><br><br>
            Id Skole:
            <input type="number" class="textbox hovershadow" autocomplete="off" name="SkoleId"><br><br>
            Razred:
            <input type="text" class="textbox hovershadow" autocomplete="off" name="Razred"><br><br>
            Ime:
            <input type="text" class="textbox hovershadow" autocomplete="off" name="Ime"><br><br>
            Prezime:
            <input type="text" class="textbox hovershadow" autocomplete="off" name="Prezime"><br>

            <br><br><br>

            <br><input type="submit" class="login hovershadow center1" value="Submit"><br><br>
            
            <strong>Druga Forma</strong><br><br>


            Kategorija:
            <input type="number" class="textbox hovershadow" autocomplete="off" name="KatId1"><br><br>
            Id Skole:
            <input type="number" class="textbox hovershadow" autocomplete="off" name="SkoleId1"><br><br>
            Razred:
            <input type="text" class="textbox hovershadow" autocomplete="off" name="Razred1"><br><br>
            Ime:
            <input type="text" class="textbox hovershadow" autocomplete="off" name="Ime1"><br><br>
            Prezime:
            <input type="text" class="textbox hovershadow" autocomplete="off" name="Prezime1"><br>



        </form>
        
        </p>

    </div>

</div>


