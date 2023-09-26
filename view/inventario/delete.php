<?php
    require_once("c://wamp64/www/sistema_gym/controller/inventarioController.php");
    $obj = new inventarioController();
    $obj->delete($_GET['id']);
?>