<?php
include "Calculator.php"; // 

use PHPUnit\Framework\TestCase; 

class CalculatorTest extends TestCase { 

    private $calculator;

    public function setUp(): void {
        $this->calculator = new Calculator(); 
    }

    public function testMultiply() { 
        $this->assertEquals(4, $this->calculator->multiply(2, 2));  
    }

    public function testAdd1() {
        $this->assertEquals(5, $this->calculator->add(4, 1)); 
    }

    public function testAdd2() {
        $this->assertEquals(3, $this->calculator->add(2, 1)); 
    }
}

