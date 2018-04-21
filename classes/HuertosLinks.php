<?php
/**
 * Created by IntelliJ IDEA.
 * User: wisquimas
 * Date: 29/01/18
 * Time: 11:30
 */

namespace Huertos;


class HuertosLinks
{
    private $imagen = '';
    private $link = '';
    /**
     * @var string
     */
    private $texto;

    function __construct($imagen, $texto = '', $link = '')
    {
        $this->imagen = isset($imagen['original']) ? $imagen['original'] : '';
        $this->link = $link;
        $this->texto = $texto;
    }

    /**
     * @return mixed|string
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @return string
     */
    public function getTexto()
    {
        return $this->texto;
    }
}