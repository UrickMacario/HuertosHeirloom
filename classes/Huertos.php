<?php
/**
 * Created by IntelliJ IDEA.
 * User: wisquimas
 * Date: 29/01/18
 * Time: 11:58
 */

namespace Huertos;


use Wisquimas\WisquimasObject;

/**
 * Class Huertos
 *
 * @property string         contenido
 * @property string         informacion_titular
 * @property string         informacion_introduccion_links
 * @property HuertosLinks[] links
 *
 * @package Huertos
 */
class Huertos extends WisquimasObject
{
    const PostType = 'huertos';

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
                'meta_slug'      => 'contenido', //meta slug referencia de la db
                'customFunction' => static::FuncionContenido(), //Funcion callback
            ),
            array(
                'propiedad' => 'informacion_titular', //Propiedad interna
                'meta_slug' => 'informacion_titular', //meta slug referencia de la db
            ),
            array(
                'propiedad' => 'informacion_introduccion_links', //Propiedad interna
                'meta_slug' => 'informacion_introduccion_links', //meta slug referencia de la db
            ),
            array(
                'propiedad'      => 'links', //Propiedad interna
                'customFunction' => function ($clase, $propiedad) {
                    $grupo = 'links';
                    $groupMf = get_group($grupo, $clase->ID);
                    static::LimpiarGrupo($groupMf);

                    return array_map(function ($red) {
                        $imagen = isset($red['links_imagen']) ? $red['links_imagen'] : '';
                        $texto = isset($red['links_texto']) ? $red['links_texto'] : '';
                        $link = isset($red['links_link']) ? $red['links_link'] : '';

                        return new HuertosLinks($imagen, $texto, $link);
                    }, $groupMf);
                }, //Funcion callback
            ),

        );
    }
}