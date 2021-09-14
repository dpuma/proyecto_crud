<?php

if(isset($_GET['controlador']) && isset($_GET['accion'])) {
    $controlador = $_GET['controlador'];
    $accion = $_GET['accion'];
    #print_r($_GET); get es array
    #GET prueba: http://localhost/crud/?controlador=pagina&accion=inicio
    #print_r($controlador);
    #print_r($accion);
}


require_once("vistas/template.php")

?>