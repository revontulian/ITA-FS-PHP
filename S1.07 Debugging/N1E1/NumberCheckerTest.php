<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;

class NumberCheckerTest extends TestCase
{
    private $numberChecker;

    protected function setUp(): void
    {
        $this->numberChecker = new NumberChecker(4);
    }

    protected function tearDown(): void
    {
        $this->numberChecker = NULL;
    }

    #[Test]
    public function testIsEven()
    {
        $this->assertTrue($this->numberChecker->isEven());
    }

    #[Test]
    public function testIsPositive()
    {
        $this->assertTrue($this->numberChecker->isPositive());
    }
}
