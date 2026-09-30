document.addEventListener("DOMContentLoaded", function() {
    var formularios = document.querySelectorAll(".EntradaDatos");
    formularios.forEach(function(formulario) {
        formulario.addEventListener("submit", function(event) {
            event.preventDefault();

            var camposLlenos = true;
            formulario.querySelectorAll("input").forEach(function(input) {
                if (input.value.trim() === "") {
                    camposLlenos = false;
                }
            });

            if (!camposLlenos) {
                alert("Por favor, complete todos los campos.");
                return;
            }

            formulario.submit();
        });

        // Agregar evento de cambio a los inputs para habilitar/deshabilitar el botón de envío
        formulario.querySelectorAll("input").forEach(function(input) {
            input.addEventListener("input", function() {
                var botonEnviar = formulario.querySelector(".Guardar");
                var camposLlenos = true;
                formulario.querySelectorAll("input").forEach(function(input) {
                    if (input.value.trim() === "") {
                        camposLlenos = false;
                    }
                });
                botonEnviar.disabled = !camposLlenos;
            });
        });

        // Deshabilitar el botón de envío inicialmente si no todos los campos están llenos
        var botonEnviar = formulario.querySelector(".Guardar");
        var camposLlenos = true;
        formulario.querySelectorAll("input").forEach(function(input) {
            if (input.value.trim() === "") {
                camposLlenos = false;
            }
        });
        botonEnviar.disabled = !camposLlenos;
    });
});
