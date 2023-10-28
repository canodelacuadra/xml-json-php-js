<?php
$archivo = file_get_contents('sumario-boe-ejemplo.xml');
$xml = simplexml_load_string($archivo) or die('Error:no encuentramos el feed');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $xml->diario->sumario_nbo['id'] ?></h1>
    <ul>
    <?php foreach ($xml->diario->seccion as $seccion) : ?>
        <li><?php echo $seccion['nombre'] ?></li>
        <ul>
        <?php foreach ($xml->diario->seccion->departamento as $departamento) : ?>
            <li><?php echo $departamento['nombre'] ?></li>
            <ul>
                <?php foreach ($xml->diario->seccion->departamento->epigrafe->item->titulo as $titulo) : ?>
                <li><?php echo $titulo ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endforeach; ?>
        </ul>
    <?php endforeach; ?>
    </ul>
</body>
</html>