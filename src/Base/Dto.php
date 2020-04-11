<?php
declare(strict_types=1);

/**
 * Base Dto Class
 * @category    Ticaje
 * @author      Max Demian <ticaje@filetea.me>
 */

namespace Ticaje\Contract\Base;

use Ticaje\Contract\Traits\BaseDto;
use Ticaje\Contract\Patterns\Interfaces\Dto\DtoInterface;

/**
 * Class Dto
 * @package Ticaje\AeSdk\Base
 */
class Dto implements DtoInterface
{
    use BaseDto;
}
