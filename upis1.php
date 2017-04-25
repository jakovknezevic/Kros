<?php require('check.php'); ?>
<?php require('db.php'); ?>
<?php require('generator.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kros</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/template.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
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

            <a class="navbar-brand" href="logout.php">Odjava</a>
            <a class="navbar-brand" href="index.php">Početna</a>
            <ul class="nav navbar-nav">
                <li class="active1"><a href="upis.php">Unos učenika</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">

    <div class="starter-template">

        <p class="lead"></p>
    </div>

    <div class="font resize border1">

<p>
    <?php


    $sql = ("INSERT IGNORE INTO ucenici (Kat_Id, Skole_Id, Razred, Ime, Prezime) VALUES ('" . $_GET['KatId'] ."','" . $_GET['SkoleId'] . "','" . $_GET['Razred'] ."','" . $_GET['Ime'] ."','" . $_GET['Prezime'] ."');");
    $result = $conn->query($sql);


	
    // $sql1 = ("INSERT IGNORE INTO ucenici (Kat_Id, Skole_Id, Razred, Ime, Prezime) VALUES ('" . $_GET['KatId1'] ."','" . $_GET['SkoleId1'] . "','" . $_GET['Razred1'] ."','" . $_GET['Ime1'] ."','" . $_GET['Prezime1'] ."');");
    // $result1 = $conn->query($sql1);
    // echo($sql1);

	
	
	//echo($sql);
	
	


	
	//$sql2 = "SELECT ucenici.Id_ucenici, ucenici.Ime, ucenici.Prezime, skola.naziv FROM (SELECT skola* limit 1) WHERE ucenici.Ime='" . $_GET['Ime'] ."' AND ucenici.Prezime='". $_GET['Prezime'] ."'";
	$sql2 = "SELECT ucenici.ID_ucenici as 'Id', ucenici.Ime as 'Ime', ucenici.Prezime as 'Prezime', skola.naziv as 'naziv' FROM (SELECT skola.naziv as 'naziv' from skola limit 1)as sas, ucenici JOIN skola ON ucenici.Skole_ID=skola.ID_skola WHERE ucenici.Ime='" . $_GET['Ime'] ."' AND ucenici.Prezime='". $_GET['Prezime'] ."'";
	$result = $conn->query($sql2);
	
	//echo($sql2);


	if ($result->num_rows > 0) {

		while($row = $result->fetch_assoc())
		{

			echo('<tr>');
			echo('<td>' . '</td>');
			echo('<td>' . '</td>');
			echo('<td>' . $row['Id'] . ' ' . '</td>');
			echo('<td>' . $row['Ime'] . ' ' . '</td>');
			echo('<td>' . $row['Prezime'] . '</td>');
			echo('<td>' . '</td>');
			generate_barcode($row['Id']);
			echo('<td>' . $row['naziv'] . '</td>');
			echo('');
			echo('</tr>');


			}
	} else {
		echo "Učenik ne postoji u bazi, provjerite jeste li ispravno unijeli podatke!<br>";
		echo "Kliknite na strelicu gore da biste otišli korak nazad.";
	}
	//$conn->close();

    //header("Location: upis.php");
    ?>

    


    <br>
    <br>

</p>

<body>


        <button onclick="myFunction()" class="login hovershadow print-button no-print">Print</button>

        <script>

            function myFunction() {
                window.print();
            }
        </script>

        </body>



    </div>

</div>
</body>
</html>