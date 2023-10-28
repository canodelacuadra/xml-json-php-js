<?php
$articulos = [
    [
        'titulo' => "Convertir array asociativo en JSON",
        'contenido' => "utilización de la función json_encode()",
        'thumbnail' => 'json.jpg',
        "publicado" => true,
        "categoria" => 'php'
    ],
    [
        'titulo' => "Crear un archivo JSON",
        'contenido' => "una vez obtenido el json lo grabamos en un fichero",
        'thumbnail' => 'fichero.jpg',
        "publicado" => true,
        "categoria" => 'php'
    ]
];
// podemos mostrarlo por pantalla
echo json_encode($articulos);
// Codificados el array en json 
$encode = json_encode($articulos);
// lo grabamos en fichero
$fichero = 'fichero-articulos.json';
$bytes = file_put_contents($fichero, $encode);
// mostramos en pantalla el resultado en bytes
echo "Se ha grabado una información de $bytes.";
