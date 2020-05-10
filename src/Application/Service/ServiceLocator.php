<?php
declare(strict_types=1);

/**
 * Service Locator Class
 * @category    Ticaje
 * @author      Max Demian <ticaje@filetea.me>
 */

namespace Ticaje\Contract\Application\Service;

/**
 * Class ServiceLocator
 * @package Ticaje\Base\Application\Service
 * This class kind of performs gateway pattern design in order to provide consistency to our Model Domain
 * According to DI principle it complies to separate the Model Domain from any framework or higher level platform.
 */
class ServiceLocator implements ServiceLocatorInterface
{
    protected $instances = [];

    /**
     * @param $class
     * @param array $arguments
     * @return mixed
     * Low level instantiation to keep me save from tightly coupling
     */
    public function create($class, array $arguments = [])
    {
        $classHash = hash('md5', $class . implode("", array_values($arguments)));
        if (!isset($this->instances[$classHash])) {
            $this->instances[$classHash] = new $class($arguments);
        }
        return $this->instances[$classHash];
    }
}
