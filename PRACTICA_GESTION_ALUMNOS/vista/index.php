<!--   
USUARIO ADMINISTRADOR:  
    'id_tutor' = 1
    'login' = 'admin'
    'password' = 'admin123'
    'nombre' = 'Administrador'
    'apellidos' = 'Del SGBD'
    'tipo_usu' = 1 (administrador)

ALUMNOS: 
INSERT INTO `alumnos` (`dni`, `nombre`, `apellido1`, `apellido2`, `email`, `telefono`, `curso`) VALUES


    ('41069326D', 'Ana', 'Gómez', 'Sánchez', 'ana.gómez@correo.com', '679752825', 2),
    ('55631441B', 'Carlos', 'Gómez', 'Pérez', 'carlos.gómez@email.net', '683183588', 5),
    ('60073491V', 'Luis', 'García', 'Pérez', 'luis.garcía@correo.com', '642540732', 2),
    ('95883943V', 'Lucía', 'López', 'Martínez', 'lucía.lópez@correo.com', '626637101', 3),
    ('62457902D', 'Ana', 'Rodríguez', 'Gómez', 'ana.rodríguez@correo.com', '677112223', 1),
    ('64858660W', 'Lucía', 'Fernández', 'Sánchez', 'lucía.fernández@email.net', '668105974', 5),
    ('90449524M', 'Laura', 'García', 'Sánchez', 'laura.garcía@example.com', '659449657', 1),
    ('62847704B', 'Sofía', 'García', 'Pérez', 'sofía.garcía@example.com', '683754628', 3),
    ('84171408F', 'Carlos', 'Fernández', 'López', 'carlos.fernández@correo.com', '636620161', 4),
    ('19082594H', 'María', 'Rodríguez', 'Rodríguez', 'maría.rodríguez@correo.com', '665726326', 1),
    ('38550127N', 'Pedro', 'Pérez', 'Sánchez', 'pedro.pérez@email.net', '679235788', 3),
    ('76218008K', 'María', 'Martínez', 'Gómez', 'maría.martínez@email.net', '622354326', 3),
    ('92632613I', 'Miguel', 'Fernández', 'García', 'miguel.fernández@email.net', '632971192', 1),
    ('19920677J', 'María', 'Martínez', 'Pérez', 'maría.martínez@example.com', '631047506', 4),
    ('19831568Y', 'Laura', 'García', 'Sánchez', 'laura.garcía@email.net', '662368312', 4),
    ('80731194S', 'Juan', 'Rodríguez', 'López', 'juan.rodríguez@example.com', '617458376', 5),
    ('83963556U', 'Luis', 'Pérez', 'García', 'luis.pérez@correo.com', '600682772', 3),
    ('66488193C', 'Luis', 'Sánchez', 'López', 'luis.sánchez@example.com', '661994960', 3),
    ('85819202R', 'Carlos', 'López', 'Sánchez', 'carlos.lópez@email.net', '691119227', 3),
    ('22322597C', 'Ana', 'Fernández', 'Rodríguez', 'ana.fernández@example.com', '677112456', 2),
    ('45660840O', 'Carlos', 'Rodríguez', 'Rodríguez', 'carlos.rodríguez@email.net', '656565872', 2),
    ('87424899S', 'Lucía', 'García', 'García', 'lucía.garcía@example.com', '614737764', 3),
    ('75562135S', 'Luis', 'Pérez', 'Martínez', 'luis.pérez@correo.com', '637187023', 1),
    ('73456557T', 'María', 'García', 'Pérez', 'maría.garcía@correo.com', '673161454', 4),
    ('65584653S', 'Juan', 'Rodríguez', 'Pérez', 'juan.rodríguez@example.com', '692707995', 3),
    ('80746040W', 'Juan', 'Pérez', 'Rodríguez', 'juan.pérez@example.com', '666832039', 2),
    ('16408353B', 'Sofía', 'García', 'López', 'sofía.garcía@correo.com', '629882058', 2),
    ('44480977M', 'Laura', 'Rodríguez', 'López', 'laura.rodríguez@email.net', '678781426', 2),
    ('25933692S', 'Laura', 'Martínez', 'Fernández', 'laura.martínez@email.net', '600466460', 2),
    ('31805909H', 'Laura', 'Pérez', 'García', 'laura.pérez@example.com', '618139056', 3),
    ('86802878K', 'María', 'Martínez', 'López', 'maría.martínez@example.com', '686689509', 2),
    ('37208389B', 'Carlos', 'Rodríguez', 'Sánchez', 'carlos.rodríguez@example.com', '616062411', 2),
    ('99906210B', 'Carlos', 'García', 'Fernández', 'carlos.garcía@email.net', '661915513', 4),
    ('59440582K', 'María', 'Gómez', 'Sánchez', 'maría.gómez@example.com', '607630892', 2),
    ('74188893H', 'Miguel', 'Martínez', 'López', 'miguel.martínez@example.com', '668581426', 3),
    ('63838797W', 'María', 'García', 'Martínez', 'maría.garcía@example.com', '678061633', 1),
    ('24862629S', 'Carlos', 'López', 'Gómez', 'carlos.lópez@correo.com', '605819345', 1),
    ('56177486T', 'Juan', 'Pérez', 'López', 'juan.pérez@example.com', '632159315', 2),
    ('89125476C', 'Miguel', 'Rodríguez', 'Pérez', 'miguel.rodríguez@email.net', '610402488', 2),
    ('54174143Y', 'Carlos', 'Gómez', 'Sánchez', 'carlos.gómez@email.net', '669143548', 3);





