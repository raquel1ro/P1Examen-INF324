<?php 
session_start();
if (!isset($_SESSION["usuario"])) {
  header("Location: /p5/login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="estilo/header.css">
    <link rel="stylesheet" href="estilo/index.css">
    <link rel="stylesheet" href="estilo/carreras.css">
    <link rel="stylesheet" href="estilo/notas.css">

    <title>Facultad</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li style="float: left;"><a href="index.php">
                    <img src="img/facultad.jpg" height="30px" alt="">
                    INICIO
                </a></li>
                <li><a href="biologia.php">BIOLOGÍA</a></li>
                <li><a href="fisica.php">FÍSICA</a></li>
                <li><a href="matematica.php">MATEMÁTICA</a></li>
                <li class="salir"><a href="log_out.php">Cerrar sesion</a></li>
            </ul>
        </nav>
    </header>