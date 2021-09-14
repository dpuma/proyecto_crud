<?php

class ControladorEmpleados{

    public function inicio(){
        include_once("vistas/empleados/inicio.php");
    }
    public function crear(){
        include_once("vistas/empleados/crear.php");
    }
    public function editar(){
        include_once("vistas/empleados/editar.php");
    }
} 

?>