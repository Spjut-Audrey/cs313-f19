<!DOCTYPE html>
<html lang="en-us">
    <head>
        <?php include 'head.php'; ?>
        <title>CS 313 Homepage | Audrey Spjut</title>

        <!-- SCRIPT SRCS HERE -->
    </head>
    <body>
        <main>
            Countdown to blizzcon: <br>
                <?php
                    $today = time();
                    $blizzcon = mktime(0,0,0,11,1,2019);

                    $countdown = round(($blizzcon - $today)/86400);

                    echo "There are $countdown days until Blizzcon!";
                ?>
        </main>
        <div class=sidebar>
            <?php include 'sidebar.php'; ?>
            <a href="assignment.php">Assignment Page</a>
        </div>
    </body>
</html>