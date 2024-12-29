"use strict";

// Asegúrate de que el script se ejecute después de que el DOM esté listo
document.addEventListener("DOMContentLoaded", () => {
    // Selección de elementos
    const triggers = document.querySelectorAll("h2"); // Todos los elementos <h2>
    const iniciarSesion = document.querySelector('.iniciar_sesion'); // Formulario iniciar sesión
    const registrarse = document.querySelector('.registrarse'); // Formulario registrarse

    // Funciones para activar/desactivar triggers
    function activarTrigger(trigger) {
        trigger.setAttribute("data-status", "activo");
        trigger.style.backgroundColor = '#575F51';
        
    }

    function desactivarTrigger(trigger) {
        trigger.setAttribute("data-status", "inactivo");
        trigger.style.backgroundColor = '#DAE3D1';
    }

    // Iterar sobre los triggers para agregar eventos
    triggers.forEach((elemento) => {
        elemento.addEventListener("click", () => {
            if (elemento.classList.contains("iniciar_sesion")) {
                activarTrigger(iniciarSesion);
                desactivarTrigger(registrarse);
            } else if (elemento.classList.contains("registrarse")) {
                activarTrigger(registrarse);
                desactivarTrigger(iniciarSesion);
            }
        });
    });
});
