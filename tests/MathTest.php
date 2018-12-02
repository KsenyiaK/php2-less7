<?php
/**
 * Created by PhpStorm.
 * User: ksenia
 * Date: 02.12.2018
 * Time: 20:59
 */

require_once "classes/Math.php";

class MathTest extends \PHPUnit\Framework\TestCase
{

    protected $fixtures;

    protected function setUp()
    {
        $this->fixtures = new Math();
    }

    /** @dataProvider providerFactorial */

    public function testFactorial($a,$b) {


        $this->assertEquals($a,$this->fixtures->factorial($b));

    }

    public function providerFactorial() {
        return [
            [1,0],
            [6,3],
            [120,5],
            [1,0],
            [6,3],
            [120,5],
            [1,0],
            [6,3],
            [120,5],
            [1,0],
            [6,3],
            [120,5],
            [1,0],
            [6,3],
            [120,5],
            [1,0],
            [6,3],
            [120,5],
        ];
    }

    protected function tearDown()
    {
        $this->fixtures = null;
    }

}