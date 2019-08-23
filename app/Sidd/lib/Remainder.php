<?php
/*
 * @Author: siddhartha.sharma siddharthasharma79@gmail.com 
 * @Date: 2019-08-23 03:00:17 
 * @Last Modified by: siddhartha.sharma
 * @Last Modified time: 2019-08-23 12:41:07
 */
namespace Sidd\lib;

class Remainder {

  public function getRemainder($number, $remainderByNumber) {
    return $number % $remainderByNumber;
  }

  public function addRemainder($numRem1, $numRem2) {
    return $numRem1 + $numRem2 ;
  }
}

 ?>