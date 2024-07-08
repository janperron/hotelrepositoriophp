<?php
    $clientectr = new ClienteController();
    if(isset($_POST["crear"])){
        echo "Se creo el cliente con exito.";

        $nombre= $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $correo = $_POST["correo"];
        $telefono = $_POST["telefono"];
        $fechallegada = $_POST["fechallegada"];
        $fechasalida = $_POST["fechasalida"];
        

        $clientectr->crear($nombre, $apellido,$correo,$telefono,$fechallegada, $fechasalida,);      

    }

?>
<h3>Crear nuevo Cliente</h3>
<div class="row">
    <form class="col s12" method="post">
        <div class="row">
            <div class="input-field col s6">
                <input id="nombre" name="nombre" type="text" class="validate" required>
                <label for="nombre">nombre</label>
            </div>
            <div class="input-field col s6">
                <input id="apellido" name="apellido" type="text" class="validate" required>
                <label for="apellido">apellido</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input id="correo" name="correo" type="text" class="validate" required>
                <label for="correo">correo</label>
            </div>
            <div class="input-field col s6">
                <input id="telefono" name="telefono" type="text" class="validate" required>
                <label for="telefono">telefono</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input id="fechallegada" name="fechallegada" type="date" class="validate" required>
                <label for="fechallegada ">fecha de llegada</label>
            </div>
            <div class="input-field col s6">
                <input id="fechasalida" name="fechasalida" type="date" class="validate" required>
                <label for="fechasalida ">fecha de salida</label>
            </div>

        </div>
        <div class="row">
            <div class="col s6">
                <button class="btn green" type="submit" name="crear">Crear</button>
            </div>

        </div>
    </form>
</div>