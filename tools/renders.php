<?php
function render( $paginaNom ) {
    $plantilla = searchInViews( $paginaNom );
    recogerActividad();
    require $plantilla;
}

function searchInViews($Sitio){
    $raiz = dirname(__DIR__);
    $ruta = $raiz. "/views/". $Sitio . ".php";
    if(file_exists($ruta) && is_file($ruta)){
        return $ruta;
    }
    return null;
}