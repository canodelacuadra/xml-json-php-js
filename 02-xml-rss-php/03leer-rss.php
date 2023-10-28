<?php
$feedrss = 'https://www.patrimonionacional.es/rss.xml';
$articulos= simplexml_load_file($feedrss) or die("Error: No se puede cargar el archivo");
$num_noticia = 1;
$max_noticias = 10;
// mostramos el canal
echo "<h2>{$articulos->channel->title}</h2>";
foreach ($articulos->channel->item as $noticia) {
    $fecha = date("d/m/Y - H:i", strtotime($noticia->pubDate)); ?>
    <article>
        <h5><a href="<?php echo $noticia->link; ?>"><?php echo $noticia->title; ?></a></h5>
        <?php echo $fecha; ?>
        <?php echo $noticia->description; ?>
    </article>
<?php $num_noticia++;
    if ($num_noticia > $max_noticias) {
        break;
    }
} ?>