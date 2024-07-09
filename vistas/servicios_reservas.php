<?php
$servicios_reserva = new servicios_reserva();
$listadoservicios_reserva = $clienteController->listar();

?>
<h3>Listado de servicios_reserva</h3>
<table border="1">
    <thead>
        <tr>
            <th>reserva_id</th>
            <th>servicio_id</th>
            <th>cantidad</th>
            <th><a href="?vista=servicios_reserva/crear" class="btn-floating green btn-small"><i
                        class="material-icons">add</i></a></th>
        </tr>
    </thead>
    <tbody>

        <?php for($i=0; $i < count($listadoservicios_reserva); $i++): ?>
        <tr>
            <?php for($j=0; $j < count($listadoservicios_reserva[$i]); $j++): ?>
            <td><?php echo $listadoservicios_reserva[$i][$j];?></td>

            <?php endfor?>
            <td><a href="" class="btn-floating blue btn-small"><i class="material-icons">visibility</i></a>
                <a href="" class="btn-floating orange btn-small"><i class="material-icons">edit</i></a>
                <a href="" class="btn-floating red btn-small"><i class="material-icons">delete</i></a>
            </td>
        </tr>
        <?php endfor?>
    </tbody>
</table>