
<?php
/* A través de esta función pasamos el título de la página, mandamos a llamar la consulta en en la base de datos

*/
class VehiculosController{

    public function __construct()
    { 
        require_once "models/vehiculos.models.php";
    }

    public function index(){
       
        $vehiculos = new VehiculosModel();
        $data["titulo"] = "Vehiculos";
        $data["vehiculos"] = $vehiculos->getVehiculos();

        require_once "views/vehiculos/vehiculos.php";
    }

    public function nuevo(){
        $data["titulo"] = "Vehiculos";
        require_once "views/vehiculos/vehiculosNuevo.php";
        
    }
    public function guarda(){

        $placa = $_POST['placa'];
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $anio = $_POST['anio'];
        $color = $_POST['color'];

        $vehiculos =  new VehiculosModel();
        $vehiculos -> insertar($placa, $marca, $modelo, $anio, $color);
        $data["titulo"] = "Vehiculos";
        $this->index();
       
    }

    public function modificar($id){
        $vehiculos = new VehiculosModel();
        $data["id"] = $id;
        $data["vehiculos"] = $vehiculos->getVehiculo($id);
        $data["titulo"] = "Vehiculos";
        require_once "views/vehiculos/vehiculosModifica.php";
        
    }

    public function actualizar(){

        $id = $_POST['id'];
        $placa = $_POST['placa'];
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $anio = $_POST['anio'];
        $color = $_POST['color'];

        $vehiculos =  new VehiculosModel();
        $vehiculos -> modificar($id, $placa, $marca, $modelo, $anio, $color);
        $data["titulo"] = "Vehiculos";
        $this->index();
    }

    public function eliminar($id){
        $vehiculos =  new VehiculosModel();
        $vehiculos -> eliminar($id);
        $data["titulo"] = "Vehiculos";
        $this->index();
    }
}
?>
