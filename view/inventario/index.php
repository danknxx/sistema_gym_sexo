<?php
    require_once("c://wamp64/www/sistema_gym/view/head/head.php");
    require_once("c://wamp64/www/sistema_gym/controller/inventarioController.php");
    $obj = new personasController();
    $rows = $obj->index();
?>
<div clasas="mb-3">
    <a href="/sistema_gym/view/inventario/create.php" class="btn btn-primary">Agregar</a>
    <a href="javascript:imprimeDiv('tabla')" class="btn btn-warning" >Imprimir</a>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>

        </tr>
    </thead>
    <tbody>
        <?php if($rows): ?>
            <?php foreach($rows as $row): ?>
                <tr>
                    <th><?= $row[0] ?></th>
                    <th><?= $row[1] ?></th>
                    <th>
                        <a href="show.php?id=<?= $row[0]?>" class="btn btn-primary">Ver</a>
                        <a href="edit.php?id=<?= $row[0]?>" class="btn btn-success">Modificar</a>
                        <!-- Button trigger modal -->
                        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#id<?=$row[0]?>">Eliminar</a>

                        <!-- Modal -->
                        <div class="modal fade" id="id<?=$row[0]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar el registro?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Una vez eliminado no se podra recuperar el registro...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-sucess" data-bs-dismiss="modal">Cerrar</button>
                                    <a href="delete.php?id=<?= $row[0]?>" class="btn btn-danger">Eliminar</a>
                                    <!-- <button type="button" >Eliminar</button> -->
                                </div>
                                </div>
                            </div>
                        </div>
                    </th>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="3" class="text-center">No hay registros actualmente</td>
            </tr>
    <?php endif; ?>
    </tbody>
</table>

<!-- zona imprimible -->
<div id="tabla" style="display: none">
            <h3>LISTADO DE INVENTARIO</h3>
            <h4>Fecha: <?=date("d-m-Y");?></h4>
            <h4>Hora: <?=date("h:i:s");?></h4>
            <hr>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Nombre</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($rows): ?>
                        <?php foreach($rows as $rows): ?>
                            <tr>
                                <th><?= $rows[0] ?></th>
                                <th><?= $rows[1] ?></th>
                            </tr>
                        <?php endforeach;
                            endif; ?>
                </tbody>
            </table>
        </div>
        <!-- fin imprimible -->
<?php
    require_once("c://wamp64/www/sistema_gym/view/head/footer.php");
?>



<?php
    require_once("c://wamp64/www/sistema_gym/view/head/footer.php");
?>