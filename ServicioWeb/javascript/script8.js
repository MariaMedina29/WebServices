document.getElementById("myForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Evita que el formulario se envíe automáticamente
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    if (name !== "" && email !== "" && password !== "") {
        // Redirigir a otro HTML
        window.location.href = "index3.html";
    } else {
        alert("Por favor, complete todos los campos");
    }
});