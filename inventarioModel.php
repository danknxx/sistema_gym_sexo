<?php
    class inventarioModel{
        private $PDO;
        public function __construct()
        {
            require_once("c://wamp64/www/sistema_gym/config/dbconex.php");
            $con = new dbconex();
            $this->PDO = $con->conexion();
        }
        public function insertar($nombre, $estado, $empleado_id) {
            $stament = $this->PDO->prepare("INSERT INTO inventario (nombre, estado, idempleados) VALUES (:nombre, :estado, :idempleados)");
            $stament->bindParam(":nombre", $nombre);
            $stament->bindParam(":estado", $estado);
            $stament->bindParam(":idempleados", $empleado_id);
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
        }
        
        

        public function show($id) {
            $stament = $this->PDO->prepare("SELECT * FROM inventario where idinventario = :id limit 1");
            $stament->bindParam(":id", $id);
            return ($stament->execute()) ? $stament->fetch(): false;
        }
        public function index(){
            $stament = $this->PDO->prepare("SELECT i.idinventario, i.nombre, CONCAT(e.nombre, ' ', e.apellido) as empleado, i.estado FROM inventario i JOIN empleados e ON i.idempleados = e.idempleados");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }
        
        
        public function obtenerEmpleadoPorID($idEmpleado) {
            $stament = $this->PDO->prepare("SELECT * FROM empleados WHERE idempleados = :id");
            $stament->bindParam(":id", $idEmpleado);
            return ($stament->execute()) ? $stament->fetch() : false;
        }
        

        
        public function update($id, $nombre, $estado){
            $stament = $this->PDO->prepare("UPDATE inventario SET nombre = :nombre, estado = :estado WHERE idinventario = :id");
            $stament->bindParam(":nombre", $nombre);
            $stament->bindParam(":id", $id);
            $stament->bindParam(":estado", $estado);
            return ($stament->execute()) ? $id: false;
        }
        public function delete($id){
            $stament = $this->PDO->prepare("DELETE FROM inventario WHERE idinventario = :id");
            $stament->bindParam(":id", $id);
            return ($stament->execute()) ? true : false;
        }
    }
?>