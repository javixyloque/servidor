
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

    <!-- TABLAS DE DATOS Y CRUD -->
    <div id="tablas">
        <table id="tutor" data-status="activo">
            
        </table>
        <table id="alumnos" data-status="inactivo"></table>

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
                    } finally {
                        $conexion = null;
                    }
                ?>
            </tbody>
        </table>
    </div>


    <!-- MENU DE TRIGGERS PARA CADA UNA DE LAS TABLAS -->
    <div id="menu_trigger">
        <button class="trigger" id="boton_tutor">TUTORES</button>
        <button class="trigger" id="boton_alumnos">ALUMNOS</button>
        <button class="trigger" id="boton_proyecto">PROYECTOS</button>
    </div>


    <footer> 
        <p>Todos los derechos reservados &copy; 2025</p>
        <p>Javier Álvarez Centeno</p>
    </footer>

    <script src="../controlador/centro_admin.js"></script>
</body>
</html>