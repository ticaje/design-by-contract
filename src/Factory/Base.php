<?php
declare(strict_types=1);

/**
 * Factory Pattern Base Class
 * @package     Ticaje_Contract
 * @author      Max Demian <ticaje@filetea.me>
 */

namespace Ticaje\Contract\Factory;

use Ticaje\Contract\Application\Service\ServiceLocatorInterface;

/**
 * Class Base
 * @package Ticaje\Contract\Factory
 */
abstract class Base implements FactoryInterface
{
    protected $serviceLocator;

    protected $instanceName;

    /**
     * Base constructor.
     * @param ServiceLocatorInterface $serviceLocator
     * @param string $instanceName
     */
    public function __construct(
        ServiceLocatorInterface $serviceLocator,
        string $instanceName
    ) {
        $this->serviceLocator = $serviceLocator;
        $this->instanceName = $instanceName;
    }

    /**
     * @inheritDoc
     */
    public function create(array $data = [])
    {
        return $this->serviceLocator->create($this->instanceName, $data);
    }
}