TUTORES: 

INSERT INTO `tutor` (`id_tutor`, `login`, `password`, `correo`, `nombre`, `apellidos`, `tipo_usu`, `baja`, `activar`) VALUES


    (1, 'tutor1', 'pass1', 'tutor1@example.com', 'TutorNombre1', 'TutorApellido1', 1, 1, 'inactivo'),
    (2, 'tutor2', 'pass2', 'tutor2@example.com', 'TutorNombre2', 'TutorApellido2', 1, 1, 'inactivo'),
    (3, 'tutor3', 'pass3', 'tutor3@example.com', 'TutorNombre3', 'TutorApellido3', 1, 1, 'inactivo'),
    (4, 'tutor4', 'pass4', 'tutor4@example.com', 'TutorNombre4', 'TutorApellido4', 1, 1, 'inactivo'),
    (5, 'tutor5', 'pass5', 'tutor5@example.com', 'TutorNombre5', 'TutorApellido5', 1, 1, 'inactivo'),
    (6, 'tutor6', 'pass6', 'tutor6@example.com', 'TutorNombre6', 'TutorApellido6', 1, 1, 'inactivo'),
    (7, 'tutor7', 'pass7', 'tutor7@example.com', 'TutorNombre7', 'TutorApellido7', 1, 1, 'inactivo'),
    (8, 'tutor8', 'pass8', 'tutor8@example.com', 'TutorNombre8', 'TutorApellido8', 1, 1, 'inactivo'),
    (9, 'tutor9', 'pass9', 'tutor9@example.com', 'TutorNombre9', 'TutorApellido9', 1, 1, 'inactivo'),
    (10, 'tutor10', 'pass10', 'tutor10@example.com', 'TutorNombre10', 'TutorApellido10', 1, 1, 'inactivo');






