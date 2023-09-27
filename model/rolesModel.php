<?php
    class rolesModel{
        private $PDO;
        public function __construct()
        {
            require_once("c://wamp64/www/sistema_gym_github/sistema_gym/config/dbconex.php");
            $con = new dbconex();
            $this->PDO = $con->conexion();
        }
        public function insertar ($nombre_rol){
            $stament = $this->PDO->prepare("INSERT INTO roles VALUES (0, :nombre_rol)");
            $stament->bindParam(":nombre_rol", $nombre_rol);
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
        }
        public function show($id) {
            $stament = $this->PDO->prepare("SELECT * FROM roles where idroles = :id limit 1");
            $stament->bindParam(":id", $id);
            return ($stament->execute()) ? $stament->fetch(): false;
        }
        public function index(){
            $stament = $this->PDO->prepare("SELECT * FROM roles");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }
        public function update($id, $nombre_rol){
            $stament = $this->PDO->prepare("UPDATE roles SET nombre_rol = :nombre_rol WHERE idroles = :id");
            $stament->bindParam(":nombre_rol", $nombre_rol);
            $stament->bindParam(":id", $id);
            return ($stament->execute()) ? $id: false;
        }
        public function delete($id){
            $stament = $this->PDO->prepare("DELETE FROM roles WHERE idroles = :id");
            $stament->bindParam(":id", $id);
            return ($stament->execute()) ? true : false;
        }
    }
?>