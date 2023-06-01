document.getElementById("myForm").addEventListener("submit", function(event) {
    var selectElement = document.querySelector('select[name="Profesor"]');
    var selectedOption = selectElement.options[selectElement.selectedIndex].value;
        event.preventDefault(); // Evita que el formulario se envíe automáticamente
        window.location.href = "index21.html";
});