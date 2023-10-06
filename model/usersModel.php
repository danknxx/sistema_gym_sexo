<?php
    class usersModel{
        private $PDO;
        public function __construct()
        {
            require_once("c://wamp64/www/sistema_gym/config/dbconex.php");
            $con = new dbconex();
            $this->PDO = $con->conexion();
        }
        public function insertar ($nombre){
            $stament = $this->PDO->prepare("INSERT INTO users VALUES (0, :nombre)");
            $stament->bindParam(":nombre", $nombre);
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
        }
        public function show($id) {
            $stament = $this->PDO->prepare("SELECT * FROM users where idUser = :id limit 1");
            $stament->bindParam(":id", $id);
            return ($stament->execute()) ? $stament->fetch(): false;
        }
        public function index(){
            $stament = $this->PDO->prepare("SELECT * FROM users");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }
        public function update($id, $nombre){
            $stament = $this->PDO->prepare("UPDATE users SET username = :nombre WHERE idUser = :id");
            $stament->bindParam(":nombre", $nombre);
            $stament->bindParam(":id", $id);
            return ($stament->execute()) ? $id: false;
        }
        public function delete($id){
            $stament = $this->PDO->prepare("DELETE FROM users WHERE idUser = :id");
            $stament->bindParam(":id", $id);
            return ($stament->execute()) ? true : false;
        }
    }
?>