<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pelis XYZ</title>
    <?php
        $icono = ControladorPlantilla::ctrEstiloPlantilla();
        
        echo '<link rel="shortcut icon" href="http://localhost/pelisxyz/backend/'.$icono["icono"].'" type="image/x-icon">';
    
        $url = Ruta::ctrRuta();
    ?>
    <meta name="description" content="Una descripción del sitio">
    <meta name="keyword" content="palabras, claves, del, sitio">
    <link rel="stylesheet" href="vistas/css/plugins/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo $url;?>vistas/css/plantilla.css">
    <link rel="stylesheet" href="<?php echo $url;?>vistas/css/cabezote.css">

</head>
<body>
    
    <?php
        include "modulos/cabezote.php";

        /* =========== CONTENIDO DINAMICO ========== */

        $rutas = array();
        $ruta = null;

        if(isset($_GET["ruta"])){
            
            $rutas = explode("/", $_GET["ruta"]);

            $item = "ruta";
            $valor = $rutas[0];

            /* =========== URL´s AMIGABLE CATEGORIAS ========== */

            $rutaCategorias = ControladorPeliculas::ctrMostrarCategorias($item, $valor);
            
            if(is_array($rutaCategorias)){
                if($valor == $rutaCategorias["ruta"]){
                    $ruta = $valor;
                }
            }

            /* =========== URL´s AMIGABLE SUB-CATEGORIAS ========== */

            $rutaSubCategorias = ControladorPeliculas::ctrMostrarSubCategorias($item, $valor);
            
            if(is_array($rutaSubCategorias)){
                if($valor == $rutaSubCategorias["ruta"]){
                    $ruta = $valor;
                }
            }

            /*========== LISTA BLANCA DE URL's AMIGABLES ==========*/

            if($ruta != null){
                include "modulos/peliculas.php";
            } else {
                include "modulos/error404.php";
            }
        }
    ?>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="vistas/js/plugins/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="<?php echo $url;?>vistas/js/plugins/fontawesome.min.js"></script>
    <script src="<?php echo $url;?>vistas/js/plantilla.js"></script>
</body>
</html>