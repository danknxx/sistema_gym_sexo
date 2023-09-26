<?php
    require_once("c://wamp64/www/sistema_gym/controller/personascontroller.php");
    $obj = new personascontroller();
    $id = $_POST['idpersona'];
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fecha = $_POST['fecha'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $obj->update($id, $nombre, $cedula, $apellido, $fecha, $correo, $telefono);
?>
