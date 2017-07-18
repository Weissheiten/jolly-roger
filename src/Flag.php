<?php

namespace Weissheiten\JollyRoger;

class Flag{

    private $name;
    private $color;
    private $width;
    private $height;

    /*
     * Creates a new flag
     */
    public function __construct(string $name, string $color, int $height, int $width){
        $this->name = $name;
        $this->color = $color;
        $this->width = $width;
        $this->height = $height;
    }

    /*
     * @return string
     */
    public function getName() : string{
        return $this->name;
    }

    /*
     * @return string
     */
    public function getColor() : string{
        return $this->color;
    }

    /*
     * @return int
     */
    public function getArea() : int{
        return $this->width*$this->height;
    }
}