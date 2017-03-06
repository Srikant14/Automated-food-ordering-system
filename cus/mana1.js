<script>
// Get the modal
var modal = document.getElementById('table1');

// Get the button that opens the modal
var btn = document.getElementById("purchase-buttonv1");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    tab1.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    tab1.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == tab1) {
        tab1.style.display = "none";
    }
}
</script>
