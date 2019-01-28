<?php
  session_start();
?><!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>Browse Items</title>
        <?php
                include ('head.php');
        ?>
    </head>
    <body>
        <header>
            <img src="/imgs/logo.png" id="logo">
            <span id="cart-text">Go to Cart</span>
            <img src="/imgs/cart-icon.png" id="cart" alt="image of a cart">
        </header>
        <main>
            <div id="item-holder">
                <div class="item">
                    <img src="/imgs/avocado-toast.jpeg" class="foodImage crop" alt="photo of avocado toast">
                    <span class="foodName ">Avocado Toast</span>
                    <button class="addButton" action="cartFunctions.php">Add to Cart</button>
                </div>
                <div class="item">
                    <img src="/imgs/burger.jpeg" class="foodImage crop" alt="photo of a burger">
                    <span class="foodName ">Burger</span>
                    <button class="addButton" action="cartFunctions.php">Add to Cart</button>
                </div>
                <div class="item">
                    <img src="/imgs/burrito.jpeg" class="foodImage crop" alt="photo of a burrito">
                    <span class="foodName ">Burrito</span>
                    <button class="addButton" action="cartFunctions.php">Add to Cart</button>
                </div>
                <div class="item">
                    <img src="/imgs/chicken-salad.jpeg" class="foodImage crop" alt="photo of a salad with chicken">
                    <span class="foodName ">Salad with Chicken</span>
                    <button class="addButton" action="cartFunctions.php">Add to Cart</button>
                </div>
                <div class="item">
                    <img src="/imgs/chocolate-cake.jpeg" class="foodImage crop" alt="photo of chocolate cake">
                    <span class="foodName ">Chocolate Cake</span>
                    <button class="addButton" action="cartFunctions.php">Add to Cart</button>
                </div>
                <div class="item">
                    <img src="/imgs/doughnut.jpeg" class="foodImage crop" alt="photo of a doughnut">
                    <span class="foodName ">Doughnut</span>
                    <button class="addButton" action="cartFunctions.php">Add to Cart</button>
                </div>
                <div class="item">
                    <img src="/imgs/dumpling-soup.jpeg" class="foodImage crop" alt="photo of dumpling soup">
                    <span class="foodName ">Dumpling Soup</span>
                    <button class="addButton" action="cartFunctions.php">Add to Cart</button>
                </div>
                <div class="item">
                    <img src="/imgs/fries-n-sandwich.jpeg" class="foodImage crop" alt="photo of fries and a sandwich">
                    <span class="foodName ">Fries and Sandwich</span>
                    <button class="addButton" action="cartFunctions.php">Add to Cart</button>
                </div>
                <div class="item">
                    <img src="/imgs/fruit.png" class="foodImage crop" alt="Various fruits on a plate">
                    <span class="foodName ">Fruit</span>
                    <button class="addButton" action="cartFunctions.php">Add to Cart</button>
                </div>
                <div class="item">
                    <img src="/imgs/kimchi.jpeg" class="foodImage" alt="photo of kimchi">
                    <span class="foodName ">Kimchi</span>
                    <button class="addButton" action="cartFunctions.php">Add to Cart</button>
                </div>
                <div class="item">
                    <img src="/imgs/lamb.jpeg" class="foodImage" alt="photo of a rack of lamb">
                    <span class="foodName ">Lamb</span>
                    <button class="addButton" action="cartFunctions.php">Add to Cart</button>
                </div>
                <div class="item">
                    <img src="/imgs/noodles.jpeg" class="foodImage" alt="photo of noodles">
                    <span class="foodName ">Noodles</span>
                    <button class="addButton" action="cartFunctions.php">Add to Cart</button>
                </div>
                <div class="item">
                    <img src="/imgs/pancakes.jpeg" class="foodImage" alt="photo of pancakes">
                    <span class="foodName ">Pancakes</span>
                    <button class="addButton" action="cartFunctions.php">Add to Cart</button>
                </div>
                <div class="item">
                    <img src="/imgs/parfait.jpeg" class="foodImage" alt="photo of a parfait">
                    <span class="foodName ">Parfait</span>
                    <button class="addButton" action="cartFunctions.php">Add to Cart</button>
                </div>
                <div class="item">
                    <img src="/imgs/penne-pasta.jpeg" class="foodImage" alt="photo of penne pasta">
                    <span class="foodName">Penne Pasta</span>
                    <button class="addButton" action="cartFunctions.php">Add to Cart</button>
                </div>
                <div class="item">
                    <img src="/imgs/pho.jpeg" class="foodImage" alt="photo of pho">
                    <span class="foodName ">Pho</span>
                    <button class="addButton" action="cartFunctions.php">Add to Cart</button>
                </div>
                <div class="item">
                    <img src="/imgs/pizza.jpeg" class="foodImage" alt="photo of pizza">
                    <span class="foodName ">Pizza</span>
                    <button class="addButton" action="cartFunctions.php">Add to Cart</button>
                </div>
                <div class="item">
                    <img src="/imgs/rice-n-egg.jpeg" class="foodImage" alt="photo of an egg over rice">
                    <span class="foodName ">Rice with Egg</span>
                    <button class="addButton" action="cartFunctions.php">Add to Cart</button>
                </div>
                <div class="item">
                    <img src="/imgs/salad.jpg" class="foodImage" alt="photo of salad">
                    <span class="foodName ">Salad</span>
                    <button class="addButton">Add to Cart</button>
                </div>
                <div class="item">
                    <img src="/imgs/soup.jpeg" class="foodImage" alt="photo of soup">
                    <span class="foodName "></span>
                    <button class="addButton">Add to Cart</button>
                </div>
            </div>
        </main>
        <footer>

        </footer>
    </body>
</html>
