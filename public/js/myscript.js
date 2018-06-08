var modal = document.getElementById('myModal');

// Get the <div> element that closes the modal
var div = document.getElementById("cls");

// Get the <div> element that closes the modal
var span = document.getElementById("btnClose");

// When the user clicks on <div> (Закрыть), close the modal
if (div != null)
{
	div.onclick = function() {
    modal.style.display = "none";
	}
}


// When the user clicks on <span> (x), close the modal
if (div != null)
{
	span.onclick = function() {
    modal.style.display = "none";
	}
}


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}