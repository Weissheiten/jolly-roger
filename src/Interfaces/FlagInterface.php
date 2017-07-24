<?php
namespace Weissheiten\JollyRoger\Interfaces;
/**
 * Interface FlagInterface
 * @package JollyRoger
 *
 * Ensures, that getting of the name and calculating the area are possible
 */
interface FlagInterface
{
    /**
     * @return string name
     */
    public function getName() : string;

    /**
     * @return string color as hex
     */
    public function getColor() : string;
    /**
     * @return int area
     */
    public function getArea() : int;
}