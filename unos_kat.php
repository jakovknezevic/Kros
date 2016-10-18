<?php require('check.php'); ?>
<?php require('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Kros</title>
</head>

<body>

<form action="logout.php">
    <input type="submit" value="Logout"><br><br>
</form>


<h1>Kros</h1>

<p>

<form method="GET" action="unos_kat1.php" target="_blank">
    Broj Kategorije:
    <input type="text" name="Id_Kat"><br><br>

    Naziv kategorije:
    <input type="text" name="Naziv">

    <br><br><input type="submit" value="Submit">

</form>
</p>

<p>
<form action="index.php">
    <input type="submit" value="Početak"><br><br>
</form>

</p>

</body>
</html>