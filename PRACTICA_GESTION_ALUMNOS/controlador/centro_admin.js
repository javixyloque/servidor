"use strict";

window.addEventListener('DOMContentLoaded', () => {
    
    // VARIABLES PARA LAS TABLAS 
    const tablaTutor = document.getElementById('tutor');
    const tablaAlumnos = document.getElementById('alumnos');
    const tablaProyecto = document.getElementById('proyecto');

    // VARIABLES PARA LOS BOTONES
    const botones = document.querySelectorAll('.trigger');
    const botonTutor = document.getElementById('boton-tutor');
    const botonAlumnos = document.getElementById('boton-alumnos');
    const botonProyecto = document.getElementById('boton-proyecto');

    
    botones.forEach( (boton) => {
        if (boton.getAttribute("data-status") === "inactivo") {
            activarTrigger(boton);
        } else {
            desactivarTrigger(boton);
        }
    })


    function activarTrigger(trigger) { 
        trigger.setAttribute("data-status", "activo");
        trigger.style.backgroundColor = '#575F51';
        // AÑADIR FORMULARIO
        // if (trigger.classList.contains("iniciar_sesion")) {
        //     formInicio.style.display = 'flex';
        //     formInicio.style.flexDirection = 'column';
        // } else {
        //     formRegistro.style.display = 'flex';            
        //     formRegistro.style.flexDirection = 'column';
        // }

    }

    function desactivarTrigger(trigger) {
        trigger.setAttribute("data-status", "inactivo");
        trigger.style.backgroundColor = '#DAE3D1';
        // ELIMINAR DISPLAY FORMULARIO
        // if (trigger.classList.contains("iniciar_sesion")) {
        //     formInicio.style.display = 'none';
        // } else {
        //     formRegistro.style.display = 'none';
        // }
    }
});