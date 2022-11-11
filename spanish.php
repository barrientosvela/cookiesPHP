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
    
    if (!isset($_COOKIE['user'])){
        print("<h1>Hola anonimo</h1>");
    }else{
        $nombre = $_COOKIE['user'];
        print("<h1>Hola $nombre</h1>");
    }
    ?>
    
</body>
</html>