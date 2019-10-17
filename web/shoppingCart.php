<?php
    //start session
    session_start();

    //check if cart has items set yet
    if (isset )

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
            <img src="https://cdn.pixabay.com/photo/2013/07/12/14/53/cart-148964_960_720.png" alt="shopping cart graphic" id="shoppingCart">
        </header>
        <div class="grid-container">
            <form method="post" action="">
                <div class="gI-1">
                    <img src="https://www.nintendo.com/content/dam/noa/en_US/hardware/switch/nintendo-switch-new-package-gray/gallery/package_gray.jpg" alt="Nintendo Switch"><br>
                    <span>Nintendo Switch<br>$299.99</span><br><br>
                    <a href="">Add to Cart</a><br>
                </div>
                <div class="gI-2">
                    <img src="https://target.scene7.com/is/image/Target/GUEST_1d8adc19-6218-4934-8bcc-4bcf22bf786d?fmt=webp&wid=1400&qlt=80" alt="Nintendo Switch Joy-cons"><br>
                    <span>Nintendo Switch Joy-cons<br>$66.99</span><br><br>
                    <a href="">Add to Cart</a><br>
                </div>
                <div class="gI-3">
                    <img src="https://target.scene7.com/is/image/Target/GUEST_2a10c7ce-3fd2-4490-8b98-c8e7d73542a2?fmt=webp&wid=1400&qlt=80" alt="Nintendo Switch Pro Controller"><br>
                    <span>Nintendo Switch Pro Controller<br>$62.99</span><br><br>
                    <a href="">Add to Cart</a><br>
                </div>
            </form>
        </div>
    </body>
</html>