<?php require('check.php'); ?>
<?php require('db.php'); ?>
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
    <?php
    

    //if ($result = $conn->query("SELECT * FROM students"))
    //{
    //    printf("Select returned $d rows.\n", $result->num_rows);
    //    $result->close();
    //}

    $sql = ("INSERT INTO skole (Naziv) VALUES ('" . $_GET['naziv'] ."');");

    $result = $conn->query($sql);
    echo($sql);
    //$sql = "INSERT INTO ucenici (Id_Bar, Kat_Id, Ime, Prezime) VALUES ('" . $_POST['Id_Bar'] ."','" . $_POST['Kat_Id'] ."','" . $_POST['Ime'] ."','" . $_POST['Prezime'] ."')";

    //$conn->query($sql) or die (!mysqli_error());
    /*
    if($result)
    {
        echo "Success executing : $sql";
    }
    else
    {
        echo "Failed executing : $sql";
    }
    */

    header("Location: unos_skola.php");
    ?>

    


    <br>
    <br>
    <!--
    <a href="index.php">Početak</a>
    -->
</p>
</body>
</html>