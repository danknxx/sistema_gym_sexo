<?php
    class inventarioController{
        private $model;
        public function __construct()
        {
            require_once("c://wamp64/www/sistema_gym/model/inventarioModel.php"); 
            $this->model = new inventarioModel();
        }
        public function guardar($nombre, $estado, $idempleados){
            // Llamando a la función insertar con tres argumentos (nombre, estado y idEmpleado)
            $id = $this->model->insertar($nombre, $estado, $idempleados);

            return ($id != false) ? header("Location:show.php?id=".$id) : header("Location:create.php");
        }
        
        public function show($id) {
            return ($this->model->show($id) != false) ? $this->model->show($id): header("Location:index.php"); 
        }
        public function index(){
            return ($this->model->index()) ? $this->model->index(): false;
        }
        public function update($id, $nombre, $estado){
            return ($this->model->update($id, $nombre, $estado) != false) ? header("Location:show.php?id=".$id): header("Location:index.php");
        }
        public function delete($id) {
            return ($this->model->delete($id)) ? header("Location:index.php"): header("Location:show.php?id=".$id);
        }
    }
?>