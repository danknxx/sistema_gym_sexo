<?php 
    require_once("c://wamp64/www/sistema_gym/view/head/head.php");
    require_once("c://wamp64/www/sistema_gym/controller/rolesController.php");
    $obj=new rolesController();
    $date = $obj->show($_GET['id']);
?>
<h4 class="text-center">Detalles del registro</4>
<div class="pb-3">
        <a href="index.php" class="btn-primary">Regresar</a>
        <a href="edit.php?id=<?= $date[0]?>" class="btn btn-succes">Actualizar</a>

        <!-- Button trigger modal -->
        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>

        <!-- Modal-->
        <div class="modal fade" id="#exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Desea eliminar el registro?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                </div>
                <div class="modal-body">
                    una vez eliminado no se podra reuperar el registro
                </div>
                <div class="modal-footer">
                    <botton type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
                    <a href="delete.php?id=<? $date[0]?>" class="btn btn-danger">Eliminar</a>
                    <!-- <button type="button" >Eliminar</button> -->
                </div>
            </div>
        </div>
        </div>
</div>

    <div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-tittle">Registro</h5>
        <p class="card-text">
            <strong>CODIGO: </strong><?=$date["idroles"]?><br>
            <strong>NOMBRE DEL ROL: </strong><?=$date["nombre_rol"]?>
        </p>
    </div>
</div>

<?php
    require_once("c://wamp64/www/sistema_gym/view/head/footer.php");
?>
