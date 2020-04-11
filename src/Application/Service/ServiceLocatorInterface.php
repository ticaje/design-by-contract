<?php
declare(strict_types=1);

/**
 * Service Locator Interface
 * @category    Ticaje
 * @author      Max Demian <ticaje@filetea.me>
 */

namespace Ticaje\Contract\Application\Service;

/**
 * Interface ServiceLocatorInterface
 * @package Ticaje\Base\Application\Service
 * I'm gonna assume not a singleton pattern, if you wanna implement a singleton pattern then use a third library, framework
 * or implement it by your self.
 */
interface ServiceLocatorInterface
{
    /**
     * @param $class
     * @param array $arguments
     * @return mixed
     */
    public function create($class, array $arguments);
}
