<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_REQUEST['usuario'])) {
        setcookie("user", $_REQUEST['usuario'], time() + 3600);
        setcookie("passw", $_REQUEST['pass'], time() + 3600);
        setcookie("idiomaUsuario", $_REQUEST['idioma'], time() + 3600);
    }
    if (!isset($_COOKIE["user"])) {
    ?>
        <form action="#" method="post">
            <span>Idioma:</span>
            <select class="idioma" name="idioma">
                <option value="en">English</option>
                <option value="es">Español</option>
            </select>
            <span>Login:</span>
            <input type="text" name="usuario">
            <span>Password:</span>
            <input type="text" name="pass">
            <input type="submit" name="Enviar">
            <input type="botton">
        </form>
    <?php
    } else {
        if ($_COOKIE['idiomaUsuario'] == "en")
            header('Location: http://localhost/idiomasCookie/english.php');
        if ($_COOKIE["idiomaUsuario"] == "es") {
            header('Location: http://localhost/idiomasCookie/spanish.php');
        }
    }
    ?>
</body>

</html>