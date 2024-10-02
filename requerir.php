<?php
    $a = "variable del principal";
    $b = "otra variable del principal";
    require "ejerequerido.php";
    include "noexiste.php";
    echo "En el script principal";
?>