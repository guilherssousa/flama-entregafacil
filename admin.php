<?php
    session_start();
    if(!isset($_SESSION['usuario']) || $_SESSION['usuario']['nivel'] < 1) {
        session_destroy();
        header("Location: login.php?unauthorized=1");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EntregaFácil - Painel</title>
    </head>
    <body>
        
    </body>
</html>