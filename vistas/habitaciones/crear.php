<?php
    $habitaciones = new habitacionesController();
    if(isset($_POST["crear"])){
        echo "Se creo la habitacion con exito.";

        $id= $_POST["id"];
        $tipo = $_POST["tipo"];
        $precio = $_POST["precio"];
        $estado = $_POST["estado"];
        

        $habitaciones->crear($id,$tipo,$precio,$estado,);

    }

?>
<h3>Crear nueva habitacion</h3>
<div class="row">
    <form class="col s12" method="post">
        <div class="row">
            <div class="input-field col s6">
                <input id="id" name="id" type="text" class="validate" required>
                <label for="">id</label>
            </div>
            <div class="input-field col s6">
                <input id="tipo" name="tipo" type="text" class="validate" required>
                <label for="tipo">tipo</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input id="precio" name="precio" type="text" class="validate" required>
                <label for="precio">precio</label>
            </div>
            <div class="input-field col s6">
                <input id="estado" name="estado" type="text" class="validate" required>
                <label for="estado">estado</label>
            </div>
        </div>

        </div>
        <div class="row">
            <div class="col s6">
                <button class="btn green" type="submit" name="crear">Crear</button>
            </div>

        </div>
    </form>
</div>