<?php
/*
 * @Author: siddhartha.sharma siddharthasharma79@gmail.com 
 * @Date: 2019-08-23 11:22:24 
 * @Last Modified by: siddhartha.sharma
 * @Last Modified time: 2019-08-23 13:18:49
 */

use Sidd\lib\Printer as Printer;
use Sidd\lib\Store as Store;
use PHPUnit\Framework\TestCase;


class PrinterTest extends TestCase
{
    private $_printerObj;
    private $_storeObj;

    public function prepare($numRem35, $numRem5, $numRem3, $number){
        $this->_printerObj = new \stdClass();
        $this->_storeObj = new \stdClass();
        $this->_storeObj = new Store();
        $this->_printerObj = new Printer();
        $this->_storeObj->numRem35 = $numRem35;
        $this->_storeObj->numRem5 = $numRem5;
        $this->_storeObj->numRem3 = $numRem3;
        $this->_storeObj->number = $number;
    }


    public function test_Print_Number_DevidedBy_Both_3_and_5(){
        $this->prepare(0,0,0,15);
        $this->expectOutputString("Linianos\n");
        $this->_printerObj->printNumber($this->_storeObj);

    }

    public function testPrinternumRem5(){
        $this->prepare(1,0,1,50);
        $this->expectOutputString("IT\n");
        $this->_printerObj->printNumber($this->_storeObj);

    }

    public function testPrinternumRem3(){
        $this->prepare(1,1,0,9);
        $this->expectOutputString("Linio\n");
        $this->_printerObj->printNumber($this->_storeObj);
    }

    public function testNone(){
        $this->prepare(1,1,1,17);
        $this->expectOutputString("17\n");
        $this->_printerObj->printNumber($this->_storeObj);
    }
}
