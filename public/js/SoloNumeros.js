// Agregar event listener para el evento "input"
document.addEventListener("DOMContentLoaded", function() {
    
    var inputs = document.querySelectorAll(".solo-numeros");

    // Iterar sobre cada input y agregar un event listener para el evento "input"
    inputs.forEach(function(input) {
        input.addEventListener("input", function(event) {
            // Obtener el valor actual del input
            var valor = event.target.value;

            // Reemplazar cualquier carácter que no sea un número con una cadena vacía
            valor = valor.replace(/\D/g, "");

            // Actualizar el valor del input con solo números
            event.target.value = valor;
        });
    });
});
