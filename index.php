<?php

$home = \Huertos\Home::InstanceCachedLast();
$equipo = \Huertos\Equipo::Get(null, true);
$clientes = \Huertos\Cliente::Get(null, true);
$opcionesGenerales = \Huertos\OpcionesGenerales::InstanceCachedLast();

/*****************************************************
 * Impresion
 ****************************************************/
get_header();

/*
 * Cabecera
 */
echo \Gafa\GafaTemplate::Imprimir('home/cabecera', [
    'home' => $home,
]);
/*
 * QueEs
 */
echo \Gafa\GafaTemplate::Imprimir('home/que-es', [
    'home' => $home,
]);
/*
 * Filosofia
 */
echo \Gafa\GafaTemplate::Imprimir('home/filosofia', [
    'home' => $home,
]);
/*
 * Historia
 */
echo \Gafa\GafaTemplate::Imprimir('home/historia', [
    'home' => $home,
]);
/*
 * Equipo
 */
echo \Gafa\GafaTemplate::Imprimir('equipo/equipo', [
    'equipo' => $equipo,
]);
/*
 * Clientes
 */
echo \Gafa\GafaTemplate::Imprimir('clientes/clientes', [
    'clientes' => $clientes,
]);
/*
 * Blog
 */
echo \Gafa\GafaTemplate::Imprimir('blog/banner-home', [
    'home'              => $home,
    'opcionesGenerales' => $opcionesGenerales,
]);
/*
 * Newsletter
 */
echo \Gafa\GafaTemplate::Imprimir('home/newsletter', [
    'home' => $home,
]);

get_footer();