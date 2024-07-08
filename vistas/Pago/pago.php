<?php
$pagoController = new PagoController();
$listadodePagos = $pagoController->listar();

?>
<h3>Listado de Pagos</h3>
<table border="1">
    <thead>
        <tr>
            <th>id</th>
            <th>reserva_id</th>
            <th>monto</th>
            <th>fechapago</th>
            <th><a href="?vista=pago/crear" class="btn-floating green btn-small"><i
                        class="material-icons">add</i></a></th>
        </tr>
    </thead>
    <tbody>

        <?php for($i=0; $i < count($listadodePagos); $i++): ?>
        <tr>
            <?php for($j=0; $j < count($listadodePagos[$i]); $j++): ?>
            <td><?php echo $listadodePagos[$i][$j];?></td>

            <?php endfor?>
            <td><a href="" class="btn-floating blue btn-small"><i class="material-icons">visibility</i></a>
                <a href="" class="btn-floating orange btn-small"><i class="material-icons">edit</i></a>
                <a href="" class="btn-floating red btn-small"><i class="material-icons">delete</i></a>
            </td>
        </tr>
        <?php endfor?>
    </tbody>
</table>