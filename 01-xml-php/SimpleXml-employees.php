<?php

$xml = simplexml_load_file('../employees.xml') or die("Error: No se puede cargar el archivo");

echo '<h2>Lista de empleados</h2>';

$list = $xml->record;

for ($i = 0; $i < count($list); $i++) {

    echo '<strong>Empleado Nº:</strong> ' . $list[$i]->attributes()->man_no . '<br>';

    echo 'Nombre: ' . $list[$i]->name . '<br>';

    echo 'Cargo: ' . $list[$i]->position . '<br><br>';

}
