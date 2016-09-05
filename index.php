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
            <ul class="nav navbar-nav">
                <li class="active1"><a href="index.php">Početna</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">

    <div class="starter-template">
        <h1>Početna</h1>
        <p class="lead"></p>
    </div>

    <div>

        <!--

        <form action="logout.php">
            <input type="submit" class="button" value="Logout"><br><br>
        </form>

        -->

        <p>


        <form action="upis.php">
            <input type="submit" class="button hovershadow fixed1" value="Upis učenika"><br><br>
        </form>

        <form action="ocitavanje.php">
            <input type="submit" class="button hovershadow" value="Očitavanje barkod skenerom"><br><br>
        </form>

        <form action="unos_kat.php">
            <input type="submit" class="button hovershadow" value="Unos kategorija"><br><br>
        </form>

        <form action="unos_skola.php">
            <input type="submit" class="button hovershadow" value="Unos Škole"><br><br>
        </form>

        <form action="unos_nastavnika.php">
            <input type="submit" class="button hovershadow" value="Unos Nastavnika"><br><br>
        </form>

        <form action="unos_barkod.php">
            <input type="submit" class="button hovershadow" value="Barkod generator"><br><br>
        </form>

        <!--
        <form action="test.php">
            <input type="submit" value="Test"><br><br>
        </form>

        -->

        <!--
        <input type="radio" name="spol" value="M">Muško<br>
        <input type="radio" name="spol" value="Ž">Žensko<br>
        -->



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



<?php
/*
if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
echo 'We don\'t have mysqli!!!';
} else {
echo 'Phew we have it!';
}
*/
?>

</body>
</html>