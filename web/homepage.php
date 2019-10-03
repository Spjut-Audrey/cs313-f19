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
        <div class=sidebar>
            <img src="audrey-spjut.JPG" alt="profile pic of Audrey Spjut">
            <a href="https://github.com/Spjut-Audrey/cs313-f19">Github CS 313 Repo</a>
            <a href="assignment.php">Assignment Page</a>
        </div>
    </body>
</html>