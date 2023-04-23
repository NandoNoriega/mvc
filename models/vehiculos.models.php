<?php 

class VehiculosModel{
    private $db;
    private $vehiculos;

    public function __construct()
    {
        $this->db = Conectar::conexion();
        $this->vehiculos = array();
    }

    public function getVehiculos()
    {
        $sql = "SELECT * FROM vehiculos";
        $resultado = $this->db->query($sql);
        while ($row = $resultado->fetch_assoc()) {
            # code...
            $this->vehiculos[] = $row; //llenamos el array con cada fila que traemos de la base de datos
        }
        return $this->vehiculos;
    }
}
?>