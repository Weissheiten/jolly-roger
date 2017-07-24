<?php

namespace Weissheiten\JollyRoger;

use Weissheiten\JollyRoger\Interfaces;
use Weissheiten\JollyRoger\Abstracts;

class SquareFlag extends Abstracts\AbstractFlag implements Interfaces\FlagInterface {

    private $width;
    private $height;

    /*
     * Creates a new flag
     */
    public function __construct(string $name, string $color, int $width){
        $this->name = $name;
        $this->color = $color;
        $this->width = $width;
    }

    /*
     * @return int
     */
    public function getArea() : int{
        return pow($this->width,2);
    }
}