<!DOCTYPE html>
<html lang="en-us">
<head>    
    <title>Week 2: Team</title>

    <!-- CSS LINKS -->
    <link rel="stylesheet" href="team2.css">

    <!-- SCRIPT LINKS HERE -->
    <script src="team2.js"></script>
    <script src="jquery-3.4.1.min.js"></script>
</head>
<body>
    <main>
        <div id="div1">I am some text in div 1</div>
        <textarea id="textArea" rows="3" cols="30">Enter new color name
        </textarea><br>
        <button onclick="changeColor()">Change Div 1 Color</button>
        <br>

        <div>I am div two</div>
        <div id="hiddenDiv">Woah another div? Div 3</div>
        <button id="hideDiv">Hide Div 3</button>

        <button id="button" onclick="buttonAlert()">Click Me!</button>
    </main>
</body>

</html>