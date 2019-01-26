<?php
    echo '
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, inital-scale=1">
        <meta name="author" content="Audrey Spjut">
        
        <!-- js here -->
        <script src="/homepage.js"></script>
    ';

    $_SERVER['HTTP_HOST'];
    $_SERVER['REQUEST_URI'];
    if ($_SERVER['HTTP_HOST'] == "https://radiant-beach-62520.herokuapp.com/homepage.php" && "assignment.php")  {
        echo '<link href="homepage-main.css" type="text/css" rel="stylesheet">
              <link href="homepage-medium.css" type="text/css" rel="stylesheet">
              <link href="homepage-large.css" type="text/css" rel="stylesheet">
            ';
    } else if ($_SERVER['HTTP_HOST'] == "https://radiant-beach-62520.herokuapp.com/browseShop_wk3prove.php" && "https://radiant-beach-62520.herokuapp.com/checkout_wk3prove.php") {
        echo '<link href="checkout_wk3prove.css" type="text/css" rel="stylesheet">';
    }

?>