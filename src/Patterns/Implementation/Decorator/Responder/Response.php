<?php
declare(strict_types=1);

/**
 * Decorator Implementation
 * @category    Ticaje
 * @author      Max Demian <ticaje@filetea.me>
 */

namespace Ticaje\Contract\Patterns\Implementation\Decorator\Responder;

use Ticaje\Contract\Traits\BaseDto;
use Ticaje\Contract\Patterns\Interfaces\Decorator\Responder\ResponseInterface;

/**
 * Class Response
 * @package Ticaje\Contract\Patterns\Implementation\Decorator\Responder
 */
class Response implements ResponseInterface
{
    use BaseDto;

    protected $success;

    protected $content;

    protected $message;
}
