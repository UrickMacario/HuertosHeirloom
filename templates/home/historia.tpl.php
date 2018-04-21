<?php
/**
 * Historia home
 *
 * @var \Huertos\Home $home
 */
?>
<div class="Home--Historia">
    <div class="contenedor">
        <div class="Home--Historia--left">
            <img src="<?= $home->historia_imagen ?>" alt="" class="Home--Historia--imagen">
        </div>
        <div class="Home--Historia--right">
            <div class="Home--Historia--title Huertos--title"><?= $home->historia_titulo ?></div>
            <div class="Home--Historia--texto Huertos--texto"><?= $home->historia_texto ?></div>
        </div>
    </div>
</div>