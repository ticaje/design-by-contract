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
    /**
     * @param bool $success
     * @return ResponseInterface
     */
    public function setSuccess(bool $success): self;

    /**
     * @param $content
     * @return ResponseInterface
     */
    public function setContent($content): self;

    /**
     * @param string $message
     * @return ResponseInterface
     */
    public function setMessage(string $message): self;
}
