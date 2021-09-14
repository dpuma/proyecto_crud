<?php

#datos recibidos por el get en la url 
echo $controlador;
echo $accion; 

# crea ruta dinamica 
include_once("controladores/controlador_".$controlador.".php");
$objControlador="Controlador".ucfirst($controlador);

#$controlador = new ControladorPaginas();
#$controlador->inicio();
$controlador = new $objControlador();
$controlador->$accion();

?>