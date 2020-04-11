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
 * According to DI principle it complies to separate the Model Domain from the current framework.
 * We're gonna play Magento rules since this is a Gateway, so our Domain does not get touched by Magento's
 */
class ServiceLocator implements ServiceLocatorInterface
{
    protected $instances = [];

    /**
     * @param $class
     * @return mixed
     */
    public function get($class)
    {
        return $this->instances[$class];
    }

    /**
     * @param $class
     * @param array $arguments
     * @return mixed
     * Low level instantiation to keep me save from tightly coupling
     */
    public function create($class, array $arguments = [])
    {
        if (!isset($this->instances[$class])) {
            $this->instances[$class] = new $class($arguments);
        }
        return $this->instances[$class];
    }
}
