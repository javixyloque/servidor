
<?php
    require_once '../biblioteca/biblioteca.php';
    session_start(); 
    $conexion = conexion();
    $sqlTutores = "SELECT * FROM tutor"



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles.css">
    <title>ADMINISTRACIÓN</title>
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
                echo '<a href="./centro_admin.php">';
            } else {
                echo '<a href="./centro_tutor.php">';
            }
        } 
            echo "CENTRO DE CONTROL</a>";
            echo"<hr>";
        ?>
        

            <?php
                if (isset($_SESSION['login'])) {
                    echo "<a href='../controlador/cerrar_sesion.php'>CERRAR SESIÓN</a>";
                }
                echo '<hr>';
            ?>

        <!-- FIN -->


        <a id="login" href="./login.php">
            REGISTRARSE<hr>INICIAR SESIÓN
        </a>
    </header>

    <section>

    <div id="menu_trigger">
        <button class="trigger" id="boton_tutor" data-status="activo">TUTORES</button>
        <button class="trigger" id="boton_alumnos" data-status="inactivo">ALUMNOS</button>
        <button class="trigger" id="boton_proyecto" data-status="inactivo">PROYECTOS</button>
    </div>


    <!-- TABLAS DE DATOS Y CRUD -->
    <div id="tablas">
        <table id="tutor" data-status="activo">
            <thead>
                <th>NOMBRE</th>
                <th>CORREO</th>
                <th>ACTIVAR</th>
                <th>ELIMINAR</th>
            </thead>
            <tbody>
            <?php
                try {
                    // LOS PROYECTOS ESTARÁN ORDENADOS ALFABÉTICAMENTE POR LOS APELLIDOS DEL ALUMNO
                    $sql = "SELECT * FROM tutor WHERE baja=0 AND tipo_usu=2";
            
                    $sentencia = $conexion -> prepare($sql);
                    $sentencia -> setFetchMode(PDO::FETCH_ASSOC);
                    $sentencia -> execute();
            
            
                    while ($fila = $sentencia->fetch()) {
                        echo "<tr>";
                        // echo "<td>".$fila['id_proyecto']."</td>";
                        echo "<td>".$fila['nomTutor']." ".$fila['apellidos']."</td>";
                        echo "<td>".$fila['correo']."</td>";
                        echo "<td><a href='../controlador/eliminar_tutor.php?id={$fila['id_tutor']}'>Eliminar</a></td>";
                        if ($fila['activar']=='inactivo') {
                            echo "<td><a href='../controlador/activar_tutor.php?id={$fila['id_tutor']}'>Activar</a></td>";
                        } else if ($fila['activar']=='activo') {
                            echo "<td><a href='../controlador/desactivar_tutor.php?id={$fila['id_tutor']}'>Desactivar</a></td>";
                        }                                      
                        // echo "<td><a href='./admin_editar.php?id=".$fila['id_proyecto']."'><button>Modificar</button></a></td>";
                        // echo "<td><a href='../controlador/eliminar.php?id=".$fila['id_proyecto']."'><button>Eliminar</button></a></td>";                        
                        echo "</tr>";
                    }
                } catch (PDOException $e) {
                    echo $e ->getMessage();
                }
            ?>
            </tbody>
        </table>
        <table id="alumnos" data-status="inactivo">

                
        </table>

        <table id="proyecto" data-status="inactivo">
            <thead>
                <th>ALUMNO</th>
                <th>PERIODO</th>
                <th>CURSO</th>
                <th>FECHA DE PRESENTACIÓN</th>
                <th>NOTA</th>
                <th>LOGO</th>
                <th>PDF</th>
                <th>TUTOR</th>
            </thead>
            <tbody>
                <?php
                    
                    try {
                        // LOS PROYECTOS ESTARÁN ORDENADOS ALFABÉTICAMENTE POR LOS APELLIDOS DEL ALUMNO
                        $sql = "SELECT p.*, a.nombre, a.apellido1, a.apellido2, t.nomTutor, t.apellidos  
                                FROM proyecto p JOIN alumnos a ON a.id_alumno = p.alumno 
                                JOIN tutor t ON t.id_tutor = p.tutor ORDER BY a.apellido1, a.apellido2 ASC";
                
                        $sentencia = $conexion -> prepare($sql);
                        $sentencia -> setFetchMode(PDO::FETCH_ASSOC);
                        $sentencia -> execute();
                
                
                        while ($fila = $sentencia->fetch()) {
                            echo "<tr>";
                            // echo "<td>".$fila['id_proyecto']."</td>";
                            echo "<td>".$fila['nombre']." ".$fila['apellido1']." ".$fila['apellido2']."</td>";
                            echo "<td>".$fila['periodo']."</td>";
                            echo "<td>".$fila['curso']."</td>";
                            echo "<td>".$fila['fecha_presentacion']."</td>";
                            echo "<td>".$fila['nota']."</td>";
                            echo "<td><img height='100px' width='100px' src='data:image/jpeg;base64,".base64_encode($fila['logotipo'])."' alt='Logo'></td>";
                            echo "<td><a href='data:application/pdf;base64,".base64_encode($fila['pdf_proyecto'])." ' target='_blank'>Descargar PDF</a></td>";  
                            echo "<td>".$fila['nomTutor']." ".$fila['apellidos']."</td>";                                              
                            echo "<td><a href='./admin_editar.php?id=".$fila['id_proyecto']."'><button>Modificar</button></a></td>";
                            echo "<td><a href='../controlador/eliminar.php?id=".$fila['id_proyecto']."'><button>Eliminar</button></a></td>";                        
                            echo "</tr>";
                        }
                    } catch (PDOException $e) {
                        echo $e ->getMessage();
                    }
                ?>
            </tbody>
        </table>
    </div>


    <!-- MENU DE TRIGGERS PARA CADA UNA DE LAS TABLAS -->
    

    </section>
    <footer> 
        <p>Todos los derechos reservados &copy; 2025</p>
        <p>Javier Álvarez Centeno</p>
    </footer>

    <script src="../controlador/centro_admin.js"></script>
</body>
</html>