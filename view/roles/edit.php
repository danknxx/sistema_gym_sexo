<?php 
    require_once("c://wamp64/www/sistema_gym_github/sistema_gym/view/head/head.php");
    require_once("c://wamp64/www/sistema_gym_github/sistema_gym/controller/rolesController.php");
    $obj = new rolesController();
    $user = $obj->show($_GET['id']);
?>
    <form action="update.php" method="post" autocomplete="off" class="p-5">
        <h2>Modificando roles</h2>
        <br>
        <div class="mb-3 row">
            <label for="idroles" class="col-sm-2 col-fowm-label">Código</label>
            <div class="col-sm-10">
                <input type="text" name="idroles" readonly class="form-control-plaintext" id="idroles" value="<?= $user[0]?>">
            </div>
        </div>
                <div class="mb-3 row">
            <label for="nombre" class="col-sm-2 col-fowm-label">Nombre del rol</label>
            <div class="col-sm-10">
                <input type="text" name="nombre_rol" class="form-control" id="nombre" value="<?= $user[1]?>">
            </div>
        </div>
        
        <div>
            <input type="submit" class="btn btn-success" value="Actualizar">
            <a class="btn btn-danger" href="/sistema_gym_github/sistema_gym/view/roles">Cancelar</a>
        </div>
    </form>
<?php
    require_once("c://wamp64/www/sistema_gym_github/sistema_gym/view/head/footer.php");
?>
