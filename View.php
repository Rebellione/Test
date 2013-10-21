<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php include_once 'tpl/header.php'; ?>
        <?php include_once 'tpl/sidebar.php'; ?>
        <?php include_once 'tpl/footer.php'; ?>  
        <?php include '../Model/Product.php'; ?>
        <?php include '../Controller/Find.php'; ?>       
        <form action="Find.php" method="get" >
           <p> Product <input type="text" name="prodname" /></p>         
            <p><input type="submit"  /></p>  
            
        </form>
         
        <?php 
        
        ?>
       
        
        
        ?>
    </body>
</html>
