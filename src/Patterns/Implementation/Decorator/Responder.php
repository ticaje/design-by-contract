<?php
declare(strict_types=1);

/**
 * Decorator Implementation
 * @category    Ticaje
 * @author      Max Demian <ticaje@filetea.me>
 */

namespace Ticaje\Contract\Patterns\Implementation\Decorator;

use Ticaje\Contract\Patterns\Interfaces\Decorator\Responder\ResponseInterface;
use Ticaje\Contract\Patterns\Interfaces\Decorator\ResponderInterface;

/**
 * Class Responder
 * @package Ticaje\Contract\Patterns\Implementation\Decorator
 * @todo Document overview of this module
 */
class Responder implements ResponderInterface
{
    private $response;

    /**
     * Responder constructor.
     * @param ResponseInterface $response
     */
    public function __construct(
        ResponseInterface $response
    ) {
        $this->response = $response;
    }

    /**
     * @inheritDoc
     */
    public function process(array $response): ResponseInterface
    {
        $this->response
            ->setSuccess($response[self::SUCCESS_KEY])
            ->setContent(json_decode(json_encode($response[self::CONTENT_KEY])))
            ->setMessage($response[self::MESSAGE_KEY]);
        return $this->response;
    }
}
