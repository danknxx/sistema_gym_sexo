<?php 

class empleadosModel {
    private $PDO;
        public function __construct()
        {
            require_once("c://wamp64/www/sistema_gym/config/dbconex.php");
            $con = new dbconex();
            $this->PDO = $con->conexion();
        }
        public function getAllEmpleados() {
            try {
                $stmt = $this->PDO->prepare("SELECT * FROM empleados");
                $stmt->execute();
                $empleados = $stmt->fetchAll(PDO::FETCH_ASSOC);       
                return $empleados;
            } catch (PDOException $e) {
                echo "Error al obtener empleados: " . $e->getMessage();
                return false;
            }
        }

        public function obtenerNombrePorID($idEmpleado) {
            $statement = $this->PDO->prepare("SELECT nombre, apellido FROM empleados WHERE idempleados = :id");
            $statement->bindParam(":id", $idEmpleado);
            
            if ($statement->execute()) {
                $result = $statement->fetch(PDO::FETCH_ASSOC);
                return ($result !== false) ? $result : false;
            } else {
                return false;
            }
        }       
        

    public function getEmpleadoById($id) {
        // Lógica para obtener un empleado por su ID
    }

    public function insertEmpleado($nombre, $apellido, $telefono, $fecha_inicio, $ci, $admin, $clave) {
        // Lógica para insertar un nuevo empleado en la base de datos
    }

    public function updateEmpleado($id, $nombre, $apellido, $telefono, $fecha_inicio, $ci, $admin, $clave) {
        // Lógica para actualizar los datos de un empleado
    }

    public function deleteEmpleado($id) {
        // Lógica para eliminar un empleado de la base de datos
    }
}

?>