<?php
declare(strict_types=1);

/**
 * Decorator Interface
 * @category    Ticaje
 * @author      Max Demian <ticaje@filetea.me>
 */

namespace Ticaje\Contract\Patterns\Interfaces\Decorator\Responder;

use Ticaje\Contract\Patterns\Interfaces\Decorator\DecoratorInterface;

/**
 * Interface ResponseInterface
 * @package Ticaje\Contract\Patterns\Interfaces\Decorator\Responder
 */
interface ResponseInterface extends DecoratorInterface
{
    /** This is the super module that governs all responses from specific Domain */
}
