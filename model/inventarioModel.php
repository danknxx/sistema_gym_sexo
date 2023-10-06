<?php 
class inventarioModel
{
    private $PDO;

    public function __construct()
    {
        require_once("c://wamp64/www/sistema_gym/config/dbconex.php");
        $con = new dbconex();
        $this->PDO = $con->conexion();
    }

    public function insertar($nombre, $estado)
    {
        $stament = $this->PDO->prepare("INSERT INTO inventario (nombre, estado) VALUES (:nombre, :estado)");
        $stament->bindParam(":nombre", $nombre);
        $stament->bindParam(":estado", $estado);
        return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
    }

    public function show($id)
    {
        $stament = $this->PDO->prepare("SELECT * FROM inventario where idinventario = :id limit 1");
        $stament->bindParam(":id", $id);
        return ($stament->execute()) ? $stament->fetch() : false;
    }

    public function index()
    {
        $stament = $this->PDO->prepare("SELECT i.idinventario, i.nombre, i.estado FROM inventario i");
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }

    public function update($id, $nombre, $estado)
    {
        $stament = $this->PDO->prepare("UPDATE inventario SET nombre = :nombre, estado = :estado WHERE idinventario = :id");
        $stament->bindParam(":nombre", $nombre);
        $stament->bindParam(":id", $id);
        $stament->bindParam(":estado", $estado);
        return ($stament->execute()) ? $id : false;
    }

    public function delete($id)
    {
        $stament = $this->PDO->prepare("DELETE FROM inventario WHERE idinventario = :id");
        $stament->bindParam(":id", $id);
        return ($stament->execute()) ? true : false;
    }
}
?>