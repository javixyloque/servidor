<?php
    require_once'../biblioteca/biblioteca.php';
    $conexion = conexion();
    session_start();
    
    


?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles.css">
    <title>REGISTRARSE / INICIAR SESIÓN</title>
</head>
<body>

<header>

        <a href="https://www.jcyl.es/web/jcyl/Portada/es/Home/1246890364336/_/_/_"><img src="../biblioteca/JCYL.png" alt="JCYL"></a>
    

        <!-- AUTOENLACE -->
        <a href="./index.php"> 
            
            IES MENDOZA
            
        </a>
        <hr>
        
        <!-- FILTRAR QUÉ CENTRO DE CONTROL TIENE EL USUARIO -->
        <?php if (isset($_SESSION['login'])) {
            if ($_SESSION['tipo_usu']===1) {
                echo '<a  href="./centro_admin.php">';
            } else {
                echo '<a  href="./centro_tutor.php">';
            }
            echo "CENTRO DE CONTROL</a>";
            echo"<hr>";
        } 
            
           
        ?>
        

            <!--    SCRIPT PARA BOTÓN DE CERRAR SESIÓN      -->
            <?php
                if (isset($_SESSION['login'])) {
                    echo "<a href='../controlador/cerrar_sesion.php'>CERRAR SESIÓN</a>";
                    echo '<hr>';
                }
                
            ?>
        


        <a id="login" href="./login.php">
            REGISTRARSE<hr>INICIAR SESIÓN
        </a>
    </header>

    <div id="container">
        <section id="cabecero">
            <h2 class="iniciar_sesion"  data-status="activo">INICIAR SESIÓN</h1>
            <h2 class="registrarse"  data-status="inactivo">REGISTRARSE</h1>
        </section>


        <form id="iniciar_sesion" action="../controlador/iniciar_sesion.php" method="post">
            <label for="user">NOMBRE DE USUARIO</label>
            <input type="text" id="usuarioLogin" name="user" placeholder="lolobenitez43" required>

            <label for="pass">CONTRASEÑA</label>
            <input type="password" name="pass" placeholder="********" required>

            <input type="submit" class="enviar" value="Iniciar Sesión">
        </form>


        <form id="registrarse" action="../controlador/registrarse.php" method="post">

            <label for="nombre">NOMBRE</label>
            <input type="text" name="nombre" required>

            <label for="apellidos">APELLIDOS</label>
            <input type="text" name="apellidos" required>

            <label for="correo">CORREO ELECTRÓNICO</label>
            <input type="email" name="correo" required>


            <label for="user">NOMBRE DE USUARIO</label>
            <input type="text" id="usuarioReg" name="user" placeholder="lolobenitez43">

            <label for="pass">CONTRASEÑA</label>
            <input type="passwordReg" name="pass" placeholder="********">

            <input type="submit" class="enviar" value="Registrarse">
        </form>

        
    </div>

    <footer> 
        <p>Todos los derechos reservados &copy; 2025</p>
        <p>Javier Álvarez Centeno</p>
    </footer>

    <script src="../controlador/login.js"></script>
</body>
</html>