<?php

session_start();
if (!isset($_SESSION['zalogowany'])) {
    header('Location: index2.php');
    exit();
}

echo "<p>Witaj" . " " . $_SESSION['user'] . '! [ <a href="logout2.php">Wyloguj się!</a>]';
echo "<p><b>Drewno</b>:" . $_SESSION['drewno'];
echo "|<b>Kamień</b>:" . $_SESSION['kamien'];
echo "|<b>Zboże</b>:" . $_SESSION['zboze'] . "</p>";




print_r($_POST);


echo "<p><b>E-mail</b>:" . $_SESSION['email'];
print_r($_SESSION);
print_r($polaczenie);
echo "<br/><b>Dni premium</b>:" . $_SESSION['dnipremium'] . "</p>";
?>

