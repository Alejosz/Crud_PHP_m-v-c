<?php
include('../controller/conexion.php');

class Carro
{
    private $id;
    private $placa;
    private $marca;
    private $color;

    public function __construct($id = null, $placa=null, $marca=null, $color=null)
    {
        $this->id = $id;
        $this->placa = $placa;
        $this->marca = $marca;
        $this->color = $color;
    }

    public function guardarCarro()
    {
        try {
            $pdo = new Conexion();
            $sql = "INSERT INTO carro (placa, marca, color) VALUES (:placa, :marca, :color)";
            $query = $pdo->prepare($sql);
            $query->bindParam(':placa', $this->placa);
            $query->bindParam(':marca', $this->marca);
            $query->bindParam(':color', $this->color);
            $query->execute();
            $lastInsertId = $pdo->lastInsertId();
            echo $lastInsertId;
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage() . "/n";
        }
    }

    public function actualizarCarro()
    {
        try {
            $pdo = new Conexion();
            $sql = "UPDATE carro SET placa=:placa, marca=:marca, color=:color WHERE id=:id";
            $query = $pdo->prepare($sql);
            $query->bindParam(':placa', $this->placa);
            $query->bindParam(':marca', $this->marca);
            $query->bindParam(':color', $this->color);
            $query->bindParam(':id', $this->id);
            $query->execute();
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage() . "/n";
        }
    }

    public function eliminarCarro()
    {
        try {
            $pdo = new Conexion();
            $sql = "DELETE FROM carro WHERE id=:id";
            $query = $pdo->prepare($sql);
            $query->bindParam(':id', $this->id);
            $query->execute();
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage() . "/n";
        }
    }

    public function traerCarro()
    {
        $pdo=new Conexion();
        try {
            $sql = "SELECT * FROM  carro";
            $query = $pdo->prepare($sql);
            $query->execute();
            $rta=$query->fetchAll();
            return $rta;
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage() . "/n";
        }
    }
}
?>
