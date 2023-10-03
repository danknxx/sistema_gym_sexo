<?php
    class rolesController{
        private $model;
        public function __construct()
        {
            require_once("c://wamp64/www/sistema_gym/model/rolesModel.php"); 
            $this->model = new rolesModel();
        }
        public function guardar ($nombre_rol){
            $idroles = $this->model->insertar ($nombre_rol);
            return ($idroles!=false) ? header("Location:show.php?idroles=".$idroles): header("Location:create.php");
        }
        public function show($idroles) {
            return ($this->model->show($idroles) != false) ? $this->model->show($idroles): header("Location:index.php"); 
        }
        public function index(){
            return ($this->model->index()) ? $this->model->index(): false;
        }
        public function update($idroles, $nombre_rol){
            return ($this->model->update($idroles, $nombre_rol) != false) ? header("Location:show.php?idroles=".$idroles): header("Location:index.php");
        }
        public function delete($idroles) {
            return ($this->model->delete($idroles)) ? header("Location:index.php"): header("Location:show.php?idroles=".$idroles);
        }
    }
?>