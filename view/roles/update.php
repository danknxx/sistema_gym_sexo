<?php
    require_once("c://wamp64/www/sistema_gym_github/sistema_gym/controller/rolesController.php");
    $obj = new rolesController();
    $obj->guardar($_POST['idroles'], $_POST['nombre_rol']);
?>
