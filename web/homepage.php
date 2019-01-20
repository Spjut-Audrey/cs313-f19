<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>Homepage for CS 313</title>
        <meta name="description" content="First content page for 
        week two prove assignment.">

        <?php
            include ('head.php');
        ?>
    </head>
    <body>
        <header>
          <h1>Homepage</h1>
          <a href="assignment.php" class="linkButton">Assignment Page</a>
        </header>
        <p>This past Thursday me and members of my guild met during our normal
            World of Warcraft raid time but this time we were working on something
            special. An awesome mount! The <a href="https://www.pcgamesn.com/world-of-warcraft/wow-hivemind-mount">
            hivemind mount</a> has been more popular lately because the guides are up (and to be honest I never would have done
            it otherwise). It was incredibly complicated and the items and puzzles all seemed randomly connected to each other. 
            I won't go into all of it, but I will describe one part of the puzzle that seemed to stump my group for half an hour
            last Thursday.</p>

        <h2>World of Warcraft river crossing puzzle</h2>
        <p>
            So imagine this - you have just opened this enormous door to reveal a stone bridge with a door on the opposite side.
            You know you have to go through it, but there is purple goop between you and the door. You look closer and see there
            is a floating, galaxy-like disc hovering above the goop back and forth across to the other side of the bridge. You and
            your group of four all jump on the disc, but once it gets half way across it drops you all off and says "access denied".
            Frustrated, you try again. You try again with only some of you, but it still doesn't work.
        </p>

        <p>
                You can see why a guide would be helpful right? Turns out there's a whole puzzle to getting everyone across that
                involves checking to see what pairings of the group can travel on the disc together. Granted, the guide doesn't 
                solve all. You will have some trial and error to figure out who can travel with who, but this graphic makes it
                much easier to understand. Click below to know the secret!
        </p>
            <button onclick="reveal()" class="revealButton">Reveal Solution</button>
            <div class="revealDiv">
                <img src="crossing.jpg" alt="image of final World of Warcraft bridge crossing solution">
            </div>
    </body>
</html>