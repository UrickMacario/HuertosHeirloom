<?php
/**
 * Vista de la cabecera del home
 *
 * @var \Huertos\Home $home
 */
?>
<div class="Home--Cabecera">
    <div class="contenedor" style="background-image: url('<?= $home->cabecera_fondo ?>')">
        <div class="Home--Cabecera--textoGrande"><?= $home->cabecera_texto_grande ?></div>
        <div class="Home--Cabecera--textoChico"><?= $home->cabecera_texto_chico ?></div>
        <div class="Home--Cabecera--boton boton" data-goto="#Home--QueEs"><?= $home->cabecera_texto_boton ?></div>
    </div>
</div>