<?php
/**
 * Created by IntelliJ IDEA.
 * User: wisquimas
 * Date: 29/01/18
 * Time: 11:29
 */

namespace Huertos;


use Wisquimas\WisquimasObject;

/**
 * Class OpcionesGenerales
 *
 * @property Red[]  redes
 * @property string imagenes_logo
 * @property string informacion_logo_contacto
 * @property string informacion_mail
 * @property string informacion_link_blog
 * @property string informacion_texto_footer
 *
 * @package Huertos
 */
class OpcionesGenerales extends WisquimasObject
{
    const PostType = 'opciones_generales';

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
                'propiedad'      => 'imagenes_logo', //Propiedad interna
                'meta_slug'      => 'imagenes_logo', //meta slug referencia de la db
                'customFunction' => static::FuncionImagen(), //Funcion callback
            ),
            array(
                'propiedad'      => 'informacion_logo_contacto', //Propiedad interna
                'meta_slug'      => 'informacion_logo_contacto', //meta slug referencia de la db
                'customFunction' => static::FuncionImagen(), //Funcion callback
            ),
            array(
                'propiedad' => 'informacion_mail', //Propiedad interna
                'meta_slug' => 'informacion_mail', //meta slug referencia de la db
            ),
            array(
                'propiedad' => 'informacion_link_blog', //Propiedad interna
                'meta_slug' => 'informacion_link_blog', //meta slug referencia de la db
            ),
            array(
                'propiedad'      => 'redes', //Propiedad interna
                'customFunction' => function ($clase, $propiedad) {
                    $grupo = 'redes';
                    $groupMf = get_group($grupo, $clase->ID);
                    static::LimpiarGrupo($groupMf);

                    return array_map(function ($red) {
                        $imagen = isset($red['redes_logo']) ? $red['redes_logo'] : '';
                        $link = isset($red['redes_link']) ? $red['redes_link'] : '';

                        return new Red($imagen, $link);
                    }, $groupMf);
                }, //Funcion callback
            ),
            array(
                'propiedad' => 'informacion_texto_footer', //Propiedad interna
                'meta_slug' => 'informacion_texto_footer', //meta slug referencia de la db
            ),
        );
    }
}