<!DOCTYPE html>
<html lang="en-us">
    <head>
        <?php include 'head.php'; ?>
        <title>CS 313 Homepage | Audrey Spjut</title>
        
        <!-- CSS LINKS HERE -->

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
        <aside>
            <img src="https://imgur.com/a/woOT7Mc" alt="profile pic of Audrey Spjut">
        </aside>
    </body>
</html>