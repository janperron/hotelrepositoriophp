<?php
    $clientectr = new servicios_reservasController();
    if(isset($_POST["crear"])){
        echo "Se creo el cliente con exito.";

        $reserva_id= $_POST["reserva_id"];
        $servicio_id = $_POST["servicio_id"];
        $cantidad = $_POST["cantidad"];
        
        

        $servicios_reservas->crear($reserva_id, $servicio_id,$cantidad,);      

    }

?>
<h3>Crear nuevo servicios_reservas</h3>
<div class="row">
    <form class="col s12" method="post">
        <div class="row">
            <div class="input-field col s6">
                <input id="reserva_id" name="reserva_id" type="text" class="validate" required>
                <label for="reserva_id">reserva_id</label>
            </div>
            <div class="input-field col s6">
                <input id="servicio_id" name="servicio_id" type="text" class="validate" required>
                <label for="servicio_id">servicio_id</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input id="cantidad" name="cantidad" type="text" class="validate" required>
                <label for="cantidad">cantidad</label>
            </div>
        </div>
    </form>
</div>