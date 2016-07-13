<?php require('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Kros</title>
</head>

<body>
<h1>
    Kros
</h1>

<p>
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
    <input type="submit" value="Login"><br><br>
</form>

</p>
</body>
</html>