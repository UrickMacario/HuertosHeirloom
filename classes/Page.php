<?php
/**
 * Created by IntelliJ IDEA.
 * User: wisquimas
 * Date: 31/01/18
 * Time: 17:58
 */

namespace Huertos;


use Wisquimas\WisquimasObject;

class Page extends WisquimasObject
{
    const PostType = 'post';

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
            array(
                'propiedad'      => 'contenido', //Propiedad interna
                'customFunction' => static::FuncionContenido(), //Funcion callback
            ),
        );
    }
}