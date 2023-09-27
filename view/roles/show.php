<?php 
    require_once("c://wamp64/www/sistema_gym_github/sistema_gym/view/head/head.php");
    require_once("c://wamp64/www/sistema_gym_github/sistema_gym/controller/rolesController.php");
    $obj = new rolesController();
    $roles = $obj->show($_GET['id']);
?>
<h2 class="text-center">Detalles del roles</h2>
<div class="pb-3">
        <a href="index.php" class="btn-primary">Regresar</a>
        <a href="edit.php?id=<?= $roles[0]?>" class="btn btn-succes">Actualizar</a>

        <!-- Button trigger modal -->
        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>

        <!-- Modal-->
        <div class="modal fade" id="#exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Desea eliminar el roles?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                </div>
                <div class="modal-body">
                    una vez eliminado no se podra reuperar el roles...
                </div>
                <div class="modal-footer">
                    <botton type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
                    <a href="delete.php?id=<? $roles[0]?>" class="btn btn-danger">Eliminar</a>
                </div>
            </div>
        </div>
        </div>
</div>

<div class="card" style="width: 18rem;">
<div class="card-body">
    <h5 class="card-title">Registro</h5>
    <p class="card-text">
        <strong>CODIGO: </strong><?=$roles["idroles"]?><br>
        <strong>NOMBRE: </strong><?=$roles["nombre_rol"]?><br>


    </p>
</div>
</div>



<?php
    require_once("c://wamp64/www/sistema_gym_github/sistema_gym/view/head/footer.php");
?>
