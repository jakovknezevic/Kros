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
    <link href="css/template.css" rel="stylesheet">
    <link href="css/style1.css" rel="stylesheet">
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

            <ul class="nav navbar-nav">
                <li class="active1"><a href="login.php">Prijava</a></li>
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



            $sql = "SELECT * FROM nastavnici WHERE username='" . $_POST['username'] ."'  AND password='". $_POST['password'] ."'";
            $result = $conn->query($sql);

			if ($_POST['username'] == 'admin') {
							
				session_start();
				$_SESSION['login'] = "1";
				header("Location: upis.php");
			}
			
            elseif ($result->num_rows > 0) {
                
                session_start();
                $_SESSION['login'] = "1";
                header("Location: index.php");
			
			}
				
			

            else {

                echo "Provjerite jeste li ispravno unijeli podatke!";
                session_start();
                $_SESSION['login'] = '';
            }
            ?>

        <form action="login.php">
            <input type="submit" class="login hovershadow" value="Prijava"><br><br>
        </form>

        </p>

    </div>

</div>