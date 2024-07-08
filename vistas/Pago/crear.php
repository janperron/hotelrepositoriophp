<?php
    $pagoctr = new PagoController();
    if(isset($_POST["crear"])){
        echo "Se creo el pago con exito.";

        $id= $_POST["id"];
        $reserva_id = $_POST["reserva_id"];
        $monto = $_POST["monto"];
        $fecha_pago = $_POST["fecha_pago"];


        $pagoctr->crear($id, $reserva_id, $monto, $fecha_pago,);   
    }

?>
<h3>Crear nuevo Pago</h3>
<div class="row">
    <form class="col s12" method="post">
        <div class="row">
            <div class="input-field col s6">
                <input id="id" name="id" type="text" class="validate" required>
                <label for="id">id</label>
            </div>
            <div class="input-field col s6">
                <input id="reserva_id" name="reserva_id" type="text" class="validate" required>
                <label for="reserva_id">reserva_id</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input id="monto" name="monto" type="number" class="validate" required>
                <label for="monto">monto</label>
            </div>
            <div class="input-field col s6">
                <input id="fecha_pago" name="fecha_pago" type="date" class="validate" required>
                <label for="fecha_pago">fecha_pago</label>
            </div>
            </div>
        <div class="row">
            <div class="col s6">
                <button class="btn green" type="submit" name="crear">Crear</button>
            </div>

        </div>
    </form>
</div>