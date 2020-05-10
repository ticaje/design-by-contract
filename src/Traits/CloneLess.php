<?php
declare(strict_types=1);

/**
 * Base Infra Class
 * @category    Ticaje
 * @author      Max Demian <ticaje@filetea.me>
 */

namespace Ticaje\Contract\Traits;

/**
 * Trait CloneLess
 * @package Ticaje\Contract\Traits
 */
trait CloneLess
{
    public function __clone()
    {
    }
}
