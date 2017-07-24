<?php

namespace Weissheiten\JollyRoger;

use Weissheiten\JollyRoger\Interfaces;
use Weissheiten\JollyRoger\Abstracts;

class RectangularFlag extends Abstracts\AbstractFlag implements Interfaces\FlagInterface {

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
     * @return int
     */
    public function getArea() : int{
        return $this->width*$this->height;
    }
}