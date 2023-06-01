document.getElementById("myForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Evita el envío automático del formulario

    // Verificar si se ha proporcionado un correo electrónico
    var email = document.getElementById("email").value;

    if (email === "") {
        alert("Por favor, introduzca un correo electrónico válido");
    } else {
        // Redirigir a otro index.html
        window.location.href = "index5.html";
    }
});
