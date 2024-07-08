<?php
$hanitaciones = new habitaciones();
$listadohabitaciones = $habitacionesController->listar();

?>
<h3>Listado de habitaciones</h3>
<table border="1">
    <thead>
        <tr>
            <th>id</th>
            <th>tipo</th>
            <th>precio</th>
            <th>estado</th>
            <th><a href="?vista=habitaciones/crear" class="btn-floating green btn-small"><i
                        class="material-icons">add</i></a></th>
        </tr>
    </thead>
    <tbody>

        <?php for($i=0; $i < count($listadohabitaciones); $i++): ?>
        <tr>
            <?php for($j=0; $j < count($listadohabitaciones[$i]); $j++): ?>
            <td><?php echo $listadohabitaciones[$i][$j];?></td>

            <?php endfor?>
            <td><a href="" class="btn-floating blue btn-small"><i class="material-icons">visibility</i></a>
                <a href="" class="btn-floating orange btn-small"><i class="material-icons">edit</i></a>
                <a href="" class="btn-floating red btn-small"><i class="material-icons">delete</i></a>
            </td>
        </tr>
        <?php endfor?>
    </tbody>
</table>