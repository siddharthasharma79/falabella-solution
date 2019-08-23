<?php
/*
 * @Author: siddhartha.sharma siddharthasharma79@gmail.com 
 * @Date: 2019-08-23 05:51:28 
 * @Last Modified by: siddhartha.sharma
 * @Last Modified time: 2019-08-23 06:03:39
 */

use Sidd\lib\Remainder as Remainder;
use PHPUnit\Framework\TestCase;


class RemainderTest extends  TestCase
{

    private $_remainder;


    public function setUp(){

        $this ->_remainder = new Remainder();
    }

    public function  testThree(){

        $this->assertEquals(0,$this->_remainder->getRemainder(3,3));
        $this->assertEquals(0,$this->_remainder->getRemainder(12,3));
        $this->assertEquals(0,$this->_remainder->getRemainder(27,3));
    }

    public function  testFive(){

        $this->assertEquals(0,$this->_remainder->getRemainder(5,5));
        $this->assertEquals(0,$this->_remainder->getRemainder(50,5));
        $this->assertEquals(0,$this->_remainder->getRemainder(50,5));
    }

    public function  testThreeAndFive(){

        $this->assertEquals(0,$this->_remainder->addRemainder(0,0));
        $this->assertEquals(0,$this->_remainder->addRemainder(($this->_remainder->getRemainder(15,5)),($this->_remainder->getRemainder(15,3))));


    }

    public function testNone(){

        $this->assertNotEquals(0,$this->_remainder->getRemainder(4,3));
        $this->assertNotEquals(0,$this->_remainder->getRemainder(7,5));
        $this->assertNotEquals(0,$this->_remainder->addRemainder(1,0));
        $this->assertNotEquals(0,$this->_remainder->addRemainder(($this->_remainder->getRemainder(17,5)),($this->_remainder->getRemainder(17,3))));
    }
}
