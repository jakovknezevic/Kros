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
        <h1>Očitavanje</h1>
        <p class="lead"></p>
    </div>

    <div>
        <p>

        <form method="GET" action="ocitavanje1.php">
            <input type="text" class="hovershadow ocitavanje" autocomplete="off" onmouseover="this.focus();" name="Bar">
            <!--
            <input type="number" name="Id_Bar" min="1" max="10">
            -->


            <!--
            <input type="radio" name="spol" value="M">Muško<br>
            <input type="radio" name="spol" value="Ž">Žensko<br>
            -->

        </form>
        </p>

        

        <p>
        <form action="ispis.php">
            <input type="submit" class="button button1" value="Ispis"><br><br>
        </form>

        </p>



    </div>

</div><!-- /.container



<html>
<head>
    <meta charset="UTF-8">
    <!--
    <link rel="stylesheet" type="text/css" href="forma.css">
    -->

</head>

<body>







<!--
<a href="index.php">Početak</a>
-->

</body>
</html>