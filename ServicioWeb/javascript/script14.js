document.getElementById("myForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Evita que el formulario se envíe automáticamente

    // Verificar si los campos están completos
    var pos_1 = document.getElementById("pos_1").value;
    var pos_2 = document.getElementById("pos_2").value;
    var pos_3 = document.getElementById("pos_3").value;
    var pos_4 = document.getElementById("pos_4").value;
    var pos_5 = document.getElementById("pos_5").value;
    var pos_6 = document.getElementById("pos_6").value;
    var pos_7 = document.getElementById("pos_7").value;
    var pos_8 = document.getElementById("pos_8").value;
    var pos_9 = document.getElementById("pos_9").value;
    var pos_10 = document.getElementById("pos_10").value;
    var pos_11= document.getElementById("pos_11").value;
    var pos_12 = document.getElementById("pos_12").value;
    var pos_13 = document.getElementById("pos_13").value;
    var pos_14 = document.getElementById("pos_14").value;
    var pos_15 = document.getElementById("pos_15").value;
    var pos_16 = document.getElementById("pos_16").value;
    

    if (pos_1 === "" || pos_2 === "" || pos_3 === "" || pos_4 === "" || pos_5 === "" || pos_6 === "" || pos_7 === "" || pos_8 === "" || pos_9 === "" || pos_10 === "" || pos_11 === "" || pos_12 === "" || pos_13 === "" || pos_14 === "" || pos_15 === "" || pos_16 === "") {
        alert("Por favor, complete todos los campos");
    }else{
        document.getElementById("myForm").submit();
    }
});