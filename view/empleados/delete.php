<?php
    require_once("c://wamp64/www/sistema_gym/controller/empleadosController.php");
    $obj = new empeladosController();
    $obj->delete($_GET['id']);
?>