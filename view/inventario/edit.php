<?php 
require_once("c://wamp64/www/sistema_gym/view/head/head.php");
require_once("c://wamp64/www/sistema_gym/controller/inventarioController.php");
require_once("c://wamp64/www/sistema_gym/controller/empleadosController.php");

$objEmpleados = new empleadosController();
$empleados = $objEmpleados->getAllEmpleados();

$objInventario = new inventarioController();
$user = $objInventario->show($_GET['id']);
?>
<form action="update.php" method="post" autocomplete="off" class="p-5">
<h2>Modificando Registro</h2>
<br>
<div class="mb-3 row">
    <label for="idinventario" class="col-sm-2 col-form-label">Código</label>
    <div class="col-sm-10">
        <input type="text" name="idinventario" readonly class="form-control-plaintext" id="idinventario" value="<?= $user[0] ?>">
    </div>
</div>
<div class="mb-3 row">
    <label for="nombre" class="col-sm-2 col-form-label">Nuevo Nombre</label>
    <div class="col-sm-10">
        <input type="text" name="nombre" class="form-control" id="nombre" value="<?= $user[2] ?>">
    </div>
</div>
<div class="mb-3 row">
    <label for="estado" class="col-sm-2 col-form-label">Estado de Disponibilidad</label>
    <div class="col-sm-10">
        <select name="estado" class="form-select" id="estado">
            <option value="1" <?= ($user[3] == 1) ? 'selected' : '' ?>>Activo</option>
            <option value="0" <?= ($user[3] == 0) ? 'selected' : '' ?>>Inactivo</option>
        </select>
    </div>
</div>
<div class="mb-3">
    <label for="idempleado" class="form-label">Empleado Responsable:</label>
    <select name="idempleado" class="form-select" id="idempleado">
        <?php foreach ($empleados as $empleado): ?>
            <option value="<?= $empleado['idempleados'] ?>" <?= ($empleado['idempleados'] == $user['idempleados']) ? 'selected' : '' ?>>
                <?= $empleado['nombre'] ?> <?= $empleado['apellido'] ?>
            </option>
        <?php endforeach; ?>
    </select>
</div>

<div>
    <input type="submit" class="btn btn-success" value="Actualizar">
    <a class="btn btn-danger" href="/sistema_gym/view/inventario">Cancelar</a>
</div>
</form>

<?php
require_once("c://wamp64/www/sistema_gym/view/head/footer.php");
?>