PROYECTOS:
INSERT INTO `proyecto` (`id_proyecto`, `titulo`, `descripcion`, `periodo`, `curso`, `fecha_presentacion`, `nota`, `logotipo`, `pdf_proyecto`, `alumno`, `tutor`) VALUES


    (1, 'Proyecto 1', 'Descripción del proyecto 1', 'Periodo 2020', 'Curso 4', '2024-01-02', 73, NULL, 'proyecto_1.pdf', 31, 1),
    (2, 'Proyecto 2', 'Descripción del proyecto 2', 'Periodo 2024', 'Curso 4', '2024-10-09', 52, NULL, 'proyecto_2.pdf', 7, 1),
    (3, 'Proyecto 3', 'Descripción del proyecto 3', 'Periodo 2020', 'Curso 2', '2024-08-26', 72, NULL, 'proyecto_3.pdf', 25, 2),
    (4, 'Proyecto 4', 'Descripción del proyecto 4', 'Periodo 2022', 'Curso 3', '2024-01-17', 98, NULL, 'proyecto_4.pdf', 36, 2),
    (5, 'Proyecto 5', 'Descripción del proyecto 5', 'Periodo 2022', 'Curso 4', '2024-09-24', 76, NULL, 'proyecto_5.pdf', 6, 3),
    (6, 'Proyecto 6', 'Descripción del proyecto 6', 'Periodo 2021', 'Curso 3', '2024-02-11', 86, NULL, 'proyecto_6.pdf', 17, 3),
    (7, 'Proyecto 7', 'Descripción del proyecto 7', 'Periodo 2021', 'Curso 4', '2024-11-13', 96, NULL, 'proyecto_7.pdf', 16, 4),
    (8, 'Proyecto 8', 'Descripción del proyecto 8', 'Periodo 2023', 'Curso 1', '2024-11-09', 78, NULL, 'proyecto_8.pdf', 24, 4),
    (9, 'Proyecto 9', 'Descripción del proyecto 9', 'Periodo 2023', 'Curso 3', '2024-08-04', 94, NULL, 'proyecto_9.pdf', 23, 5),
    (10, 'Proyecto 10', 'Descripción del proyecto 10', 'Periodo 2020', 'Curso 5', '2024-07-03', 57, NULL, 'proyecto_10.pdf', 22, 5),
    (11, 'Proyecto 11', 'Descripción del proyecto 11', 'Periodo 2023', 'Curso 4', '2024-04-09', 85, NULL, 'proyecto_11.pdf', 35, 6),
    (12, 'Proyecto 12', 'Descripción del proyecto 12', 'Periodo 2024', 'Curso 1', '2024-07-12', 53, NULL, 'proyecto_12.pdf', 8, 6),
    (13, 'Proyecto 13', 'Descripción del proyecto 13', 'Periodo 2023', 'Curso 5', '2024-04-27', 50, NULL, 'proyecto_13.pdf', 1, 7),
    (14, 'Proyecto 14', 'Descripción del proyecto 14', 'Periodo 2021', 'Curso 2', '2024-01-19', 87, NULL, 'proyecto_14.pdf', 4, 7),
    (15, 'Proyecto 15', 'Descripción del proyecto 15', 'Periodo 2024', 'Curso 3', '2024-02-05', 68, NULL, 'proyecto_15.pdf', 32, 8),
    (16, 'Proyecto 16', 'Descripción del proyecto 16', 'Periodo 2022', 'Curso 2', '2024-10-26', 83, NULL, 'proyecto_16.pdf', 30, 8),
    (17, 'Proyecto 17', 'Descripción del proyecto 17', 'Periodo 2021', 'Curso 3', '2024-10-14', 65, NULL, 'proyecto_17.pdf', 10, 9),
    (18, 'Proyecto 18', 'Descripción del proyecto 18', 'Periodo 2020', 'Curso 3', '2024-03-10', 93, NULL, 'proyecto_18.pdf', 27, 9),
    (19, 'Proyecto 19', 'Descripción del proyecto 19', 'Periodo 2022', 'Curso 4', '2024-10-28', 76, NULL, 'proyecto_19.pdf', 13, 10),
    (20, 'Proyecto 20', 'Descripción del proyecto 20', 'Periodo 2021', 'Curso 4', '2024-10-17', 58, NULL, 'proyecto_20.pdf', 39, 10),
    (21, 'Proyecto 21', 'Descripción del proyecto 21', 'Periodo 2024', 'Curso 5', '2024-11-14', 83, NULL, 'proyecto_21.pdf', 38, NULL),
    (22, 'Proyecto 22', 'Descripción del proyecto 22', 'Periodo 2022', 'Curso 2', '2024-10-15', 79, NULL, 'proyecto_22.pdf', 29, NULL),
    (23, 'Proyecto 23', 'Descripción del proyecto 23', 'Periodo 2021', 'Curso 2', '2024-09-16', 82, NULL, 'proyecto_23.pdf', 15, NULL),
    (24, 'Proyecto 24', 'Descripción del proyecto 24', 'Periodo 2020', 'Curso 3', '2024-02-22', 68, NULL, 'proyecto_24.pdf', 2, NULL),
    (25, 'Proyecto 25', 'Descripción del proyecto 25', 'Periodo 2022', 'Curso 3', '2024-10-23', 57, NULL, 'proyecto_25.pdf', 20, NULL);


-->





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    
</body>
</html>