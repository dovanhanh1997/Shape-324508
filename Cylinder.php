<?php

class Cylinder extends Circle
{
    private $height;

    public function __construct($name, $radius, $height)
    {
        parent::__construct($name, $radius);
        $this->height = $height;
    }

    public function calculateVolume()
    {
        return round(parent::calculateArea() * $this->height, 2, PHP_ROUND_HALF_DOWN);
    }

    public function calculateArea()
    {
        return round(parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height,2,PHP_ROUND_HALF_DOWN);
    }

    /**
     * @return mixed
     */
    public
    function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public
    function setHeight($height)
    {
        $this->height = $height;
    }
}

