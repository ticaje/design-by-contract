<?php
declare(strict_types=1);

/**
 * Provider Interface
 * @category    Ticaje
 * @author      Max Demian <ticaje@filetea.me>
 */

namespace Ticaje\Contract\Patterns\Interfaces\Pool;

/**
 * Interface PoolInterface
 * @package Ticaje\Contract\Patterns\Interfaces\Pool
 */
interface PoolInterface
{
    /**
     * @param $class
     * @return WorkerInterface
     */
    public function get($class): WorkerInterface;

    /**
     * @param WorkerInterface $worker
     * @return mixed
     */
    public function free(WorkerInterface $worker);
}
