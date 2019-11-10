<?php
    //start session
    session_start();

    //check if cart has items set yet? is that a thing that I should do?
    // if (isset );

?><!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Shopping Cart | CS313</title>

        <!-- css -->
        <link rel="stylesheet" type="text/css" href="shoppingCart.css">
        <!-- font -->
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <h1>Shopping Cart</h1>
        </header>
        <div class="grid-container">
            <form method="post" action="cartView.php">
                <div class="gI-1">
                    <!-- make sure to set items to session for passing data to cart page -->
                    <p><img src="https://www.nintendo.com/content/dam/noa/en_US/hardware/switch/nintendo-switch-new-package-gray/gallery/package_gray.jpg" alt="Nintendo Switch"><p>
                    <p>Nintendo Switch<br>$299.99</p>
                    <p><a href="">Add to Cart</a><p>
                </div>
                <div class="gI-2">
                    <!-- make sure to set items to session for passing data to cart page -->
                    <p><img src="https://target.scene7.com/is/image/Target/GUEST_1d8adc19-6218-4934-8bcc-4bcf22bf786d?fmt=webp&wid=1400&qlt=80" alt="Nintendo Switch Joy-cons"><p>
                    <p>Nintendo Switch Joy-cons<br>$66.99</p>
                    <p><a href="">Add to Cart</a><p>
                </div>
                <div class="gI-3">
                    <!-- make sure to set items to session for passing data to cart page -->
                    <p><img src="https://target.scene7.com/is/image/Target/GUEST_2a10c7ce-3fd2-4490-8b98-c8e7d73542a2?fmt=webp&wid=1400&qlt=80" alt="Nintendo Switch Pro Controller"><p>
                    <p>Nintendo Switch Pro Controller<br>$62.99</p>
                    <p><a href="">Add to Cart</a><p>
                </div>
                <input type="image" src="https://cdn.pixabay.com/photo/2013/07/12/14/53/cart-148964_960_720.png" alt="shopping cart graphic" id="shoppingCart" class="img">
            </form>
        </div>
    </body>
</html>