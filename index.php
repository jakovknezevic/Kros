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
            <ul class="nav navbar-nav">
                <li class="active1"><a href="index.php">Početna</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">

    <div class="starter-template">
        <h1>Početna</h1>
		 <h2> <?php
				
				
				// echo "SID: ".SID."<br>session_id(): ".session_id()."<br>COOKIE: ".$_COOKIE["PHPSESSID"];
		// ?></h2>
        <p class="lead"></p>
    </div>

    <div>



        <p>


        <form style="text-align:center" action="upis.php">
            <input type="submit" class="button hovershadow fixed1" value="Upis učenika"><br><br>
        </form>

        <form style="text-align:center" action="ocitavanje.php">
            <input type="submit" class="button hovershadow" value="Očitavanje barkod skenerom"><br><br>
        </form>

        <!--

        <form style="text-align:center" action="unos_kat.php">
            <input type="submit" class="button hovershadow" value="Unos kategorija"><br><br>
        </form>

        <form style="text-align:center" action="unos_skola.php">
            <input type="submit" class="button hovershadow" value="Unos Škole"><br><br>
        </form>

        <form style="text-align:center" action="unos_nastavnika.php">
            <input type="submit" class="button hovershadow" value="Unos Nastavnika"><br><br>
        </form>

        -->

        <form style="text-align:center" action="unos_barkod.php">
            <input type="submit" class="button hovershadow" value="Barkod generator"><br><br>
        </form>




        </p>
    </div>

    <div id="logo">

        <img id="razmak" src="img/logo.jpg" alt="Kros logo">
        <img src="img/logo_skole.png" alt="Logo škole">

    </div>

</div>