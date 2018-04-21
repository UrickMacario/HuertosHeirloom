<?php
/**
 * Que es home
 *
 * @var \Huertos\Home $home
 */
?>
<div id="Home--QueEs"  class="Home--QueEs">
    <div class="contenedor">
        <div class="Home--QueEs--left">
            <img src="<?= $home->que_es_imagen ?>" alt="" class="Home--QueEs--imagen">
        </div>
        <div class="Home--QueEs--right">
            <div class="Home--QueEs--title Huertos--title"><?= $home->que_es_titulo ?></div>
            <div class="Home--QueEs--texto Huertos--texto"><?= $home->que_es_texto ?></div>
        </div>
    </div>
</div>