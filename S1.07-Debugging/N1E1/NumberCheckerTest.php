<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
require_once 'NumberChecker.php';

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
    public function testIsNotEven()
    {
        $this->assertFalse($this->numberChecker->isEven());
    }

    #[Test]
    public function testIsPositive()
    {
        $this->assertTrue($this->numberChecker->isPositive());
    }

    #[Test]
    public function testIsNotPositive()
    {
        $this->assertFalse($this->numberChecker->isPositive());
    }
}
