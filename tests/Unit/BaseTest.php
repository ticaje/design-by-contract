<?php
declare(strict_types=1);

/**
 * Test Suite
 * @category    Ticaje
 * @author      Max Demian <ticaje@filetea.me>
 */

namespace Ticaje\Contract\Test\Unit;

use PHPUnit\Framework\TestCase;

/**
 * Class BaseTest
 * @package Ticaje\Contract\Test\Unit
 */
abstract class BaseTest extends TestCase
{
    public function testProofOfLife()
    {
        $this->assertTrue(true);
    }
}
