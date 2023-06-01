document.getElementById("myForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Evita que el formulario se envíe automáticamente
    var name = document.getElementById("name").value;
    var number = document.getElementById("number").value;
    var email = document.getElementById("email").value;
    var text = document.getElementById("text").value;

    if (name !== "" && number !== "" && email !== "" && text !== "") {
        // Redirigir a otro HTML
        window.location.href = "index14.html";
    } else {
        alert("Por favor, complete todos los campos");
    }
});