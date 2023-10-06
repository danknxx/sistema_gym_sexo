<?php
require_once("c://wamp64/www/sistema_gym/controller/inventarioController.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $obj = new inventarioController();

    $nombre = $_POST["nombre"];
    $estado = isset($_POST["estado"]) ? ($_POST["estado"] == 'on' ? true : false) : false;

    $obj->guardar($nombre, $estado);
}
?>
