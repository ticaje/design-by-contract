<?php
declare(strict_types=1);

/**
 * Decorator Implementation
 * @category    Ticaje
 * @author      Max Demian <ticaje@filetea.me>
 */

namespace Ticaje\Contract\Traits;

/**
 * Trait Singleton
 * @package Ticaje\Contract\Traits
 * This trait accomplishes singleton pattern to those classes that require to momentarily cache a result based on current execution thread.
 */
trait Singleton
{
    /**
     * @param $binder // The binder is a class property, preferably a protected/private one
     * @param callable $logic
     * @return mixed
     */
    protected function singleton($binder, callable $logic)
    {
        if (!$this->{$binder}) {
            $this->{$binder} = $logic();
        }
        return $this->{$binder};
    }

    /**
     * @param $binder
     * @param callable $logic
     * @param int $index
     * @return mixed
     */
    protected function singletonKeyed($binder, callable $logic, $index = 0)
    {
        if (!$this->{$binder}[$index]) {
            $this->{$binder}[$index] = $logic();
        }
        return $this->{$binder}[$index];
    }
}
