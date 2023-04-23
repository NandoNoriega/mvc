<?php

require_once "config/database.php";
require_once "controllers/vehiculos.controller.php";

$control = new VehiculosController();
$control->index();




?>