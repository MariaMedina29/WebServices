document.getElementById("myForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Evita que el formulario se envíe automáticamente

    // Verificar si los campos están completos
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    if (email === "" || password === "") {
        alert("Por favor, complete todos los campos");
    }else{
        document.getElementById("myForm").submit();
    }
});

var passwordInput = document.getElementById("password");
var passwordToggle = document.getElementById("password-toggle");

passwordToggle.addEventListener("click", function() {
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
    } else {
        passwordInput.type = "password";
    }
});
