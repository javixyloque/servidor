<?php

    $tam = $_FILES["fichero"]["size"];

    if ($tam>256*1024) {
        echo "<br>Demasiado grande";
        return;
    } 

    echo "Nombre del fichero ".$_FILES ["fichero"]["name"];
    echo "<br>Nombre temporal del fichero en el servidor: " . $_FILES["fichero"]["tmp_name"];   

    $mover = move_uploaded_file($_FILES["fichero"]["tmp_name"],"subidos/" . $_FILES["fichero"]["name"]);
    if($mover){
        echo "<br>Fichero guardado";
    } else {
        echo "<br>Error";
    }