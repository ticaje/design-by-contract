<?php
declare(strict_types=1);

/**
 * Base Infra Class
 * @category    Ticaje
 * @author      Max Demian <ticaje@filetea.me>
 */

namespace Ticaje\Contract\Traits;

/**
 * Trait UnderScoredDto
 * @package Ticaje\Contract\Traits
 */
trait UnderScoredDto
{
    use BaseDto;

    /**
     * @param array $data
     * Not intrusive mode, override parent
     */
    public function setData(array $data)
    {
        if (is_array($data)) {
            foreach ($data as $property => $value) {
                $this->set($property, $value);
            }
        }
    }

    /**
     * @param $name
     * @return bool|string
     * Override parent
     */
    private function checkPropertyExistence($name)
    {
        $property = substr($name, 3, strlen($name));
        $property = $this->unCamelize($property);
        return property_exists($this, $property) ? $property : null;
    }
}
