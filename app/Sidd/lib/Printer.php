<?php 
/*
 * @Author: siddhartha.sharma siddharthasharma79@gmail.com 
 * @Date: 2019-08-23 02:15:45 
 * @Last Modified by: siddhartha.sharma
 * @Last Modified time: 2019-08-23 12:53:48
 */

namespace Sidd\lib;

class Printer {
  
  function printNumber($storeObj) : void {
     
    switch ($storeObj) {
      case ($storeObj->numRem35 == 0) :
        echo sprintf("%s\n","Linianos");
        break;
      
      case ($storeObj->numRem5 == 0) :
        echo sprintf("%s\n","IT");
        break;  

      case ($storeObj->numRem3 == 0) :
        echo sprintf("%s\n","Linio");
        break;  

      default :
        echo sprintf("%s\n",$storeObj->number);
        break;  
    }
  }
}
