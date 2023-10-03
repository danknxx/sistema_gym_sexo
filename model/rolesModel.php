<?php
    class rolesModel{
        private $PDO;
        public function __construct()
        {
            require_once("c://wamp64/www/sistema_gym/config/dbconex.php");
            $con = new dbconex();
            $this->PDO = $con->conexion();
        }
        public function insertar ($nombre_rol){
            $stament = $this->PDO->prepare("INSERT INTO roles VALUES (0, :nombre_rol)");
            $stament->bindParam(":nombre_rol", $nombre_rol);
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
        }
        public function show($idroles) {
            $stament = $this->PDO->prepare("SELECT * FROM roles where idroles = :idroles limit 1");
            $stament->bindParam(":idroles", $idroles);
            return ($stament->execute()) ? $stament->fetch(): false;
        }
        public function index(){
            $stament = $this->PDO->prepare("SELECT * FROM roles");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }
        public function update($idroles, $nombre_rol){
            $stament = $this->PDO->prepare("UPDATE roles SET nombre_rol = :nombre_rol WHERE idroles = :idroles");
            $stament->bindParam(":nombre_rol", $nombre_rol);
            $stament->bindParam(":idroles", $idroles);
            return ($stament->execute()) ? $idroles: false;
        }
        public function delete($idroles){
            $stament = $this->PDO->prepare("DELETE FROM roles WHERE idroles = :id");
            $stament->bindParam(":idroles", $idroles);
            return ($stament->execute()) ? true : false;
        }
    }
?>