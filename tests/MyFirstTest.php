<?php
/**
 * Created by PhpStorm.
 * User: ksenia
 * Date: 02.12.2018
 * Time: 20:40
 */

class MyFirstTest extends \PHPUnit\Framework\TestCase
{
    public function testMyFirst() {

        $this->assertEquals(1,1);

    }

    public function testFalse() {
        $this->assertFalse(1>2, "Один меньше двух - false");
    }

    public function testStringStart() {
        $str = 'PHP самый лучший язык';

        $this->assertStringStartsWith("PHP",$str);
        $this->assertStringStartsNotWith("Ruby", $str);

    }

    public function testStringEnds() {
        $str = 'PHP самый лучший язык';
        $this->assertStringEndsWith('язык',$str);
    }

    public function testMatch() {
        $str ='php';

        $this->assertRegExp('/[a-z]+/', $str);
    }
}