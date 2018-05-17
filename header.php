<!doctype html>
<html lang="es">
<!--
 Desarrollado por: Macario || Casa Creativa urick@casamacario.mx
-->
<head>
    <meta charset="utf-8"/>
    <title><?php wp_title(); ?></title>
    <link rel="icon" href=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,500" rel="stylesheet">
    <!-- Meta SEO -->
    <!-- Meta Facebook -->
    <!--suppress HtmlUnknownTarget -->
    <link type="text/css" rel="stylesheet" href="<?php plantilla(); ?>/style.css"/>
    <!--suppress HtmlUnknownTarget -->
    <link type="text/css" rel="stylesheet" href="<?php assets(); ?>/css/dev.css"/>
    <!--suppress HtmlUnknownTarget -->
    <link type="text/css" rel="stylesheet" href="<?php assets(); ?>/css/template.css"/>
    <!--suppress HtmlUnknownTarget -->
    <link type="text/css" rel="stylesheet" href="<?php assets(); ?>/css/templateResponsive.css"/>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <?php require_once("assets/js/gafaCore.php"); ?>
    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="<?php assets(); ?>/vendor/slick/slick.css"/>
    <script type="text/javascript" src="<?php assets(); ?>/vendor/slick/slick.min.js"></script>

    <!--suppress HtmlUnknownTarget -->
    <link rel="stylesheet" href="<?php assets(); ?>/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css"
          media="screen"/>
    <!--suppress HtmlUnknownTarget -->
    <script type="text/javascript" src="<?php assets(); ?>/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

    <!-- Comienza WP Head -->
    <?php wp_head(); ?>
    <!-- Google Analytics -->
</head>
<body <?php body_class("normal"); ?>>
<?= \Huertos\Menu::Imprimir() ?>
