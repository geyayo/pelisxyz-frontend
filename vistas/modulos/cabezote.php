<div class="container-fluid barraSuperior" id="top">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-8 social">
                <ul>
                    <?php
                        $social = ControladorPlantilla::ctrEstiloPlantilla();
                        $jsonRedesSociales = json_decode($social["redesSociales"],true);
                        
                        foreach ($jsonRedesSociales as $key => $value) {
                            echo '<a href="'.$value["url"].'" target="_blank">
                                    <i class="'.$value["red"].' redSocial '.$value["estilo"].'"></i>
                                </a>';
                        }
                    ?>
                </ul>
            </div>
            <div class="col-12 col-sm-6 col-md-4 registro">
                <ul>
                    <li><a href="#modalIngreso" data-toggle="modal"><i class="fas fa-user"></i> Ingresar</a></li>
                    <li>|</li>
                    <li><a href="#modalRgistro" data-toggle="modal"><i class="fas fa-user-plus"></i> Crear una cuenta</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid backColor" id="menu">
    <nav class="container navbar navbar-expand-lg backColor">
        <img src="http://localhost/pelisxyz/backend/<?php echo $social["logo"]?>" class="img-fluid" alt="Logo Pelis XYZ">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="fas fa-bars" style="color:#fff; font-size:28px;"></i></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <?php

                $item = null;
                $valor = null;

                $categorias = ControladorPeliculas::ctrMostrarCategorias($item, $valor);
                
                foreach ($categorias as $key => $value) {
                    echo'
                        <li class="nav-item active">
                            <a class="nav-link" href="'.$value["ruta"].'">'.$value["categoria"].'</a>
                        </li>
                        
                    ';
                }
            ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categorias
                        </a>
                        <div class="dropdown-menu backColor" aria-labelledby="navbarDropdown">
                            <?php
                            
                                $item = null;
                                $valor = null;

                                $subcategorias = ControladorPeliculas::ctrMostrarSubCategorias($item, $valor);
                                
                                foreach ($subcategorias as $key => $value) {
                                    echo'
                                        <a class="dropdown-item" href="'.$value["ruta"].'">'.$value["subcategoria"].'</a>
                                    ';
                                }
                                
                            ?> 
                        </div>
                    </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-dark my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    </nav>
</div>

