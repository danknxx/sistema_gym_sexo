<?php
    require_once("c://wamp64/www/sistema_gym/controller/personascontroller.php");
    $obj = new personasController();
    $obj->delete($_GET['id']);
?>