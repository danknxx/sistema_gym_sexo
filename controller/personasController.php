<?php
    class personasController{
        private $model;
        public function __construct()
        {
            require_once("c://wamp64/www/sistema_gym/model/personasmodel.php"); 
            $this->model = new personasmodel();
        }
        public function guardar($nombre, $cedula, $apellido, $fecha, $correo, $telefono){
            $id = $this->model->insertar ($nombre, $cedula, $apellido, $fecha, $correo, $telefono);
            return ($id!=false) ? header("Location:show.php?id=".$id): header("Location:create.php");
        }
        public function show($id) {
            return ($this->model->show($id) != false) ? $this->model->show($id): header("Location:index.php"); 
        }
        public function index(){
            return ($this->model->index()) ? $this->model->index(): false;
        }
        public function update($id, $nombre, $cedula, $apellido, $fecha, $correo, $telefono){
            return ($this->model->update($id, $nombre, $cedula, $apellido, $fecha, $correo, $telefono) != false) ? header("Location:show.php?id=".$id): header("Location:index.php");
        }
        public function delete($id) {
            return ($this->model->delete($id)) ? header("Location:index.php"): header("Location:show.php?id=".$id);
        }
    }
?>