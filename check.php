<!--
<!DOCTYPE html>
<html>
<body>

<p>

<form action="login.php">
    <input type="submit" value="Login"><br><br>
</form>

</p>
</body>

</html>
-->
<?PHP


session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {

    header ("Location: login.php");
    echo('Niste prijavljeni!');
    die();

}

?>




<?php
//session_start();
//if(!isset($_SESSION['id']))
//{
//    echo('Niste prijavljeni!');
//    die();
//}
//
//else{
//
//}
//?>


