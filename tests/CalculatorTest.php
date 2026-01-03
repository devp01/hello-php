<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../cal.php';

class CalculatorTest extends TestCase
{
    public function testAddition()
    {
        $calc = new Calculator();
        $this->assertEquals(5, $calc->add(2, 3));
    }
}

