<?php
/**
 * Created by IntelliJ IDEA.
 * User: wisquimas
 * Date: 30/01/18
 * Time: 15:28
 */

namespace Huertos;


use Wisquimas\WisquimasObject;

/**
 * Class Cliente
 *
 * @property string informacion_logo
 *
 * @package Huertos
 */
class Cliente extends WisquimasObject
{
    const PostType = 'clientes';

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
                'propiedad'      => 'informacion_logo', //Propiedad interna
                'meta_slug'      => 'informacion_logo', //meta slug referencia de la db
                'customFunction' => static::FuncionImagen(), //Funcion callback
            ),

        );
    }
}