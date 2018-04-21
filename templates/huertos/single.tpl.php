<?php
/**
 * Vista de informacion general del Huerto
 *
 * @var \Huertos\Huertos $huerto
 */
?>
<div class="Huerto">
    <div class="contenedor">
        <div class="Huerto--titular"><?= $huerto->informacion_titular ?></div>
        <div class="Huerto--contenido"><?= $huerto->contenido ?></div>
        <?php
        if (count($huerto->links) > 0) {
            /*
             * Links inferiores
             */
            ?>
            <div class="Huerto--Links">
                <div class="Huerto--Links--title"><?= $huerto->informacion_introduccion_links ?></div>
                <div class="Huerto--Links--contenedor">
                    <?php
                    foreach ($huerto->links as $link) {
                        ?>
                        <div class="Huerto--Links--loop" style="background-image: url('<?= $link->getImagen() ?>')"
                             data-href="<?= $link->getLink() ?>">
                            <div class="Huerto--Links--fondo"></div>
                            <div class="Huerto--Links--loop--texto"><?= $link->getTexto() ?></div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>