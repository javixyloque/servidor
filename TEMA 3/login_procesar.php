<?php
if(isset($_POST["nombre"], $_POST["edad"])){ //Deben existir ambos 
    echo "Hola ". $_POST["nombre"]." tienes ".$_POST["edad"]." edad.";    

} else {
    echo "Error, falta el nombre y/o edad";

};


