<?php
require_once("./config/Enrutador.php");
require_once("./controllers/clientectr.php");
require_once("./controllers/pagoctr.php");
require_once("./controllers/habitaciones.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>

<body>
    <main class="container">
        <?php
        $enrutador = new Enrutador();
        if(isset($_GET["vista"])){
            $enrutador->CargarVista($_GET["vista"]);
        }else{
            echo "Me carga el index principal<br>";
    ?>
        <a href="index.php?vista=cliente/inicio">Lista de Clientes</a>
        <br>
        <a href="index.php?vista=pago/inicio">Lista de Pago</a>
        <br>
        <a href="index.php?vista=habitaciones/inicio">Lista de habitaciones</a>
        <?php
        }
   ?>
    </main>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>

</html>