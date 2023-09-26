<?php
    require_once("c://wamp64/www/sistema_gym/controller/personasController.php");
    $obj = new personasController();
    $cedula = $_POST["cedula"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $fecha = $_POST["fecha"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $obj->guardar($cedula, $nombre, $apellido, $fecha, $correo, $telefono);
?>