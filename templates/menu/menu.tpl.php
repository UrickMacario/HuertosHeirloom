<?php
/**
 * Vista del menu
 *
 * @var \Huertos\OpcionesGenerales $opcionesGenerales
 * @var WP_Post[]                  $huertos
 * @var string                     $linkBlog
 */
?>
<div id="Menu">
    <div class="contenedor">
        <a href="<?= get_home_url() ?>" class="Menu--logo">
            <img src="<?= $opcionesGenerales->imagenes_logo ?>" alt=""/>
        </a>
        <nav class="Menu--nav">
            <?php
            if (count($huertos) > 0) {
                foreach ($huertos as $huerto) {
                    ?>
                    <a href="<?= get_permalink($huerto) ?>" class="Menu--nav--link"><?= $huerto->post_title ?></a>
                    <?php
                }
            }
            ?>
            <a href="<?= $linkBlog ?>" class="Menu--nav--link">Diseño vegetal</a>
        </nav>
        <div class="MenuFlat--abrirMenu">
            <span class="barra_1"></span>
            <span class="barra_2"></span>
            <span class="barra_3"></span>
        </div>
        <a href="mailto:<?= $opcionesGenerales->informacion_mail ?>" class="Menu--contacto"
           style="background-image: url('<?= $opcionesGenerales->informacion_logo_contacto ?>')"></a>
    </div>
</div>
<div id="MenuFlat">
    <div class="MenuFlat--ul">
        <?php
        if (count($huertos) > 0) {
            foreach ($huertos as $huerto) {
                ?>
                <a href="<?= get_permalink($huerto) ?>" class="MenuFlat--ul--link"><?= $huerto->post_title ?></a>
                <?php
            }
        }
        ?>
        <a href="<?= $linkBlog ?>" class="MenuFlat--ul--link">Diseño vegetal</a>
        <a href="mailto:<?= $opcionesGenerales->informacion_mail ?>" class="MenuFlat--contacto"
           style="background-image: url('<?= $opcionesGenerales->informacion_logo_contacto ?>')"></a>
    </div>
</div>