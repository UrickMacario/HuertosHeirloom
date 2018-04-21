<?php
/**
 * Filosofia home
 *
 * @var \Huertos\Home $home
 */
?>
<div class="Home--Filosofia">
    <div class="Home--Filosofia--slider">
        <?= \Gafa\GafaTemplate::Imprimir('common/slider', [
            'slider' => $home->filosofia_slider,
        ]) ?>
    </div>
    <div class="Home--Filosofia--title--fondo">
        <div class="Home--Filosofia--title"><?= $home->filosofia_titulo ?></div>
        <div class="Home--Filosofia--texto"><?= $home->filosofia_texto ?></div>
    </div>
</div>