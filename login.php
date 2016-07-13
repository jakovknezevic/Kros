<?php require('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Prijava</title>
</head>

<body>
<h1>
    Prijava
</h1>

<p>
<form action="login_check.php" method="post">
    Korisnicko ime:<br>
    <input type="text" name="username"><br>
    lozinka:<br>
    <input type="text" name="password"><br><br>
    <input type="submit" value="Prijava">
</form>
</p>

</body>
</html>