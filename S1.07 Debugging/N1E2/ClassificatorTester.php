<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;

require_once 'Classificator.php';

class Tester extends TestCase
{

    private $tester;

    protected function setUp(): void
    {
        $this->tester = new Classificator;
    }

    protected function tearDown(): void
    {
        $this->tester = NULL;
    }

    #[Test]
    public function testPrimerDivisio()
    {
        $this->assertEquals("Primera Divisió", $this->tester->classificar(60));
    }

    
    #[Test]
    public function testSegonaDivisio()
    {
        $this->assertEquals("Segona Divisió", $this->tester->classificar(45));
    }

    #[Test]
    public function testTerceraDivisio()
    {
        $this->assertEquals("Tercera Divisió", $this->tester->classificar(33));
    }

    #[Test]
    public function testSuspens()
    {
        $this->assertEquals("Suspès", $this->tester->classificar(32));
    }
    
}
