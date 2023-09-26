<?php
    require_once("c://wamp64/www/sistema_gym/controller/usersController.php");
    $obj = new usersController();
    $obj->guardar($_POST["nombre"]);
?>