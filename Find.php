<?php
include '../Model/Product.php';


$Fndprod = $_GET='prodname';

$Fount[] = new ArrayObject();

$ArIter = new ArrayIterator();
for ($i=0;i<$ArIter;$i++)
{
    if($ArrayPr[$ArIter] == $Fndprod)
    {
            $Fount = $ArrayPr[$ArIter];
    }
}




/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

