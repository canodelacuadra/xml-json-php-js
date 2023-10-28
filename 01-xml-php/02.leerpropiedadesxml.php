<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> Obtener xml</h1>
    <?php
    $myXMLData = file_get_contents('archivo.xml');
    // obtenemos el archivo xml como un string
    $xml = simplexml_load_string($myXMLData) or die("Error: No se puede leer el objeto");

    ?>
    <p><?php echo $xml->to ?></p>
    <p><?php echo $xml->from ?></p>
    <p><?php echo $xml->heading ?></p>
    <p><?php echo $xml->body ?></p>

</body>

</html>