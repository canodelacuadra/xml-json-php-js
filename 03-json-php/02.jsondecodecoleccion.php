<?php
$url = 'archivo-articulos.json';
$archivo = file_get_contents($url);
$articulos = json_decode($archivo);
//var_dump($articulos);
// accedemos uno a uno
echo $articulos[0]->titulo . '<br/>';
echo $articulos[1]->titulo . '<br/>';
// hacemos un bucle
foreach ($articulos as $articulo) {
    echo $articulo->titulo . '<br/>';
    echo $articulo->contenido . '<br/>';
}
