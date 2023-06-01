document.getElementById("myForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Evita que el formulario se envíe automáticamente

    // Verificar si los campos están completos
    var pre_1 = document.getElementById("pre_1").value;
    var pre_2 = document.getElementById("pre_2").value;
    var pre_3 = document.getElementById("pre_3").value;
    var pre_4 = document.getElementById("pre_4").value;
    var pre_5 = document.getElementById("pre_5").value;
    var pre_6 = document.getElementById("pre_6").value;
    var pre_7 = document.getElementById("pre_7").value;
    var pre_8 = document.getElementById("pre_8").value;
    var pre_9 = document.getElementById("pre_9").value;
    var pre_10 = document.getElementById("pre_10").value;
    var pre_11= document.getElementById("pre_11").value;
    var pre_12 = document.getElementById("pre_12").value;
    

    if (pre_1 === "" || pre_2 === "" || pre_3 === "" || pre_4 === "" || pre_5 === "" || pre_6 === "" || pre_7 === "" || pre_8 === "" || pre_9 === "" || pre_10 === "" || pre_11 === "" || pre_12 === "" ) {
        alert("Por favor, complete todos los campos");
    }else{
        document.getElementById("myForm").submit();
    }
});