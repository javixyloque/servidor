"use strict";

document.addEventListener("DOMContentLoaded",  () => {
    let body = document.body;
    let claroOscuro = document.getElementById("claro_oscuro");
    console.log(body);
    console.log(claroOscuro);



    
    

    function cambiarOscuro(e) {
        e.preventDefault();
        let modo = localStorage.getItem("modo");

        if (modo=="modo_claro") {
            // MODO OSCURO PARA EL DOCUMENTO
            body.id= "modo_oscuro";
            localStorage.setItem("modo","modo_oscuro");

        } else if (modo=="modo_oscuro") {
            // MODO CLARO PARA EL DOCUMENTO
            body.id= "modo_claro";
            localStorage.setItem("modo","modo_claro");
        } else {
            // MODO CLARO POR DEFECTO
            body.id = "modo_claro";   
            localStorage.setItem("modo", "modo_claro");
        }
        
    }

    function cambiarClaro() {
        console.log(localStorage.getItem("modo"));
        
        body.id= "modo_claro";
    }


    claroOscuro.addEventListener("click", cambiarOscuro);
});