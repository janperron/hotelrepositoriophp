<?php
$clientectr = new clienteController();
$listadoClientes = $clienteController->listar();

?>
<h3>Listado de clientes</h3>
<table border="1">
    <thead>
        <tr>
            <th>id</th>
            <th>nombre</th>
            <th>apellido</th>
            <th>correo</th>
            <th>telefono</th>
            <th>fecha llegada</th>
            <th>fecha salida</th>
            <th><a href="?vista=cliente/crear" class="btn-floating green btn-small"><i
                        class="material-icons">add</i></a></th>
        </tr>
    </thead>
    <tbody>

        <?php for($i=0; $i < count($listadoClientes); $i++): ?>
        <tr>
            <?php for($j=0; $j < count($listadoClientes[$i]); $j++): ?>
            <td><?php echo $listadoClientes[$i][$j];?></td>

            <?php endfor?>
            <td><a href="" class="btn-floating blue btn-small"><i class="material-icons">visibility</i></a>
                <a href="" class="btn-floating orange btn-small"><i class="material-icons">edit</i></a>
                <a href="" class="btn-floating red btn-small"><i class="material-icons">delete</i></a>
            </td>
        </tr>
        <?php endfor?>
    </tbody>
</table>