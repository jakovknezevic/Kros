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

<form method="GET" action="unos_skola1.php">

    Naziv Škole:
    <input type="text" name="naziv"><br>

    <br><input type="submit" value="Submit">

</form>
</p>



<p>
<form action="index.php">
    <input type="submit" value="Početak"><br><br>
</form>

</p>

</body>
</html>