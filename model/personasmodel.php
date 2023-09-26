<?php
    class personasmodel{
        private $PDO;
        public function __construct()
        {
            require_once("c://wamp64/www/sistema_gym/config/dbconex.php");
            $con = new dbconex();
            $this->PDO = $con->conexion();
        }
        public function insertar ($nombre, $cedula, $apellido, $fecha, $correo, $telefono){
            $stament = $this->PDO->prepare("INSERT INTO personas 
            VALUES (0, :nombre, :cedula, :apellido, :fecha, :correo, :telefono)");
            $stament->bindParam(":nombre", $nombre);
            $stament->bindParam(":cedula", $cedula);
            $stament->bindParam(":apellido", $apellido);
            $stament->bindParam(":fecha", $fecha);
            $stament->bindParam(":correo", $correo);
            $stament->bindParam(":telefono", $telefono);
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
        }
        public function show($id) {
            $stament = $this->PDO->prepare("SELECT * FROM personas where idPersona = :id limit 1");
            $stament->bindParam(":id", $id);
            return ($stament->execute()) ? $stament->fetch(): false;
        }
        public function index(){
            $stament = $this->PDO->prepare("SELECT * FROM personas");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }
        public function update($id, $nombre, $cedula, $apellido, $fecha, $correo, $telefono){
            $stament = $this->PDO->prepare("UPDATE personas SET 
            cedula = :cedula,
            nombre = :nombre,
            apellido = :apellido,
            fechaNacimiento = :fecha,
            correoElectronico = :correo,
            telefono = :telefono
            WHERE idPersona = :id");
            $stament->bindParam(":cedula", $cedula);
            $stament->bindParam(":nombre", $nombre);
            $stament->bindParam(":apellido", $apellido);
            $stament->bindParam(":fecha", $fecha);
            $stament->bindParam(":correo", $correo);
            $stament->bindParam(":telefono", $telefono);
            $stament->bindParam(":id", $id);
            return ($stament->execute()) ? $id: false;
        }
        public function delete($id){
            $stament = $this->PDO->prepare("DELETE FROM personas WHERE idPersona = :id");
            $stament->bindParam(":id", $id);
            return ($stament->execute()) ? true : false;
        }
    }
?>