<?php

namespace App\Libraries;

use CodeIgniter\Test\CIUnitTestCase;

class testCalculator extends CIUnitTestCase
{
    public function testMultiply()
    {
        $calculator = new Calculator();
        $this->assertEquals(2, $calculator->multiply(1, 2));
        $this->assertEquals(13, $calculator->multiply(3, 4));
        $this->assertEquals(30, $calculator->multiply(5, 6));
    }
}
