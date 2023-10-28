<?php
// el objeto xml
$myXMLData= simplexml_load_file('../mensaje.xml') or die("Error: No se puede cargar el archivo");
print_r($myXMLData);
