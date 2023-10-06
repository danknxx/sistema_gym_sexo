<?php
require_once("c://wamp64/www/sistema_gym/controller/inventarioController.php");
$obj = new inventarioController();

$id = $_POST['idinventario'];
$nombre = $_POST['nombre'];
$estado = $_POST['estado'];

$obj->update($id, $nombre, $estado);
?>
