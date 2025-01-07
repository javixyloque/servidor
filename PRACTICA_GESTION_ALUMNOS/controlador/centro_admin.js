"use strict";

window.addEventListener('DOMContentLoaded', () => {
    // VARIABLES PARA LAS TABLAS 
    const tablaTutor = document.getElementById('tutor');
    const tablaAlumnos = document.getElementById('alumnos');
    const tablaProyecto = document.getElementById('proyecto');

    // VARIABLES PARA LOS BOTONES
    const botones = document.querySelectorAll('.trigger');
    const menu = document.getElementById('menu_trigger');

    // BUCLE PARA AÑADIR ESTILOS Y EVENTOS A LOS BOTONES
    botones.forEach((boton) => {
        boton.style.position = "absolute";
        boton.style.marginTop = "50px";

        if (boton.getAttribute('data-status') === 'inactivo') {
            boton.addEventListener('click', () => activarTrigger(boton));
        }

        boton.addEventListener('mouseover', () => {
            boton.style.backgroundColor = '#575F51';
            boton.style.color = 'white';
        });

        boton.addEventListener('mouseout', () => {
            boton.style.backgroundColor = '#DAE3D1';
            boton.style.color = '#575F51';
        });
    });

    function activarTrigger(boton) {
        // Cambiar el estado del botón a activo
        botones.forEach((btn) => {
            btn.setAttribute("data-status", "inactivo");
            btn.style.backgroundColor = '#DAE3D1';
        });

        boton.setAttribute("data-status", "activo");
        boton.style.backgroundColor = '#575F51';

        // Mostrar/ocultar tablas según el botón
        if (boton.id === 'boton_tutor') {
            tablaTutor.style.display = 'block';
            tablaAlumnos.style.display = 'none';
            tablaProyecto.style.display = 'none';
        } else if (boton.id === 'boton_alumnos') {
            tablaTutor.style.display = 'none';
            tablaAlumnos.style.display = 'block';
            tablaProyecto.style.display = 'none';
        } else if (boton.id === 'boton_proyecto') {
            tablaTutor.style.display = 'none';
            tablaAlumnos.style.display = 'none';
            tablaProyecto.style.display = 'block';
        }
    }
});
