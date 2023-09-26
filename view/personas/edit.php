<?php 
    require_once("c://wamp64/www/sistema_gym/view/head/head.php");
    require_once("c://wamp64/www/sistema_gym/controller/personasController.php");
    $obj = new personasController();
    $user = $obj->show($_GET['id']);
?>
    <form action="update.php" method="post" autocomplete="off" class="p-5">
        <h2>Modificando Registro</h2>
        <br>
        <div class="mb-3 row">
            <label for="idpersona" class="col-sm-2 col-fowm-label">Código</label>
            <div class="col-sm-10">
                <input type="text" name="idpersona" readonly class="form-control-plaintext" id="idpersona" value="<?= $user[0]?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="cedula" class="col-sm-2 col-form-label">Nueva Cédula</label>
            <div class="col-sm-10">
                <input type="number" name="cedula" class="form-control" id="cedula" value="<?= $user[1]?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nombre" class="col-sm-2 col-form-label">Nuevo Nombre</label>
            <div class="col-sm-10">
                <input type="text" name="nombre" class="form-control" id="nombre" value="<?= $user[2]?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="apellido" class="col-sm-2 col-form-label">Nuevo Apellido</label>
            <div class="col-sm-10">
                <input type="text" name="apellido" class="form-control" id="apellido" value="<?= $user[3]?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="fecha" class="col-sm-2 col-form-label">Nueva Fecha</label>
            <div class="col-sm-10">
                <input type="date" name="fecha" class="form-control" id="fecha" value="<?= $user[4]?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="correo" class="col-sm-2 col-form-label">Nuevo correo</label>
            <div class="col-sm-10">
                <input type="email" name="correo" class="form-control" id="correo" value="<?= $user[5]?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="telefono" class="col-sm-2 col-form-label">Nuevo Teléfono</label>
            <div class="col-sm-10">
                <input type="tel" name="telefono" class="form-control" id="telefono" value="<?= $user[6]?>">
            </div>
        </div>
        <div>
            <input type="submit" class="btn btn-success" value="Actualizar">
            <a class="btn btn-danger" href="/sistema_gym/view/personas">Cancelar</a>
        </div>
    </form>
<?php
    require_once("c://wamp64/www/sistema_gym/view/head/footer.php");
?>
