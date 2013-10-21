<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Product
 *
 * @author Администратор
 */
class Product {
    public $prName;
    public $prPrice;
    public $prQuantity;
    public $prDescr;
    
    public function __construct($pname,$pPr,$pQ,$pDscr) {
        $this->prName = $pname;
        $this->prPrice = $pPr;
        $this->prQuantity = $pQ;
        $this->prDescr = $pDscr;
    }
    
    public function __get($name) {
        if ($this->prName == $name)
        {
            return this;
        }
        else
        {
            throw new Exception('Товар с именем "' . $name .  '" отсутсвует.');
        }
    }
    
    public function set($valueN,$valuePr,$valueQ,$valueDescr) 
    {
        $this->prName = $valueN;
        $this->prPrice = $valuePr;
        $this->prQuantity = $valueQ;
        $this->prDescr = $valueDescr;
    }   
}

$ArrayPr = new ArrayObject();
$ArrayPr[0] = new Product("Guitar",4000, 200, "Guitar for beginners");
$ArrayPr[1] = new Product("Violin",3000, 250, "Violin for beginners");
$ArrayPr[2] = new Product("Bass guitar",6000, 250, "Bass guitar for beginners");
$ArrayPr[3] = new Product("Piano",7000, 200, "Piano for beginners");
$ArrayPr[4] = new Product("Drum",4400, 300, "Drum for beginners");


//Ниже просто экспериментировал


//class PrBook extends Product
//{
//
//    public $prName = "Book";
//    public $prPrice = 250;
//    
//}
//
//class Xbox extends Product
//{
//
//    public $prName = "Book";
//    public $prPrice = 450;
//    
//    
//    
//}
//class Piano extends Product
//{
//    public $prName = "Piano";
//    public $prPrice = 5000;
//    public $prQuantity= 200;
//    public $prDescr= "Piano for beginners";
//    
//    public function get($prN) {
//    if (isset($this->prName = $prN)) 
//        {
//      return $this
//        } 
//    else {
//      throw new Exception('Элемент с  ключем "' . $key .  '" отсутсвует.');
//    }
//  }
//}
//class Violin extends Product
//{
//    public $prName = "Violin";
//    public $prPrice = 5000;
//    public $prQuantity= 200;
//    public $prDescr= "Violin for beginners";
//}
//class Guitar extends Product
//{
//    public $prName = "Guitar";
//    public $prPrice = 5000;
//    public $prQuantity= 200;
//    public $prDescr= "Guitar for beginners";
//}
//     
//class ProductsArr {
//  private $_list = array();
//  
//  public function add($value, $key = null) {
//    if ($key === null || empty($key)){
//      $this->_list[] = $data;
//      return;
//    }
//    
//    if (!isset($this->_list[$key])){
//      $this->_list[$key] = $data;
//    } else {
//      throw new Exception('Ключ "' . $key . '" уже  используется.');
//    }
//  }
//  
//  public function del($key) {
//    if (isset($this->_list[$key])) {
//      unset($this->_list[$key]);
//    } else {
//      throw new Exception('Элемент с  ключем "' . $key .  '" отсутсвует.');
//    }
//  }
//  
//  public function get($key) {
//    if (isset($this->_list[$key])) {
//      return $this->_list[$key];
//    } else {
//      throw new Exception('Элемент с  ключем "' . $key .  '" отсутсвует.');
//    }
//  }
//  
//  public function exist($key) {
//    return isset($this->_list[$key]);
//  }
//}
//$ArrayIter = new ArrayIterator();
