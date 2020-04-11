<?php
declare(strict_types=1);

/**
 * Decorator Interface
 * @category    Ticaje
 * @author      Max Demian <ticaje@filetea.me>
 */

namespace Ticaje\Contract\Patterns\Interfaces\Decorator;

use Ticaje\Contract\Patterns\Interfaces\Decorator\Responder\ResponseInterface;

/**
 * Interface ResponderInterface
 * @package Ticaje\Contract\Patterns\Interfaces\Decorator
 */
interface ResponderInterface extends DecoratorInterface
{
    const SUCCESS_KEY = 'success';

    const CONTENT_KEY = 'content';

    const MESSAGE_KEY = 'message';

    /**
     * @param array $response
     * @return mixed
     */
    public function process(array $response): ResponseInterface;
}
