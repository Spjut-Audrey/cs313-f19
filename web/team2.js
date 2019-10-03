function buttonAlert() {
    alert("Clicked!");
}

function changeColor() {
    var changedColor = document.getElementById("textArea").value;

    document.getElementById("div1").style.backgroundColor = changedColor;

}

// $("#hideDiv").click(function() {
//     $("#hiddenDiv").toggle(500);
//     });