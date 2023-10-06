<?php 
    require_once("c://wamp64/www/sistema_gym/view/head/head.php");
    require_once("c://wamp64/www/sistema_gym/controller/empleadosController.php");
    $obj = new empleadosController();
    $user = $obj->show($_GET['id']);
?>
    <form action="update.php" method="post" autocomplete="off">
        <h2>Modificando Registro</h2>
        <div class="mb-3 row">
            <label for="idempleados" class="col-sm-2 col-fowm-label">Id</label>
            <div class="mb-3 row">
            <input type="text" name="idempleados" readonly class="form-control-plaintext" id="idempleados" value="<?= $user[0]?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nombre" class="col-sm-2 col-form-label">Editar nombre del empleado</label>
            <div class="col-sm-10">
                <input type="text" name="nombre" class="form-control" id="nombre" value="<?= $user[3]?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="apellido" class="col-sm-2 col-form-label">Editar apellido del empleado</label>
            <div class="col-sm-10">
                <input type="text" name="apellido" class="form-control" id="apellido" value="<?= $user[4]?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="ci" class="col-sm-2 col-fowm-label">Editar CI</label>
            <div class="mb-3 row">
            <input type="text" name="ci" readonly class="form-control-plaintext" id="ci" value="<?= $user[2]?>">
            </div>
        </div>
        

        <div class="mb-3 row">
            <label for="nombre" class="col-sm-2 col-form-label">Editar nombre del empleado</label>
            <div class="col-sm-10">
                <input type="text" name="nombre" class="form-control" id="nombre" value="<?= $user[1]?>">
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
