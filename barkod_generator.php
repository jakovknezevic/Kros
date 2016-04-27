<?php require('db.php'); ?>
<?php require('generator.php'); ?>

<?php

$sql = "SELECT Id FROM ucenici WHERE Ime='" . $_GET['Ime'] ."' AND Prezime='". $_GET['Prezime'] ."'";
$result = $conn->query($sql);
//$ime = mysqli_real_escape_string($_POST['email']);
//echo($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo('<table>');

    while($row = $result->fetch_assoc()) {

        echo('<td>' . $row['Id'] . '</td>');
        generate_barcode($row['Id']);
        echo('</tr>');

    }
    echo('</table>');
} else {
    echo "Nema Id-a";
}
$conn->close();





//$query = "SELECT * from tickets WHERE email = '$ime'";
//$name = $row['name'];

//$seatnumber = $row['seatnumber'];

?>
