<?php
declare(strict_types=1);

/**
 * Decorator Implementation
 * @category    Ticaje
 * @author      Max Demian <ticaje@filetea.me>
 */

namespace Ticaje\Contract\Patterns\Implementation\Pool;

use Countable;

use Ticaje\Contract\Patterns\Interfaces\Pool\PoolInterface;
use Ticaje\Contract\Patterns\Interfaces\Pool\WorkerInterface;
use Ticaje\Contract\Application\Service\ServiceLocator;
use Ticaje\Contract\Traits\CloneLess;

/**
 * Class Pool
 * @package Ticaje\Contract\Patterns\Implementation\Pool
 */
class Pool implements PoolInterface, Countable
{
    use CloneLess;

    private $serviceLocator;

    private $busyOnes = [];

    private $availableOnes = [];

    public function __construct()
    {
        $this->serviceLocator = new ServiceLocator();
    }

    /**
     * @inheritDoc
     */
    public function get($class): WorkerInterface
    {
        $instance = count($this->availableOnes) == 0 ? $this->serviceLocator->create($class) : array_pop($this->availableOnes);
        $this->busyOnes[spl_object_hash($instance)] = $instance;
        return $instance;
    }

    /**
     * @inheritDoc
     */
    public function free(WorkerInterface $worker)
    {
        $key = spl_object_hash($worker);

        if (isset($this->busyOnes[$key])) {
            unset($this->busyOnes[$key]);
            $this->availableOnes[$key] = $worker;
        }
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return count($this->busyOnes) + count($this->availableOnes);
    }
}
