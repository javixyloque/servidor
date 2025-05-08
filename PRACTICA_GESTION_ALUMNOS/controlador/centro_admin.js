"use strict";

window.addEventListener('DOMContentLoaded', () => {
    // VARIABLES PARA LAS TABLAS
    const tablaTutor = document.getElementById('tutor');
    const tablaAlumnos = document.getElementById('alumnos');
    const tablaProyecto = document.getElementById('proyecto');


    // VARIABLES PARA LOS BOTONES
    const botones = document.querySelectorAll('.trigger');
    const tablas = document.querySelectorAll('table');
    const menu = document.getElementById('menu_trigger');
    menu.style.display = 'flex'; 
    menu.style.justifyContent ='center';


    // FUNCIÓN PARA MOSTRAR UNA TABLA Y OCULTAR LAS DEMÁS
    function mostrarTabla(tablaId) {
        tablas.forEach(tabla => {
            tabla.style.marginTop = '15vh';
            if (tabla.id === tablaId) {
                tabla.style.display = 'table';
                tabla.setAttribute('data-status', 'activo');
            } else {
                tabla.style.display = 'none';
                tabla.setAttribute('data-status', 'inactivo');
            }
        });
    }

    // FUNCIÓN PARA ACTIVAR UN BOTÓN Y DESACTIVAR LOS DEMÁS
    function activarBoton(botonId) {
        botones.forEach(boton => {
            if (boton.id === botonId) {
                boton.setAttribute('data-status', 'activo');
                boton.style.backgroundColor = '#2C3128';
                boton.style.color = 'white';
            } else {
                boton.setAttribute('data-status', 'inactivo');
                boton.style.backgroundColor = '#DAE3D1';
                boton.style.color = '#575F51';
            }
        });
    }

    // AÑADIR EVENTOS A LOS BOTONES
    botones.forEach(boton => {
        
        boton.addEventListener('click', () => {
            const tablaId = boton.id.replace('boton_', ''); 
            mostrarTabla(tablaId);
            activarBoton(boton.id);
        });

        boton.addEventListener('mouseover', () => {
            if (boton.getAttribute('data-status') === 'inactivo') {
                boton.style.backgroundColor = '#A6B695';
                boton.style.color = 'white';
            }
        });

        boton.addEventListener('mouseout', () => {
            if (boton.getAttribute('data-status') === 'inactivo') {
                boton.style.backgroundColor = '#DAE3D1';
                boton.style.color = '#575F51';
            }
        });
    });

    // CONFIGURACIÓN INICIAL: MOSTRAR LA TABLA DE TUTORES
    mostrarTabla('tutor');
    activarBoton('boton_tutor');
});
