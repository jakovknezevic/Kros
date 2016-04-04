<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <!--
    <link rel="stylesheet" type="text/css" href="forma.css">
    -->
    <title>Kros</title>
</head>

<body>
<h1>Kros</h1>

<p>

<form method="post" action="rezultat.php">
    Ime:<br>
    <input type="text" name="ime"><br>
    Prezime:<br>
    <input type="text" name="prezime"><br>
    Kategorija:<br>
    <input type="number" name="kategorija" min="1" max="10">

    <!--
    <input type="radio" name="spol" value="M">Muško<br>
    <input type="radio" name="spol" value="Ž">Žensko<br>
    <input type="radio" name="spol" value="JD">Nešto treće<br>
    -->
    <input type="submit" value="Submit">
</form>
</p>
</body>
</html>