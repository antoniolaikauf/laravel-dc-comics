import './bootstrap';

window.addEventListener("load", () => {
    // conferma delete elemento 
    document.getElementById("myButton").addEventListener("click", function() {
        alert("vuoi eliminarlo?");
    });
});