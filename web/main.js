function clickedButton() {
    alert("Clicked!");
}

function changeBkgdColor() {
    var colorText = document.getElementById("colorName");
    var colorDiv = document.getElementById("colorChangeDiv");
    
    var color = colorText.value;
    colorDiv.style.backgroundColor = color;
//    console.log("12");
}