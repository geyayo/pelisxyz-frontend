<?php

class ControladorProductos{
    public function ctrMostrarCategorias(){
        $tabla = "categorias";
        $respuesta = ModeloProductos::mdlMostrarCategorias($tabla);
        return $respuesta;
    }
    public function ctrMostrarSubCategorias(){
        $tabla = "subcategorias";
        $respuesta = ModeloProductos::mdlMostrarSubCategorias($tabla);
        return $respuesta;
    }
}