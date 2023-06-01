document.getElementById("myForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Evita el envío automático del formulario

    var codigo = document.getElementById("codigo").value;

    // Validar si el código está vacío
    if (codigo === "") {
        alert("Por favor, introduzca un código válido");
    } else {
        // Redirigir según el botón seleccionado
        var btnSiguiente = document.getElementById("btn-siguiente");

        // Redirigir a otro HTML después de hacer clic en el botón "Siguiente"
        window.location.href = "index6.html";

    }
});
document.getElementById("btn-atras").addEventListener("click", function(event) {
    event.preventDefault(); // Evita el comportamiento predeterminado del botón

    // Redirigir al HTML anterior
    window.location.href = "index4.html";
});
