<?php

class ControladorPeliculas{
    static public function ctrMostrarCategorias($item, $valor){
        $tabla = "categorias";
        $respuesta = ModeloPeliculas::mdlMostrarCategorias($tabla, $item, $valor);
        return $respuesta;
    }
    static public function ctrMostrarSubCategorias($item, $valor){
        $tabla = "subcategorias";
        $respuesta = ModeloPeliculas::mdlMostrarSubCategorias($tabla, $item, $valor);
        return $respuesta;
    }
}