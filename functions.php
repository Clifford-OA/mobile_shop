<?php 
    
    // require MySQL connection
    require('database/DBController.php');

     
    // require product class
    require('database/Product.php');

      
    // require Cart class
    require('database/Cart.php');

    $db = new DBController();
    
//    Product object
    $product = new Product($db);
    $product_shuffle = $product->getData();


    //  Cart object
    $Cart = new Cart($db);
  