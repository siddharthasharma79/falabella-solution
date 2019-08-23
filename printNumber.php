<?php
/*
 * @Author: siddhartha.sharma siddharthasharma79@gmail.com 
 * @Date: 2019-08-23 03:59:23 
 * @Last Modified by: siddhartha.sharma
 * @Last Modified time: 2019-08-23 04:11:50
 */

function printNumbers(){
  for($i = 1; $i <= 100; $i++)
  {
    $number = $i;
    $numRem3 = $number % 3;
    $numRem5 = $number % 5;
    $numRem35 = $numRem3 + $numRem5;
    
    $paramArr = array($number,$numRem3,$numRem5,$numRem35);
    switch ($paramArr) {
      
      case ($paramArr[3] == 0) :
        echo "Linianos\n";
        break;
      
      case ($paramArr[2] == 0) :
        echo "IT\n";
        break;  

      case ($paramArr[1] == 0) :
        echo "Linio\n";
        break;  

      default :
        echo $paramArr[0]."\n";
        break;  
    }
  } 
}

printNumbers();  

?>