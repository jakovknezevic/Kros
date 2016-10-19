<?php require('db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prijava</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Custom styles for this template -->
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

            <ul class="nav navbar-nav">
                <li class="active1"><a href="login.php">Prijava</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">

    <div class="starter-template">
        <h1>Prijava</h1>
        <p class="lead"></p>
    </div>

    <div>
        <p>
        <form style="text-align:center" action="login_check.php" class="font" method="post">
            Korisnicko ime:<br>
            <input type="text" class="textbox hovershadow" autocomplete="on" name="username"><br>
            Lozinka:<br>
            <input type="password" class="textbox hovershadow" name="password"><br><br>
            <input type="submit" class="login hovershadow" value="Prijava">
        </form>
        </p>

        



    </div>

</div>