<?php
    require_once("c://wamp64/www/sistema_gym/controller/inventarioController.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $obj = new inventarioController();

        $nombre = $_POST["nombre"];
        $estado = isset($_POST["estado"]) ? ($_POST["estado"] == 'on' ? true : false) : false;

        // Obtener el ID del empleado seleccionado desde el formulario
        $idempleados = $_POST["idempleados"]; // Asegúrate de que este sea el nombre correcto del campo en tu formulario

        $obj->guardar($nombre, $estado, $idempleados);
}

?>
