<?php
//comprobamos que sea una petición ajax
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') 
{
 
    //llamamos a la clase paginacion
    require("productos3.php");
    //creamos una instancia
    $productos = new Productos();
    //comprobamos si han llegado las variables get para setearlas
    $offset = !isset($_GET["offset"]) || $_GET["offset"] == "undefined" ? 0 : $_GET["offset"];
    $limit = !isset($_GET["limit"]) || $_GET["limit"] == "undefined" ? 10 : $_GET["limit"];
    //obtenemos los posts
    $pag = $productos->get_products($offset,$limit);
    //obtenemos los enlaces para estos posts
    $links = $productos->crea_links();
    //los devolvemos en formato json
    echo json_encode(array("products" => $pag,"links" => $links));
 
}else{
    //si no es una petición ajax decimos que no existe :)
    echo "Esta página no existe";
 
}