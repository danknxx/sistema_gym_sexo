<?php
require_once("c://wamp64/www/sistema_gym/view/head/head.php");
require_once("c://wamp64/www/sistema_gym/controller/inventarioController.php");
require_once("c://wamp64/www/sistema_gym/controller/empleadosController.php");

$objEmpleados = new empleadosController();
$obj = new inventarioController();
$registro = $obj->show($_GET['id']);
?>

<h2 class="text-center">Detalles del registro</h2>
<div class="pb-3">
    <a href="index.php" class="btn-primary">Regresar</a>
    <a href="edit.php?id=<?= $registro[0] ?>" class="btn btn-success">Actualizar</a>

    <!-- Button trigger modal -->
    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>

    <!-- Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar el registro?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                </div>
                <div class="modal-body">
                    Una vez eliminado no se podrá recuperar el registro...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sucess" data-bs-dismiss="modal">Cerrar</button>
                    <a href="delete.php?id=<?= $registro[0] ?>" class="btn btn-danger">Eliminar</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">Registro</h5>
        <p class="card-text">
            <strong>CODIGO: </strong><?= $registro['idinventario'] ?><br>
            <strong>NOMBRE DEL OBJETO/MAQUINA: </strong><?= $registro['nombre'] ?><br>
            <strong>ESTADO: </strong><?= ($registro['estado'] == 1) ? 'Activo' : 'Inactivo' ?><br>
            <strong>EMPLEADO RESPONSABLE: </strong><?= $objEmpleados->obtenerNombreEmpleado($registro['idempleados']) ?><br>
        </p>
    </div>
</div>

<?php
require_once("c://wamp64/www/sistema_gym/view/head/footer.php");
?>
