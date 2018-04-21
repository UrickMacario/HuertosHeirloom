<?php
/**
 * Vista banner home del blog
 *
 * @var \Huertos\OpcionesGenerales $opcionesGenerales
 * @var \Huertos\Home              $home
 */
?>
<div class="BlogBanner" style="background-image: url('<?= $home->blog_fondo ?>')">
    <a class="contenedor" href="<?= $opcionesGenerales->informacion_link_blog ?>"><?= $home->blog_texto ?></a>
</div>