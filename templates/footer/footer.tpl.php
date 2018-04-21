<?php
/**
 * Vista del footer
 *
 * @var \Huertos\OpcionesGenerales $opcionesGenerales
 * @var WP_Post[]                  $huertos
 * @var string                     $linkBlog
 */
?>
<div class="Footer">
    <div class="Footer--texto">
        <img src="<?= $opcionesGenerales->imagenes_logo ?>" alt=""/><br>
        <?= $opcionesGenerales->informacion_texto_footer ?>
    </div>
    <div class="contenedor">
        <div class="Footer--info">
            Huertos:
            <span class="Footer--info--link">
                <?= implode(',', array_map(function ($huerto) {
                    $titulo = str_replace('Huertos', '', $huerto->post_title);
                    $link = get_permalink($huerto);

                    return "<a href='{$link}'>{$titulo}</a>";
                }, $huertos)) ?>
            </span>
        </div>
        <a href="<?= $linkBlog ?>" class="Footer--info">Diseño vegetal</a>
        <a href="<?= $opcionesGenerales->informacion_link_blog ?>" class="Footer--info">Blog</a>
        <div class="Footer--redes">
            <?php
            if (count($opcionesGenerales->redes) > 0) {
                foreach ($opcionesGenerales->redes as $red) {
                    echo \Gafa\GafaTemplate::Imprimir('red/red', [
                        'red' => $red,
                    ]);
                }
            }
            ?>
        </div>
    </div>
</div>