
<?php
/* A través de esta función pasamos el título de la página, mandamos a llamar la consulta en en la base de datos

*/
class VehiculosController{
    public function index(){
        require_once "models/vehiculos.models.php";
        $vehiculos = new VehiculosModel();
        $data["titulo"] = "Vehiculos";
        $data["vehiculos"] = $vehiculos->getVehiculos();

        require_once "views/vehiculos/vehiculos.php";
    }
}
?>