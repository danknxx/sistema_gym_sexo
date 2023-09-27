<?php
    class rolesController{
        private $model;
        public function __construct()
        {
            require_once("c://wamp64/www/sistema_gym_github/sistema_gym/model/rolesModel.php"); 
            $this->model = new rolesModel();
        }
        public function guardar ($nombre_rol){
            $id = $this->model->insertar ($nombre_rol);
            return ($id!=false) ? header("Location:show.php?id=".$id): header("Location:create.php");
        }
        public function show($id) {
            return ($this->model->show($id) != false) ? $this->model->show($id): header("Location:index.php"); 
        }
        public function index(){
            return ($this->model->index()) ? $this->model->index(): false;
        }
        public function update($id, $nombre_rol){
            return ($this->model->update($id, $nombre_rol) != false) ? header("Location:show.php?id=".$id): header("Location:index.php");
        }
        public function delete($id) {
            return ($this->model->delete($id)) ? header("Location:index.php"): header("Location:show.php?id=".$id);
        }
    }
?>