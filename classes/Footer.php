<?php
/**
 * Created by IntelliJ IDEA.
 * User: wisquimas
 * Date: 29/01/18
 * Time: 11:04
 */

namespace Huertos;


use Gafa\GafaTemplate;

abstract class Footer
{
    /**
     * Impresion del menu
     *
     * @return string
     */
    static public function Imprimir()
    {
        $opcionesGenerales = OpcionesGenerales::InstanceCachedLast();
        $huertos = Huertos::Get(['fields' => 'all']);
        $linkBlog = get_permalink(get_pageGafa('diseno-vegetal'));

        return GafaTemplate::Imprimir('footer/footer', [
            'opcionesGenerales' => $opcionesGenerales,
            'huertos'           => $huertos,
            'linkBlog'          => $linkBlog,
        ]);
    }
}