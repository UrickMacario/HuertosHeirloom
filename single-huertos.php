<?php
global $post;

$huerto = \Huertos\Huertos::Instance($post->ID);
$opcionesGenerales = \Huertos\OpcionesGenerales::InstanceCachedLast();

/*****************************************************
 * Impresion
 ****************************************************/
get_header();

/*
 * General
 */
echo \Gafa\GafaTemplate::Imprimir('huertos/single', [
    'huerto' => $huerto,
]);


get_footer();