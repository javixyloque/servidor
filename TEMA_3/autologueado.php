<?php
/* si va bien redirige a principal.php si va mal, mensaje de error */
if ($_SERVER["REQUEST_METHOD"] == "POST") {      
    if($_POST['usuario'] === "usuario" and $_POST["clave"] === "1234"){        
        header("Location: http://www.w3schools.com"); //Redirige a esta página
    }else{
        $err = true;
    }    
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Formulario de login</title>        
        <meta charset = "UTF-8">
    </head>
    <body>            
        <?php 
        if(isset($err)){
            echo "<p> Revise usuario y contraseña</p>";
        }
        ?>
    <!-- IMPORTANTE EL HTMLSPECIALCHARS , SINO SE PUEDE INYECTAR CODIGO EN LA URL Y OBTENER DATOS--->
    
        <form action = "<?= htmlspecialchars($_SERVER['PHP_SELF'])?>" method = "POST">
            <label for = "usuario">Usuario</label> 
            <input id = "usuario" name = "usuario" type = "text">                
            <label for = "clave">Clave</label> 
            <input id = "clave" name = "clave" type = "password">            
            
            <input type = "submit">
        </form>
    </body>
</html>

