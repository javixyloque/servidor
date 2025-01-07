"use strict";

// Asegúrate de que el script se ejecute después de que el DOM esté listo
window.addEventListener("DOMContentLoaded", () => {
    // Selección de elementos
    const triggers = document.querySelectorAll("h2"); // Todos los elementos <h2>
    const iniciarSesion = document.querySelector('.iniciar_sesion'); // Formulario iniciar sesión
    const registrarse = document.querySelector('.registrarse'); // Formulario registrarse

    const formInicio = document.getElementById('iniciar_sesion');
    const formRegistro = document.getElementById('registrarse');
    const botones = document.getElementsByClassName('enviar');

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
            formInicio.style.justifyContent = 'space-around';
            formInicio.style.transition = 'all 0.5 ease-in';
        } else {
            formRegistro.style.display = 'flex';            
            formRegistro.style.flexDirection = 'column';
            formRegistro.style.transition = 'all 0.5 ease-in';
        }

    }

    function desactivarTrigger(trigger) {
        trigger.setAttribute("data-status", "inactivo");
        trigger.style.backgroundColor = '#DAE3D1';
        
        // ELIMINAR DISPLAY FORMULARIO
        if (trigger.classList.contains("iniciar_sesion")) {
            formInicio.style.display = 'none';
            formInicio.style.transition = 'all 0.5 ease-out';
        } else {
            formRegistro.style.display = 'none';
            formRegistro.style.transition = 'all 0.5 ease-out';
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

        elemento.addEventListener("mouseover", () => {
            if (elemento.getAttribute('data-status') == 'inactivo') {
                elemento.style.backgroundColor = '#A6B695';
            }
        });
    
        elemento.addEventListener("mouseout", () => {
            if (elemento.getAttribute('data-status') == 'inactivo') {
                elemento.style.backgroundColor = '#DAE3D1';
            }
        });
        
    });

});
