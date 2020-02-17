<?php
session_start();

if (!isset($_SESSION['udanarejestracja'])) {
header('Location: index2.php');
exit();
} else {
   unset($_SESSION['udanarejestracja']);
}
?>


	

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Osadnicy - gra przeglądarkowa</title>
    </head>
    <body>
        Dziękujemy za rejestracje w serwisie. Możesz zalogować się na swoje konto.<br><br> 

        <br><br>


      

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