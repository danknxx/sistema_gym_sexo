<?php 
require_once("c://wamp64/www/sistema_gym/model/empleadosModel.php");

class empleadosController {
    private $model;

    public function __construct() {
        require_once("c://wamp64/www/sistema_gym/model/empleadosModel.php"); 
        $this->model = new empleadosModel();
    }

    public function getAllEmpleados() {
        $empleados = $this->model->getAllEmpleados(); 
        return $empleados; 
        
    }
    
    public function obtenerNombreEmpleado($idEmpleado) {
        $nombreApellido = $this->model->obtenerNombrePorID($idEmpleado); // Asumiendo que tengas una función así en tu modelo.
        return $nombreApellido['nombre'] . ' ' . $nombreApellido['apellido'];
    }
    
    

    public function index() {
        return $this->model->getAllEmpleados();
    }

    public function show($id) {
        return $this->model->getEmpleadoById($id);
    }

    public function create() {
        $empleados = $this->getAllEmpleados();  // Lógica para mostrar el formulario de creación de empleados
    }

    public function store($nombre, $apellido, $telefono, $fecha_inicio, $ci, $admin, $clave) {
        // Lógica para guardar un nuevo empleado en la base de datos
    }

    public function edit($id) {
        $empleados = $this->getAllEmpleados();  // Lógica para mostrar el formulario de edición de empleados
    }

    public function update($id, $nombre, $apellido, $telefono, $fecha_inicio, $ci, $admin, $clave) {
        // Lógica para actualizar un empleado en la base de datos
    }

    public function delete($id) {
        // Lógica para eliminar un empleado de la base de datos
    }
}
?>