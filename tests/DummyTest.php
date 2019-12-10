<?php declare(strict_types = 1);

namespace App\Tests;

use PHPUnit\Framework\TestCase;

class DummyTest extends TestCase
{
    public function test_it_works()
    {
        $this->assertSame(true, 1 + 1 === 2);
    }
}
