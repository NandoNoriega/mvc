<?php 
function cargarControlador($controlador){
    $nombreControlador = ucwords($controlador)."Controller";
    $archivoControlador = 'controllers/'.$controlador.'.controller.php';

    if(!is_file($archivoControlador)){
        $archivoControlador = 'controllers/'.CONTROLADOR_PRINCIPAL.'.php';
    }

    //echo $archivoControlador;
    require_once $archivoControlador;
    $control = new $nombreControlador();
    return $control;
}

function cargarAccion($controller, $accion){
    if(isset($accion) && method_exists($controller, $accion)){
        $controller->$accion();
    }else{
        $controller->ACCION_PRINCIPAL();
    }
}
?>