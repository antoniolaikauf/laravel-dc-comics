import './bootstrap';

window.addEventListener("load", () => {
    // conferma delete elemento 
    document.getElementById("deleteButton").addEventListener("click", function() {
        alert("vuoi eliminarlo?");
    });
});