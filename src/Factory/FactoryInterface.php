<?php
declare(strict_types=1);

/**
 * Factory Pattern Interface
 * @package     Ticaje_Contract
 * @author      Max Demian <ticaje@filetea.me>
 */

namespace Ticaje\Contract\Factory;

/**
 * Interface FactoryInterface
 * @package Ticaje\Contract\Factory
 */
interface FactoryInterface
{
    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data = []);

    /**
     * @param $class
     *
     * @return mixed
     */
    public function get($class);
}
