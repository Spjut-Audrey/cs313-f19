<!DOCTYPE html>
<html lang="en-us">
<head>    
    <title>Week 2: Team</title>

    <!-- CSS LINKS -->
    <link rel="stylesheet" href="team2.css">

    <!-- SCRIPT LINKS HERE -->
    <script src="team2.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script> //jquery fade in/out code
        $(document).ready(function(){
            $("#hideDiv").click(function() {
                $("#div3").fadeToggle("slow");
            });
        });
    </script>

</head>
<body>
    <main>
        <div id="div1">I am some text in div 1</div>
        <textarea id="textArea" rows="3" cols="30">Enter new color name
        </textarea><br>
        <button onclick="changeColor()">Change Div 1 Color</button>
        <br><br>

        <div>I am div two</div>
        <div id="div3">Woah another div? Div 3</div>
        <button id="hideDiv">Toggle Div 3</button><br><br>

        <button id="button" onclick="buttonAlert()">Click Me!</button>
    </main>
</body>

</html>