<?php
$pagoController = new PagoController();
$listadodepagos = $pagoController->listar();

?>
<h3>Listado de pagos</h3>
<table border="1">
    <thead>
        <tr>
            <th>id</th>
            <th>reserva_id</th>
            <th>monto</th>
            <th>fecha_reserva</th>
            <th><a href="?vista=pago/crear" class="btn-floating green btn-small"><i
                        class="material-icons">add</i></a></th>
        </tr>
    </thead>
    <tbody>

        <?php for($i=0; $i < count($listadodepagos); $i++): ?>
        <tr>
            <?php for($j=0; $j < count($listadodepagos[$i]); $j++): ?>
            <td><?php echo $listadodepagos[$i][$j];?></td>

            <?php endfor?>
            <td><a href="" class="btn-floating blue btn-small"><i class="material-icons">visibility</i></a>
                <a href="" class="btn-floating orange btn-small"><i class="material-icons">edit</i></a>
                <a href="" class="btn-floating red btn-small"><i class="material-icons">delete</i></a>
            </td>
        </tr>
        <?php endfor?>
    </tbody>
</table>