document.getElementById("myForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Evita que el formulario se envíe automáticamente

    // Verificar si los campos están completos
    var name = document.getElementById("name").value;
    var number = document.getElementById("number").value;
    var email = document.getElementById("email").value;
    var text = document.getElementById("text").value;

    if (name === "" || number === "" || email === "" || text === "") {
        alert("Por favor, complete todos los campos");
    }else{
        document.getElementById("myForm").submit();
    }
});