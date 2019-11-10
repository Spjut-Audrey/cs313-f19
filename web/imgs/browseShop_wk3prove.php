<?php
  session_start();

  require_once ('cartController.php');
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
                    <img src="/imgs/avocado-toast.jpeg" class="foodImage crop" alt="photo of avocado toast"><br>
                    <span class="foodName">Avocado Toast</span><br>
                    <span class="priceText">$400,000</span><br>
                    <input id="food1" class="addButton" action="cartFunctions.php" type="submit" value="Add to Cart">
                </div>
                <div class="item">
                    <img src="/imgs/burger.jpeg" class="foodImage crop" alt="photo of a burger"><br>
                    <span class="foodName">Burger</span><br>
                    <span class="priceText">$8</span><br>
                    <input id="food2" class="addButton" action="cartFunctions.php" type="submit" value="Add to Cart">
                </div>
                <div class="item">
                    <img src="/imgs/burrito.jpeg" class="foodImage crop" alt="photo of a burrito"><br>
                    <span class="foodName">Burrito</span><br>
                    <span class="priceText">$6</span><br>
                    <input id="food3" class="addButton" action="cartFunctions.php" type="submit" value="Add to Cart">
                </div>
                <div class="item">
                    <img src="/imgs/chicken-salad.jpeg" class="foodImage crop" alt="photo of a salad with chicken"><br>
                    <span class="foodName">Salad with Chicken</span><br>
                    <span class="priceText">$10</span><br>
                    <input id="food4" class="addButton" action="cartFunctions.php" type="submit" value="Add to Cart">
                </div>
                <div class="item">
                    <img src="/imgs/chocolate-cake.jpeg" class="foodImage crop" alt="photo of chocolate cake"><br>
                    <span class="foodName">Chocolate Cake</span><br>
                    <span class="priceText">$10</span><br>
                    <input id="food5" class="addButton" action="cartFunctions.php" type="submit" value="Add to Cart">
                </div>
                <div class="item">
                    <img src="/imgs/doughnut.jpeg" class="foodImage crop" alt="photo of a doughnut"><br>
                    <span class="foodName">Doughnut</span><br>
                    <span class="priceText">$3</span><br>
                    <input id="food6" class="addButton" action="cartFunctions.php" type="submit" value="Add to Cart">
                </div>
                <div class="item">
                    <img src="/imgs/dumpling-soup.jpeg" class="foodImage crop" alt="photo of dumpling soup"><br>
                    <span class="foodName">Dumpling Soup</span><br>
                    <span class="priceText">$7</span><br>
                    <input id="food7" class="addButton" action="cartFunctions.php" type="submit" value="Add to Cart">
                </div>
                <div class="item">
                    <img src="/imgs/fries-n-sandwich.jpeg" class="foodImage crop" alt="photo of fries and a sandwich"><br>
                    <span class="foodName">Fries and Sandwich</span><br>
                    <span class="priceText">$12</span><br>
                    <input id="food8" class="addButton" action="cartFunctions.php" type="submit" value="Add to Cart">
                </div>
                <div class="item">
                    <img src="/imgs/fruit.png" class="foodImage crop" alt="Various fruits on a plate"><br>
                    <span class="foodName">Fruit Plate</span><br>
                    <span class="priceText">$10</span><br>
                    <input id="food9" class="addButton" action="cartFunctions.php" type="submit" value="Add to Cart">
                </div>
                <div class="item">
                    <img src="/imgs/kimchi.jpeg" class="foodImage" alt="photo of kimchi"><br>
                    <span class="foodName">Kimchi</span><br>
                    <span class="priceText">$8</span><br>
                    <input id="food10" class="addButton" action="cartFunctions.php" type="submit" value="Add to Cart">
                </div>
                <div class="item">
                    <img src="/imgs/lamb.jpeg" class="foodImage" alt="photo of a rack of lamb"><br>
                    <span class="foodName">Lamb</span><br>
                    <span class="priceText">$30</span><br>
                    <input id="food11" class="addButton" action="cartFunctions.php" type="submit" value="Add to Cart">
                </div>
                <div class="item">
                    <img src="/imgs/noodles.jpeg" class="foodImage" alt="photo of noodles"><br>
                    <span class="foodName">Noodles</span><br>
                    <span class="priceText">$10</span><br>
                    <input id="food12" class="addButton" action="cartFunctions.php" type="submit" value="Add to Cart">
                </div>
                <div class="item">
                    <img src="/imgs/pancakes.jpeg" class="foodImage" alt="photo of pancakes"><br>
                    <span class="foodName">Pancakes</span><br>
                    <span class="priceText">$8</span><br>
                    <input id="food13" class="addButton" action="cartFunctions.php" type="submit" value="Add to Cart">
                </div>
                <div class="item">
                    <img src="/imgs/parfait.jpeg" class="foodImage" alt="photo of a parfait"><br>
                    <span class="foodName">Parfait</span><br>
                    <span class="priceText">$4</span><br>
                    <input id="food14" class="addButton" action="cartFunctions.php" type="submit" value="Add to Cart">
                </div>
                <div class="item">
                    <img src="/imgs/penne-pasta.jpeg" class="foodImage" alt="photo of penne pasta"><br>
                    <span class="foodName">Penne Pasta</span><br>
                    <span class="priceText">$12</span><br>
                    <input id="food15" class="addButton" action="cartFunctions.php" type="submit" value="Add to Cart">
                </div>
                <div class="item">
                    <img src="/imgs/pho.jpeg" class="foodImage" alt="photo of pho"><br>
                    <span class="foodName">Pho</span><br>
                    <span class="priceText">$12</span><br>
                    <input id="food16" class="addButton" action="cartFunctions.php" type="submit" value="Add to Cart">
                </div>
                <div class="item">
                    <img src="/imgs/pizza.jpeg" class="foodImage" alt="photo of pizza"><br>
                    <span class="foodName">Pizza</span><br>
                    <span class="priceText">$15</span><br>
                    <input id="food17" class="addButton" action="cartFunctions.php" type="submit" value="Add to Cart">
                </div>
                <div class="item">
                    <img src="/imgs/rice-n-egg.jpeg" class="foodImage" alt="photo of an egg over rice"><br>
                    <span class="foodName ">Rice with Egg</span><br>
                    <span class="priceText">$8</span><br>
                    <input id="food18" class="addButton" action="cartFunctions.php" type="submit" value="Add to Cart">
                </div>
                <div class="item">
                    <img src="/imgs/salad.jpg" class="foodImage" alt="photo of salad"><br>
                    <span class="foodName">Salad</span><br>
                    <span class="priceText">$10</span><br>
                    <input id="food19" class="addButton" action="cartFunctions.php" type="submit" value="Add to Cart">
                </div>
                <div class="item">
                    <img src="/imgs/soup.jpeg" class="foodImage" alt="photo of soup"><br>
                    <span class="foodName">Soup</span><br>
                    <span class="priceText">$11</span><br>
                    <input id="food20" class="addButton" action="cartFunctions.php" type="submit" value="Add to Cart">
                </div>
            </div>
        </main>
        <footer>

        </footer>
    </body>
</html>
