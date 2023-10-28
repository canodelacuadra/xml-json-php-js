<?php
$url = 'archivo-articulos-anidados.json';
$archivo = file_get_contents($url);
$articulos = json_decode($archivo);
//var_dump($articulos);

// hacemos un bucle
foreach ($articulos as $articulo) {
    echo $articulo->titulo . '<br/>';
    echo $articulo->contenido . '<br/>';
    foreach ($articulo->comentarios as $comentario) {
        //var_dump($comentario);
        echo $comentario->autor . $comentario->mensaje . '<br/>';
    }
}
