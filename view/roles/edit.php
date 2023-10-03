<?php 
    require_once("c://wamp64/www/sistema_gym/view/head/head.php");
    require_once("c://wamp64/www/sistema_gym/controller/rolesController.php");
    $obj = new rolesController();
    $user = $obj->show($_GET['id']);
?>
    <form action="update.php" method="post" autocomplete="off">
        <h2>Modificando Registro</h2>
        <div class="mb-3 row">
            <label for="idroles" class="col-sm-2 col-fowm-label">Id</label>
            <div class="mb-3 row">
            <input type="text" name="idroles" readonly class="form-control-plaintext" id="idroles" value="<?= $user[0]?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nombre_rol" class="col-sm-2 col-form-label">Editar nombre del rol</label>
            <div class="col-sm-10">
                <input type="text" name="nombre_rol" class="form-control" id="nombre_rol" value="<?= $user[1]?>">
            </div>
        </div>
        <div>
            <input type="submit" class="btn btn-success" value="Actualizar">
            <a class="btn btn-danger" href="show.php?id=<?= $user[0]?>">Cancelar</a>
        </div>
    </form>
<?php
    require_once("c://wamp64/www/sistema_gym/view/head/footer.php");
?>
