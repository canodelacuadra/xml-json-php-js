<?php
$articulo = [
    'titulo' => "Convertir array asociativo en JSON",
    'contenido' => "utilización de la función json_encode()",
    'visitas' => 145,
    "publicado" => true,
    "categoria" => 'php'
];

echo json_encode($articulo);
