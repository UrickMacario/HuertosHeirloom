<?php
$post = get_post();

$pagina = \Huertos\Page::InstanceCached($post->ID);

$opcionesGenerales = \Huertos\OpcionesGenerales::InstanceCachedLast();

/*****************************************************
 * Impresion
 ****************************************************/
get_header();


/*
 * General
 */
echo \Gafa\GafaTemplate::Imprimir('page/single', [
    'page' => $pagina,
]);


get_footer();