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
            <ul class="nav navbar-nav">
                <li class="active1"><a href="index.php">Početna</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">

    <div class="starter-template">
        <h1>Greška</h1>
        <p class="lead"></p>
    </div>

    <div>
        <p class="font">
            <?php



            $sql = "SELECT * FROM nastavnici WHERE Username='" . $_POST['username'] ."'  AND Password='". $_POST['password'] ."'";
            $result = $conn->query($sql);


            if ($result->num_rows > 0) {
                // output data of each row
                session_start();
                $_SESSION['login'] = "1";
                header("Location: index.php");

            } else {

                echo "Provjerite jeste li ispravno unijeli podatke!";
                session_start();
                $_SESSION['login'] = '';
            }
            ?>

        <form action="login.php">
            <input type="submit" class="login hovershadow" value="Login"><br><br>
        </form>

        </p>

    </div>

</div><!-- /.container





<html>
<head>
    <title>Kros</title>
</head>

<body>
<h1>
    Kros
</h1>


</body>
</html>