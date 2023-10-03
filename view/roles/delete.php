<?php
    require_once("c://wamp64/www/sistema_gym/controller/rolesController.php");
    $obj = new rolesController();
    $obj->delete($_GET['id']);
?>