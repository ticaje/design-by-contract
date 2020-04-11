<?php
declare(strict_types=1);

/**
 * Base Trait
 * @category    Ticaje
 * @author      Max Demian <ticaje@filetea.me>
 */

namespace Ticaje\Contract\Traits;

/**
 * Trait Getter
 * @package Ticaje\Contract\Traits
 */
trait Getter
{
    /**
     * @param $name
     * @return null
     * Redefine magic set method so object using an instance of this one can access properties very simple
     */
    public function __get($name)
    {
        if (method_exists($this, $name)) {
            return $this->$name();
        } elseif (property_exists($this, $name)) {
            return $this->$name;
        }
        return null;
    }
}
