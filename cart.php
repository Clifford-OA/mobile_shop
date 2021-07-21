<?php

ob_start();
// include header.php file
include("header.php");
?>

<?php

    // include cart items if it is not empty
count($product->getData('cart')) ? include("template/_cart-template.php") : include('template/notFound/_cart_notFound.php');
    // !include cart items if it is not empty

// include wishlist.php file
count($product->getData('wishlist')) ? include("template/_wishlist-template.php") : include('template/notFound/_wishlist_notFound.php');


// include top-sale.php file
include("template/_new-phones.php");

?>



<?php
// include footer.php file
include("footer.php");
?>