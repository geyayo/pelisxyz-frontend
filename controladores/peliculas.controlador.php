<?php

class ControladorPeliculas{
    static public function ctrMostrarCategorias($item, $valor){
        $tabla = "categorias";
        $respuesta = ModeloPeliculas::mdlMostrarCategorias($tabla, $item, $valor);
        return $respuesta;
    }
    public function ctrMostrarSubCategorias(){
        $tabla = "subcategorias";
        $respuesta = ModeloPeliculas::mdlMostrarSubCategorias($tabla);
        return $respuesta;
    }
}