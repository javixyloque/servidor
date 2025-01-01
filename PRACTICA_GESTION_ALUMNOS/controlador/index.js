"use strict";

// Asegúrate de que el script se ejecute después de que el DOM esté listo
document.addEventListener("DOMContentLoaded", () => {
    // Selección de elementos
    const triggers = document.querySelectorAll("h2"); // Todos los elementos <h2>
    const iniciarSesion = document.querySelector('.iniciar_sesion'); // Formulario iniciar sesión
    const registrarse = document.querySelector('.registrarse'); // Formulario registrarse

    const formInicio = document.getElementById('iniciar_sesion');
    const formRegistro = document.getElementById('registrarse');
    
    if (iniciarSesion) {
        iniciarSesion.style.backgroundColor = "#575F51";
    }

    // Funciones para activar/desactivar triggers
    function activarTrigger(trigger) { 
        trigger.setAttribute("data-status", "activo");
        trigger.style.backgroundColor = '#575F51';
        // AÑADIR FORMULARIO
        if (trigger.classList.contains("iniciar_sesion")) {
            formInicio.style.display = 'flex';
            formInicio.style.flexDirection = 'column';
        } else {
            formRegistro.style.display = 'flex';            
            formRegistro.style.flexDirection = 'column';
        }

    }

    function desactivarTrigger(trigger) {
        trigger.setAttribute("data-status", "inactivo");
        trigger.style.backgroundColor = '#DAE3D1';
        // ELIMINAR DISPLAY FORMULARIO
        if (trigger.classList.contains("iniciar_sesion")) {
            formInicio.style.display = 'none';
        } else {
            formRegistro.style.display = 'none';
        }
    }

    // BUCLE PARA AÑADIR LOS EVENTOS DE CLICK
    triggers.forEach((elemento) => {
        elemento.addEventListener("click", () => {

            if (elemento.classList.contains("iniciar_sesion")) {
                activarTrigger(elemento);
                desactivarTrigger(registrarse);

            } else if (elemento.classList.contains("registrarse")) {
                activarTrigger(elemento);
                desactivarTrigger(iniciarSesion);
            }
        });
    });

});
