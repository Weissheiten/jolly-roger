<?php
namespace Weissheiten\JollyRoger\Abstracts;
/**
 * Class AbstractFlag
 * @package Abscracts Provices the base for any Flag
 */
abstract class AbstractFlag
{
    /* @var string $name */
    protected $name;

    /* @var string $color */
    protected $color;

    /**
     * Gets the name of the flag
     *
     * @return string
     */
    public function getColor() : string
    {
        return $this->color;
    }

    /**
     * Gets the color of the flag
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
}