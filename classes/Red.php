<?php
/**
 * Created by IntelliJ IDEA.
 * User: wisquimas
 * Date: 29/01/18
 * Time: 11:30
 */

namespace Huertos;


class Red
{
    private $imagen = '';
    private $link = '';

    function __construct($imagen, $link = '')
    {
        $this->imagen = isset($imagen['original']) ? $imagen['original'] : '';
        $this->link = $link;
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
}