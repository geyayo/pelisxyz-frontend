<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/peliculas.controlador.php";

require_once "modelos/plantilla.modelo.php";
require_once "modelos/peliculas.modelo.php";
require_once "modelos/rutas.php";

$plantilla = new ControladorPlantilla();
$plantilla -> plantilla();