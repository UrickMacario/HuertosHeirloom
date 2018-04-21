<?php
/**
 * Created by IntelliJ IDEA.
 * User: wisquimas
 * Date: 30/01/18
 * Time: 11:49
 */

namespace Huertos;


use Wisquimas\WisquimasObject;

/**
 * Class Equipo
 *
 * @property string informacion_puesto
 * @property string informacion_bio
 * @property string informacion_foto
 *
 * @package Huertos
 */
class Equipo extends WisquimasObject
{
    const PostType = 'equipo';

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
                'propiedad' => 'informacion_puesto', //Propiedad interna
                'meta_slug' => 'informacion_puesto', //meta slug referencia de la db
            ),
            array(
                'propiedad' => 'informacion_bio', //Propiedad interna
                'meta_slug' => 'informacion_bio', //meta slug referencia de la db
            ),
            array(
                'propiedad'      => 'informacion_foto', //Propiedad interna
                'meta_slug'      => 'informacion_foto', //meta slug referencia de la db
                'customFunction' => static::FuncionImagen(), //Funcion callback
            ),
        );
    }
}