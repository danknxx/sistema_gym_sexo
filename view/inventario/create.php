<?php 
require_once("c://wamp64/www/sistema_gym/view/head/head.php");
require_once("c://wamp64/www/sistema_gym/controller/inventarioController.php");
require_once("c://wamp64/www/sistema_gym/controller/empleadosController.php");

// Crear una instancia del controlador de empleados
$objEmpleados = new empleadosController();
$empleados = $objEmpleados->getAllEmpleados();

// Comprobar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $estado = $_POST["estado"];
    $idempleado = $_POST["idempleado"];
}
?>

<form action="store.php" method="post" autocomplete="off" class="p-5">
<h2>Agregando Nuevo Objeto de Inventario</h2>
<br>
<div class="mb-3 row">
    <label for="nombre" class="col-sm-2 col-form-label">Nombre del Objeto</label>
    <div class="col-sm-10">
        <input type="text" name="nombre" class="form-control" id="nombre" required>
    </div>
</div>
<div class="mb-3 row">
    <label for="estado" class="col-sm-2 col-form-label">Estado de Disponibilidad</label>
    <div class="col-sm-10">
        <select name="estado" class="form-select" id="estado" required>
            <option value="1">Activo</option>
            <option value="0">Inactivo</option>
        </select>
    </div>
</div>
<div class="mb-3">
    <label for="idempleados">Selecciona un empleado:</label>
    <select name="idempleados" id="idempleados">
        <?php foreach ($empleados as $empleado): ?>
            <option value="<?= $empleado['idempleados'] ?>"><?= $empleado['idempleados'] ?> - <?= $empleado['nombre'] ?> <?= $empleado['apellido'] ?></option>
        <?php endforeach; ?>
    </select>
</div>



<div>
    <input type="submit" class="btn btn-success" value="Guardar">
    <a class="btn btn-danger" href="/sistema_gym/view/inventario">Cancelar</a>
</div>
</form>

<?php
require_once("c://wamp64/www/sistema_gym/view/head/footer.php");
?>
