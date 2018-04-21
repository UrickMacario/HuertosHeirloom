<?php
/**
 * Created by IntelliJ IDEA.
 * User: wisquimas
 * Date: 29/01/18
 * Time: 12:53
 */

namespace Huertos;


use Wisquimas\WisquimasObject;

/**
 * Class Home
 *
 * @property string cabecera_texto_grande
 * @property string cabecera_texto_chico
 * @property string cabecera_texto_boton
 * @property string cabecera_fondo
 * @property string que_es_imagen
 * @property string que_es_titulo
 * @property string que_es_texto
 * @property string filosofia_slider
 * @property string filosofia_titulo
 * @property string filosofia_texto
 * @property string historia_titulo
 * @property string historia_texto
 * @property string historia_imagen
 * @property string blog_texto
 * @property string blog_fondo
 * @property string newsletter_formulario
 *
 * @package Huertos
 */
class Home extends WisquimasObject
{
    const PostType = 'home';

    /**
     * Seteamos las opciones
     *
     * array(
     * 'propiedad'      => 'settings_logo', //Propiedad interna
     * 'meta_slug'      => 'settings_logo', //meta slug referencia de la db
     * 'customFunction' => static::FuncionImagen(), //Funcion callback
     * ),
     *
     * @return array
     */
    static public
    function GetOptions()
    {
        return array(
            /*
             * Cabecera
             */
            array(
                'propiedad'      => 'cabecera_texto_grande', //Propiedad interna
                'meta_slug'      => 'cabecera_texto_grande', //meta slug referencia de la db
                'customFunction' => static::FuncionHtml(), //Funcion callback
            ),
            array(
                'propiedad'      => 'cabecera_texto_chico', //Propiedad interna
                'meta_slug'      => 'cabecera_texto_chico', //meta slug referencia de la db
                'customFunction' => static::FuncionHtml(), //Funcion callback
            ),
            array(
                'propiedad' => 'cabecera_texto_boton', //Propiedad interna
                'meta_slug' => 'cabecera_texto_boton', //meta slug referencia de la db
            ),
            array(
                'propiedad'      => 'cabecera_fondo', //Propiedad interna
                'meta_slug'      => 'cabecera_fondo', //meta slug referencia de la db
                'customFunction' => static::FuncionImagen(), //Funcion callback
            ),
            /*
             * Que es
             */
            array(
                'propiedad'      => 'que_es_imagen', //Propiedad interna
                'meta_slug'      => 'que_es_imagen', //meta slug referencia de la db
                'customFunction' => static::FuncionImagen(), //Funcion callback
            ),
            array(
                'propiedad' => 'que_es_titulo', //Propiedad interna
                'meta_slug' => 'que_es_titulo', //meta slug referencia de la db
            ),
            array(
                'propiedad' => 'que_es_texto', //Propiedad interna
                'meta_slug' => 'que_es_texto', //meta slug referencia de la db
            ),
            /*
             * Filosofia
             */
            array(
                'propiedad' => 'filosofia_slider', //Propiedad interna
                'meta_slug' => 'filosofia_slider', //meta slug referencia de la db
            ),
            array(
                'propiedad' => 'filosofia_titulo', //Propiedad interna
                'meta_slug' => 'filosofia_titulo', //meta slug referencia de la db
            ),
            array(
                'propiedad' => 'filosofia_texto', //Propiedad interna
                'meta_slug' => 'filosofia_texto', //meta slug referencia de la db
            ),
            /*
             * Historia
             */
            array(
                'propiedad' => 'historia_titulo', //Propiedad interna
                'meta_slug' => 'historia_titulo', //meta slug referencia de la db
            ),
            array(
                'propiedad' => 'historia_texto', //Propiedad interna
                'meta_slug' => 'historia_texto', //meta slug referencia de la db
            ),
            array(
                'propiedad'      => 'historia_imagen', //Propiedad interna
                'meta_slug'      => 'historia_imagen', //meta slug referencia de la db
                'customFunction' => static::FuncionImagen(), //Funcion callback
            ),
            /*
             * Blog
             */
            array(
                'propiedad' => 'blog_texto', //Propiedad interna
                'meta_slug' => 'blog_texto', //meta slug referencia de la db
            ),
            array(
                'propiedad'      => 'blog_fondo', //Propiedad interna
                'meta_slug'      => 'blog_fondo', //meta slug referencia de la db
                'customFunction' => static::FuncionImagen(), //Funcion callback
            ),
            /*
             * Newsletter
             */
            array(
                'propiedad'      => 'newsletter_formulario', //Propiedad interna
                'meta_slug'      => 'newsletter_formulario', //meta slug referencia de la db
                'customFunction' => static::FuncionHtml(), //Funcion callback
            ),
        );
    }
}