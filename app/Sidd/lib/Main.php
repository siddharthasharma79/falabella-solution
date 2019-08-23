<?php 
/*
 * @Author: siddhartha.sharma siddharthasharma79@gmail.com 
 * @Date: 2019-08-23 02:14:27 
 * @Last Modified by: siddhartha.sharma
 * @Last Modified time: 2019-08-23 12:31:17
 */

namespace Sidd\lib;
class Main 
{
  public function printNumbers() {
    for($i =1; $i <= 100; $i++)
    {
      $Store = new Store;
      $Remainder = new Remainder;
      $Store->number = $i;
      $Store->numRem3 = $Remainder->getRemainder($i, 3);
      $Store->numRem5 = $Remainder->getRemainder($i, 5);
      $Store->numRem35 = $Remainder->addRemainder($Store->numRem3, $Store->numRem5);
      $Printer = new Printer;
      $Printer->printNumber($Store);
    } 
  }
   
}

?>
