document.getElementById("myForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Evita que el formulario se envíe automáticamente

    // Verificar si los campos están completos
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirmPassword").value;

    if (password === "" || confirmPassword === "") {
        alert("Por favor, complete todos los campos");
    } else if (password !== confirmPassword) {
        alert("Las contraseñas no coinciden");
    } else {
        // Redirigir a otro HTML
        window.location.href = "index.html";
    }
});
