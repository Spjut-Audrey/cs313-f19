<!DOCTYPE html>
<html lang="en-us">
    <head>
        <?php include 'head.php'; ?>
        <title>CS 313 Homepage | Audrey Spjut</title>

        <!-- SCRIPT SRCS HERE -->
    </head>
    <body>
        <div class="sidebar">
            <?php include 'sidebar.php'; ?>
            <a href="assignment.php">Assignment Page</a>
        </div>
        <div class="content">
            Countdown to blizzcon: <br>
                <?php
                    $today = time();
                    $blizzcon = mktime(0,0,0,11,1,2019);

                    $countdown = round(($blizzcon - $today)/86400);

                    echo "There are $countdown days until Blizzcon!";
                ?>
            <p>Blizzcon is a really fun way to learn more about the 
                gaming company Blizzard, their games and competitions.

                I love playing Blizzards' various games. Overwatch, World
                of Warcraft (Battle of Azeroth and Classic),
                Heroes of the Storm, Diablo, Hearthstone, and just a
                little Starcraft.
            </p>

            <h2>Assignments</h2>
            <a href="shoppingCart.php">Week 3: Shopping Cart</a>
        </div>
    </body>
</html>