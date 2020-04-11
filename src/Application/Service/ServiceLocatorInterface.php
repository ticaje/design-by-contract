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
 */
interface ServiceLocatorInterface
{
    /**
     * @param $class
     * @return mixed
     */
    public function get($class);

    /**
     * @param $class
     * @param array $arguments
     * @return mixed
     */
    public function create($class, array $arguments);
}
