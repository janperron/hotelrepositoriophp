<?php
$servicio_reservaController = new servicio_reservaController();
$listadoservicio_reserva = $servicio_reservaController->listar();

?>
<h3>servicio_reserva</h3>
<table border="1">
    <thead>
        <tr>
            <th>reserva_id</th>
            <th>servicio_id</th>
            <th>cantidad</th>
           
            <th><a href="?vista=servicio_reserva/crear" class="btn-floating green btn-small"><i
                        class="material-icons">add</i></a></th>
        </tr>
    </thead>
    <tbody>

        <?php for($i=0; $i < count($listadoservicio_reserva); $i++): ?>
        <tr>
            <?php for($j=0; $j < count($listadoservicio_reserva[$i]); $j++): ?>
            <td><?php echo $listadoservicio_reserva[$i][$j];?></td>

            <?php endfor?>
            <td><a href="" class="btn-floating blue btn-small"><i class="material-icons">visibility</i></a>
                <a href="" class="btn-floating orange btn-small"><i class="material-icons">edit</i></a>
                <a href="" class="btn-floating red btn-small"><i class="material-icons">delete</i></a>
            </td>
        </tr>
        <?php endfor?>
    </tbody>
</table>