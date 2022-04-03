<?php

declare(strict_types=1);

namespace Kata\Tests;

use Kata\Solution;
use PHPUnit\Framework\TestCase;

class Tests extends TestCase
{
    /**
     * @test
     * @covers
    */
    public function assertTrues()
    {
        $solution = new Solution();
        $this->assertTrue($solution->example(), 'Solution example is not returning true');
    }
}
