
// Get the modal
var winmodal = document.getElementById('myWinmodal');

// Get the button that opens the winmodal
var btn = document.getElementById("myBtn2");
// Get the <span> element that closes the winmodal
var span = document.getElementsByClassName("closing")[0];

// When the user clicks the button, open the winmodal 
btn.onclick = function() {
    winmodal.style.display = "block";
}

// When the user clicks on <span> (x), close the winmodal
span.onclick = function() {
    winmodal.style.display = "none";
}

// When the user clicks anywhere outside of the winmodal, close it
window.onclick = function(event) {
    if (event.target == winmodal) {
        winmodal.style.display = "none";
    }
}
