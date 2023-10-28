<?php
$string = '{
  "titulo": "Formato JSON",
  "contenido": "Las primeras pruebas con JSON",
  "visitas": 345,
  "publicado": true,
  "categoria": null
}';
var_dump($string);
$articulo = json_decode($string);
//var_dump($articulo);
echo $articulo->titulo;
