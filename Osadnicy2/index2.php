<?php
session_start();

if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany'] == true)) {
header('Location: gra2.php');
exit();
}
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Osadnicy - gra przeglądarkowa</title>
    </head>
    <body>
        Tylko martwi ujrzeli koniec wojny - Platon<br><br>   
        
        <a href="rejestracja2.php">Rejestracja - załóż darmowe konto! </a><br><br>

        <form action="zaloguj2.php" method="post">
            Login: <br> <input type="text" name="login"><br><br>
            Hasło: <br> <input type="password" name="haslo"><br><br>
            <input type="submit" value="Zaloguj się">
        </form>

        <?php
        if (isset($_SESSION['blad']))
            echo $_SESSION['blad'];
        ?>

    </body>
</html>